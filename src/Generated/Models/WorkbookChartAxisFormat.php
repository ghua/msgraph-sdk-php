<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAxisFormat extends Entity 
{
    /** @var WorkbookChartFont|null $font Represents the font attributes (font name, font size, color, etc.) for a chart axis element. Read-only. */
    private ?WorkbookChartFont $font = null;
    
    /** @var WorkbookChartLineFormat|null $line Represents chart line formatting. Read-only. */
    private ?WorkbookChartLineFormat $line = null;
    
    /**
     * Instantiates a new workbookChartAxisFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartAxisFormat
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartAxisFormat {
        return new WorkbookChartAxisFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $currentObject = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'font' => function (ParseNode $n) use ($currentObject) { $currentObject->setFont($n->getObjectValue(WorkbookChartFont::class)); },
            'line' => function (ParseNode $n) use ($currentObject) { $currentObject->setLine($n->getObjectValue(WorkbookChartLineFormat::class)); },
        ]);
    }

    /**
     * Gets the font property value. Represents the font attributes (font name, font size, color, etc.) for a chart axis element. Read-only.
     * @return WorkbookChartFont|null
    */
    public function getFont(): ?WorkbookChartFont {
        return $this->font;
    }

    /**
     * Gets the line property value. Represents chart line formatting. Read-only.
     * @return WorkbookChartLineFormat|null
    */
    public function getLine(): ?WorkbookChartLineFormat {
        return $this->line;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('font', $this->font);
        $writer->writeObjectValue('line', $this->line);
    }

    /**
     * Sets the font property value. Represents the font attributes (font name, font size, color, etc.) for a chart axis element. Read-only.
     *  @param WorkbookChartFont|null $value Value to set for the font property.
    */
    public function setFont(?WorkbookChartFont $value ): void {
        $this->font = $value;
    }

    /**
     * Sets the line property value. Represents chart line formatting. Read-only.
     *  @param WorkbookChartLineFormat|null $value Value to set for the line property.
    */
    public function setLine(?WorkbookChartLineFormat $value ): void {
        $this->line = $value;
    }

}
