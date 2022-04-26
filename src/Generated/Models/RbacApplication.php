<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RbacApplication extends Entity 
{
    /** @var array<UnifiedRoleAssignment>|null $roleAssignments Resource to grant access to users or groups. */
    private ?array $roleAssignments = null;
    
    /** @var array<UnifiedRoleAssignmentScheduleInstance>|null $roleAssignmentScheduleInstances The roleAssignmentScheduleInstances property */
    private ?array $roleAssignmentScheduleInstances = null;
    
    /** @var array<UnifiedRoleAssignmentScheduleRequest>|null $roleAssignmentScheduleRequests The roleAssignmentScheduleRequests property */
    private ?array $roleAssignmentScheduleRequests = null;
    
    /** @var array<UnifiedRoleAssignmentSchedule>|null $roleAssignmentSchedules The roleAssignmentSchedules property */
    private ?array $roleAssignmentSchedules = null;
    
    /** @var array<UnifiedRoleDefinition>|null $roleDefinitions Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles. */
    private ?array $roleDefinitions = null;
    
    /** @var array<UnifiedRoleEligibilityScheduleInstance>|null $roleEligibilityScheduleInstances The roleEligibilityScheduleInstances property */
    private ?array $roleEligibilityScheduleInstances = null;
    
    /** @var array<UnifiedRoleEligibilityScheduleRequest>|null $roleEligibilityScheduleRequests The roleEligibilityScheduleRequests property */
    private ?array $roleEligibilityScheduleRequests = null;
    
    /** @var array<UnifiedRoleEligibilitySchedule>|null $roleEligibilitySchedules The roleEligibilitySchedules property */
    private ?array $roleEligibilitySchedules = null;
    
    /**
     * Instantiates a new rbacApplication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RbacApplication
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RbacApplication {
        return new RbacApplication();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $currentObject = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'roleAssignments' => function (ParseNode $n) use ($currentObject) { $currentObject->setRoleAssignments($n->getCollectionOfObjectValues(UnifiedRoleAssignment::class)); },
            'roleAssignmentScheduleInstances' => function (ParseNode $n) use ($currentObject) { $currentObject->setRoleAssignmentScheduleInstances($n->getCollectionOfObjectValues(UnifiedRoleAssignmentScheduleInstance::class)); },
            'roleAssignmentScheduleRequests' => function (ParseNode $n) use ($currentObject) { $currentObject->setRoleAssignmentScheduleRequests($n->getCollectionOfObjectValues(UnifiedRoleAssignmentScheduleRequest::class)); },
            'roleAssignmentSchedules' => function (ParseNode $n) use ($currentObject) { $currentObject->setRoleAssignmentSchedules($n->getCollectionOfObjectValues(UnifiedRoleAssignmentSchedule::class)); },
            'roleDefinitions' => function (ParseNode $n) use ($currentObject) { $currentObject->setRoleDefinitions($n->getCollectionOfObjectValues(UnifiedRoleDefinition::class)); },
            'roleEligibilityScheduleInstances' => function (ParseNode $n) use ($currentObject) { $currentObject->setRoleEligibilityScheduleInstances($n->getCollectionOfObjectValues(UnifiedRoleEligibilityScheduleInstance::class)); },
            'roleEligibilityScheduleRequests' => function (ParseNode $n) use ($currentObject) { $currentObject->setRoleEligibilityScheduleRequests($n->getCollectionOfObjectValues(UnifiedRoleEligibilityScheduleRequest::class)); },
            'roleEligibilitySchedules' => function (ParseNode $n) use ($currentObject) { $currentObject->setRoleEligibilitySchedules($n->getCollectionOfObjectValues(UnifiedRoleEligibilitySchedule::class)); },
        ]);
    }

    /**
     * Gets the roleAssignments property value. Resource to grant access to users or groups.
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the roleAssignmentScheduleInstances property value. The roleAssignmentScheduleInstances property
     * @return array<UnifiedRoleAssignmentScheduleInstance>|null
    */
    public function getRoleAssignmentScheduleInstances(): ?array {
        return $this->roleAssignmentScheduleInstances;
    }

    /**
     * Gets the roleAssignmentScheduleRequests property value. The roleAssignmentScheduleRequests property
     * @return array<UnifiedRoleAssignmentScheduleRequest>|null
    */
    public function getRoleAssignmentScheduleRequests(): ?array {
        return $this->roleAssignmentScheduleRequests;
    }

    /**
     * Gets the roleAssignmentSchedules property value. The roleAssignmentSchedules property
     * @return array<UnifiedRoleAssignmentSchedule>|null
    */
    public function getRoleAssignmentSchedules(): ?array {
        return $this->roleAssignmentSchedules;
    }

    /**
     * Gets the roleDefinitions property value. Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->roleDefinitions;
    }

    /**
     * Gets the roleEligibilityScheduleInstances property value. The roleEligibilityScheduleInstances property
     * @return array<UnifiedRoleEligibilityScheduleInstance>|null
    */
    public function getRoleEligibilityScheduleInstances(): ?array {
        return $this->roleEligibilityScheduleInstances;
    }

    /**
     * Gets the roleEligibilityScheduleRequests property value. The roleEligibilityScheduleRequests property
     * @return array<UnifiedRoleEligibilityScheduleRequest>|null
    */
    public function getRoleEligibilityScheduleRequests(): ?array {
        return $this->roleEligibilityScheduleRequests;
    }

    /**
     * Gets the roleEligibilitySchedules property value. The roleEligibilitySchedules property
     * @return array<UnifiedRoleEligibilitySchedule>|null
    */
    public function getRoleEligibilitySchedules(): ?array {
        return $this->roleEligibilitySchedules;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->roleAssignments);
        $writer->writeCollectionOfObjectValues('roleAssignmentScheduleInstances', $this->roleAssignmentScheduleInstances);
        $writer->writeCollectionOfObjectValues('roleAssignmentScheduleRequests', $this->roleAssignmentScheduleRequests);
        $writer->writeCollectionOfObjectValues('roleAssignmentSchedules', $this->roleAssignmentSchedules);
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->roleDefinitions);
        $writer->writeCollectionOfObjectValues('roleEligibilityScheduleInstances', $this->roleEligibilityScheduleInstances);
        $writer->writeCollectionOfObjectValues('roleEligibilityScheduleRequests', $this->roleEligibilityScheduleRequests);
        $writer->writeCollectionOfObjectValues('roleEligibilitySchedules', $this->roleEligibilitySchedules);
    }

    /**
     * Sets the roleAssignments property value. Resource to grant access to users or groups.
     *  @param array<UnifiedRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the roleAssignmentScheduleInstances property value. The roleAssignmentScheduleInstances property
     *  @param array<UnifiedRoleAssignmentScheduleInstance>|null $value Value to set for the roleAssignmentScheduleInstances property.
    */
    public function setRoleAssignmentScheduleInstances(?array $value ): void {
        $this->roleAssignmentScheduleInstances = $value;
    }

    /**
     * Sets the roleAssignmentScheduleRequests property value. The roleAssignmentScheduleRequests property
     *  @param array<UnifiedRoleAssignmentScheduleRequest>|null $value Value to set for the roleAssignmentScheduleRequests property.
    */
    public function setRoleAssignmentScheduleRequests(?array $value ): void {
        $this->roleAssignmentScheduleRequests = $value;
    }

    /**
     * Sets the roleAssignmentSchedules property value. The roleAssignmentSchedules property
     *  @param array<UnifiedRoleAssignmentSchedule>|null $value Value to set for the roleAssignmentSchedules property.
    */
    public function setRoleAssignmentSchedules(?array $value ): void {
        $this->roleAssignmentSchedules = $value;
    }

    /**
     * Sets the roleDefinitions property value. Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     *  @param array<UnifiedRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value ): void {
        $this->roleDefinitions = $value;
    }

    /**
     * Sets the roleEligibilityScheduleInstances property value. The roleEligibilityScheduleInstances property
     *  @param array<UnifiedRoleEligibilityScheduleInstance>|null $value Value to set for the roleEligibilityScheduleInstances property.
    */
    public function setRoleEligibilityScheduleInstances(?array $value ): void {
        $this->roleEligibilityScheduleInstances = $value;
    }

    /**
     * Sets the roleEligibilityScheduleRequests property value. The roleEligibilityScheduleRequests property
     *  @param array<UnifiedRoleEligibilityScheduleRequest>|null $value Value to set for the roleEligibilityScheduleRequests property.
    */
    public function setRoleEligibilityScheduleRequests(?array $value ): void {
        $this->roleEligibilityScheduleRequests = $value;
    }

    /**
     * Sets the roleEligibilitySchedules property value. The roleEligibilitySchedules property
     *  @param array<UnifiedRoleEligibilitySchedule>|null $value Value to set for the roleEligibilitySchedules property.
    */
    public function setRoleEligibilitySchedules(?array $value ): void {
        $this->roleEligibilitySchedules = $value;
    }

}
