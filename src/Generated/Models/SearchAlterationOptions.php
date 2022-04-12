<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SearchAlterationOptions implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $enableModification Indicates whether spelling modifications are enabled. If enabled, the user will get the search results for the corrected query in case of no results for the original query with typos. The response will also include the spelling modification information in the queryAlterationResponse property. Optional. */
    private ?bool $enableModification = null;
    
    /** @var bool|null $enableSuggestion Indicates whether spelling suggestions are enabled. If enabled, the user will get the search results for the original search query and suggestions for spelling correction in the queryAlterationResponse property of the response for the typos in the query. Optional. */
    private ?bool $enableSuggestion = null;
    
    /**
     * Instantiates a new searchAlterationOptions and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SearchAlterationOptions
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SearchAlterationOptions {
        return new SearchAlterationOptions();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enableModification property value. Indicates whether spelling modifications are enabled. If enabled, the user will get the search results for the corrected query in case of no results for the original query with typos. The response will also include the spelling modification information in the queryAlterationResponse property. Optional.
     * @return bool|null
    */
    public function getEnableModification(): ?bool {
        return $this->enableModification;
    }

    /**
     * Gets the enableSuggestion property value. Indicates whether spelling suggestions are enabled. If enabled, the user will get the search results for the original search query and suggestions for spelling correction in the queryAlterationResponse property of the response for the typos in the query. Optional.
     * @return bool|null
    */
    public function getEnableSuggestion(): ?bool {
        return $this->enableSuggestion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $currentObject = $this;
        return  [
            'enableModification' => function (ParseNode $n) use ($currentObject) { $currentObject->setEnableModification($n->getBooleanValue()); },
            'enableSuggestion' => function (ParseNode $n) use ($currentObject) { $currentObject->setEnableSuggestion($n->getBooleanValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enableModification', $this->enableModification);
        $writer->writeBooleanValue('enableSuggestion', $this->enableSuggestion);
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
     * Sets the enableModification property value. Indicates whether spelling modifications are enabled. If enabled, the user will get the search results for the corrected query in case of no results for the original query with typos. The response will also include the spelling modification information in the queryAlterationResponse property. Optional.
     *  @param bool|null $value Value to set for the enableModification property.
    */
    public function setEnableModification(?bool $value ): void {
        $this->enableModification = $value;
    }

    /**
     * Sets the enableSuggestion property value. Indicates whether spelling suggestions are enabled. If enabled, the user will get the search results for the original search query and suggestions for spelling correction in the queryAlterationResponse property of the response for the typos in the query. Optional.
     *  @param bool|null $value Value to set for the enableSuggestion property.
    */
    public function setEnableSuggestion(?bool $value ): void {
        $this->enableSuggestion = $value;
    }

}
