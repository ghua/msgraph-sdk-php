<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileHash implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var FileHashType|null $hashType File hash type. Possible values are: unknown, sha1, sha256, md5, authenticodeHash256, lsHash, ctph, peSha1, peSha256. */
    private ?FileHashType $hashType = null;
    
    /** @var string|null $hashValue Value of the file hash. */
    private ?string $hashValue = null;
    
    /**
     * Instantiates a new fileHash and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileHash
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): FileHash {
        return new FileHash();
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
        $currentObject = $this;
        return  [
            'hashType' => function (ParseNode $n) use ($currentObject) { $currentObject->setHashType($n->getEnumValue(FileHashType::class)); },
            'hashValue' => function (ParseNode $n) use ($currentObject) { $currentObject->setHashValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the hashType property value. File hash type. Possible values are: unknown, sha1, sha256, md5, authenticodeHash256, lsHash, ctph, peSha1, peSha256.
     * @return FileHashType|null
    */
    public function getHashType(): ?FileHashType {
        return $this->hashType;
    }

    /**
     * Gets the hashValue property value. Value of the file hash.
     * @return string|null
    */
    public function getHashValue(): ?string {
        return $this->hashValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('hashType', $this->hashType);
        $writer->writeStringValue('hashValue', $this->hashValue);
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
     * Sets the hashType property value. File hash type. Possible values are: unknown, sha1, sha256, md5, authenticodeHash256, lsHash, ctph, peSha1, peSha256.
     *  @param FileHashType|null $value Value to set for the hashType property.
    */
    public function setHashType(?FileHashType $value ): void {
        $this->hashType = $value;
    }

    /**
     * Sets the hashValue property value. Value of the file hash.
     *  @param string|null $value Value to set for the hashValue property.
    */
    public function setHashValue(?string $value ): void {
        $this->hashValue = $value;
    }

}
