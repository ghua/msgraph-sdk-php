<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerUser extends Entity 
{
    /** @var array<PlannerPlan>|null $plans Read-only. Nullable. Returns the plannerTasks assigned to the user. */
    private ?array $plans = null;
    
    /** @var array<PlannerTask>|null $tasks Read-only. Nullable. Returns the plannerPlans shared with the user. */
    private ?array $tasks = null;
    
    /**
     * Instantiates a new plannerUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerUser
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PlannerUser {
        return new PlannerUser();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $currentObject = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'plans' => function (ParseNode $n) use ($currentObject) { $currentObject->setPlans($n->getCollectionOfObjectValues(PlannerPlan::class)); },
            'tasks' => function (ParseNode $n) use ($currentObject) { $currentObject->setTasks($n->getCollectionOfObjectValues(PlannerTask::class)); },
        ]);
    }

    /**
     * Gets the plans property value. Read-only. Nullable. Returns the plannerTasks assigned to the user.
     * @return array<PlannerPlan>|null
    */
    public function getPlans(): ?array {
        return $this->plans;
    }

    /**
     * Gets the tasks property value. Read-only. Nullable. Returns the plannerPlans shared with the user.
     * @return array<PlannerTask>|null
    */
    public function getTasks(): ?array {
        return $this->tasks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('plans', $this->plans);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
    }

    /**
     * Sets the plans property value. Read-only. Nullable. Returns the plannerTasks assigned to the user.
     *  @param array<PlannerPlan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value ): void {
        $this->plans = $value;
    }

    /**
     * Sets the tasks property value. Read-only. Nullable. Returns the plannerPlans shared with the user.
     *  @param array<PlannerTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

}
