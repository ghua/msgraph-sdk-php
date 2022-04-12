<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActivityStat extends Entity 
{
    /** @var ItemActionStat|null $access Statistics about the access actions in this interval. Read-only. */
    private ?ItemActionStat $access = null;
    
    /** @var array<ItemActivity>|null $activities Exposes the itemActivities represented in this itemActivityStat resource. */
    private ?array $activities = null;
    
    /** @var ItemActionStat|null $create Statistics about the create actions in this interval. Read-only. */
    private ?ItemActionStat $create = null;
    
    /** @var ItemActionStat|null $delete Statistics about the delete actions in this interval. Read-only. */
    private ?ItemActionStat $delete = null;
    
    /** @var ItemActionStat|null $edit Statistics about the edit actions in this interval. Read-only. */
    private ?ItemActionStat $edit = null;
    
    /** @var DateTime|null $endDateTime When the interval ends. Read-only. */
    private ?DateTime $endDateTime = null;
    
    /** @var IncompleteData|null $incompleteData Indicates that the statistics in this interval are based on incomplete data. Read-only. */
    private ?IncompleteData $incompleteData = null;
    
    /** @var bool|null $isTrending Indicates whether the item is 'trending.' Read-only. */
    private ?bool $isTrending = null;
    
    /** @var ItemActionStat|null $move Statistics about the move actions in this interval. Read-only. */
    private ?ItemActionStat $move = null;
    
    /** @var DateTime|null $startDateTime When the interval starts. Read-only. */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new itemActivityStat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemActivityStat
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ItemActivityStat {
        return new ItemActivityStat();
    }

    /**
     * Gets the access property value. Statistics about the access actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getAccess(): ?ItemActionStat {
        return $this->access;
    }

    /**
     * Gets the activities property value. Exposes the itemActivities represented in this itemActivityStat resource.
     * @return array<ItemActivity>|null
    */
    public function getActivities(): ?array {
        return $this->activities;
    }

    /**
     * Gets the create property value. Statistics about the create actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getCreate(): ?ItemActionStat {
        return $this->create;
    }

    /**
     * Gets the delete property value. Statistics about the delete actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getDelete(): ?ItemActionStat {
        return $this->delete;
    }

    /**
     * Gets the edit property value. Statistics about the edit actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getEdit(): ?ItemActionStat {
        return $this->edit;
    }

    /**
     * Gets the endDateTime property value. When the interval ends. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $currentObject = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'access' => function (ParseNode $n) use ($currentObject) { $currentObject->setAccess($n->getObjectValue(ItemActionStat::class)); },
            'activities' => function (ParseNode $n) use ($currentObject) { $currentObject->setActivities($n->getCollectionOfObjectValues(ItemActivity::class)); },
            'create' => function (ParseNode $n) use ($currentObject) { $currentObject->setCreate($n->getObjectValue(ItemActionStat::class)); },
            'delete' => function (ParseNode $n) use ($currentObject) { $currentObject->setDelete($n->getObjectValue(ItemActionStat::class)); },
            'edit' => function (ParseNode $n) use ($currentObject) { $currentObject->setEdit($n->getObjectValue(ItemActionStat::class)); },
            'endDateTime' => function (ParseNode $n) use ($currentObject) { $currentObject->setEndDateTime($n->getDateTimeValue()); },
            'incompleteData' => function (ParseNode $n) use ($currentObject) { $currentObject->setIncompleteData($n->getObjectValue(IncompleteData::class)); },
            'isTrending' => function (ParseNode $n) use ($currentObject) { $currentObject->setIsTrending($n->getBooleanValue()); },
            'move' => function (ParseNode $n) use ($currentObject) { $currentObject->setMove($n->getObjectValue(ItemActionStat::class)); },
            'startDateTime' => function (ParseNode $n) use ($currentObject) { $currentObject->setStartDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the incompleteData property value. Indicates that the statistics in this interval are based on incomplete data. Read-only.
     * @return IncompleteData|null
    */
    public function getIncompleteData(): ?IncompleteData {
        return $this->incompleteData;
    }

    /**
     * Gets the isTrending property value. Indicates whether the item is 'trending.' Read-only.
     * @return bool|null
    */
    public function getIsTrending(): ?bool {
        return $this->isTrending;
    }

    /**
     * Gets the move property value. Statistics about the move actions in this interval. Read-only.
     * @return ItemActionStat|null
    */
    public function getMove(): ?ItemActionStat {
        return $this->move;
    }

    /**
     * Gets the startDateTime property value. When the interval starts. Read-only.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('access', $this->access);
        $writer->writeCollectionOfObjectValues('activities', $this->activities);
        $writer->writeObjectValue('create', $this->create);
        $writer->writeObjectValue('delete', $this->delete);
        $writer->writeObjectValue('edit', $this->edit);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeObjectValue('incompleteData', $this->incompleteData);
        $writer->writeBooleanValue('isTrending', $this->isTrending);
        $writer->writeObjectValue('move', $this->move);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
    }

    /**
     * Sets the access property value. Statistics about the access actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the access property.
    */
    public function setAccess(?ItemActionStat $value ): void {
        $this->access = $value;
    }

    /**
     * Sets the activities property value. Exposes the itemActivities represented in this itemActivityStat resource.
     *  @param array<ItemActivity>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value ): void {
        $this->activities = $value;
    }

    /**
     * Sets the create property value. Statistics about the create actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the create property.
    */
    public function setCreate(?ItemActionStat $value ): void {
        $this->create = $value;
    }

    /**
     * Sets the delete property value. Statistics about the delete actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the delete property.
    */
    public function setDelete(?ItemActionStat $value ): void {
        $this->delete = $value;
    }

    /**
     * Sets the edit property value. Statistics about the edit actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the edit property.
    */
    public function setEdit(?ItemActionStat $value ): void {
        $this->edit = $value;
    }

    /**
     * Sets the endDateTime property value. When the interval ends. Read-only.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the incompleteData property value. Indicates that the statistics in this interval are based on incomplete data. Read-only.
     *  @param IncompleteData|null $value Value to set for the incompleteData property.
    */
    public function setIncompleteData(?IncompleteData $value ): void {
        $this->incompleteData = $value;
    }

    /**
     * Sets the isTrending property value. Indicates whether the item is 'trending.' Read-only.
     *  @param bool|null $value Value to set for the isTrending property.
    */
    public function setIsTrending(?bool $value ): void {
        $this->isTrending = $value;
    }

    /**
     * Sets the move property value. Statistics about the move actions in this interval. Read-only.
     *  @param ItemActionStat|null $value Value to set for the move property.
    */
    public function setMove(?ItemActionStat $value ): void {
        $this->move = $value;
    }

    /**
     * Sets the startDateTime property value. When the interval starts. Read-only.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
