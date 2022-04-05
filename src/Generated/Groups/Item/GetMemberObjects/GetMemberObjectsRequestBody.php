<?php

namespace Microsoft\Graph\Generated\Groups\Item\GetMemberObjects;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetMemberObjectsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $securityEnabledOnly The securityEnabledOnly property */
    private ?bool $securityEnabledOnly = null;
    
    /**
     * Instantiates a new getMemberObjectsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetMemberObjectsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GetMemberObjectsRequestBody {
        return new GetMemberObjectsRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'securityEnabledOnly' => function (self $o, ParseNode $n) { $o->setSecurityEnabledOnly($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the securityEnabledOnly property value. The securityEnabledOnly property
     * @return bool|null
    */
    public function getSecurityEnabledOnly(): ?bool {
        return $this->securityEnabledOnly;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('securityEnabledOnly', $this->securityEnabledOnly);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the securityEnabledOnly property value. The securityEnabledOnly property
     *  @param bool|null $value Value to set for the securityEnabledOnly property.
    */
    public function setSecurityEnabledOnly(?bool $value ): void {
        $this->securityEnabledOnly = $value;
    }

}
