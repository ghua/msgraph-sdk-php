<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EntitlementManagement extends Entity 
{
    /** @var array<Approval>|null $accessPackageAssignmentApprovals Approval stages for assignment requests. */
    private ?array $accessPackageAssignmentApprovals = null;
    
    /** @var array<AccessPackage>|null $accessPackages Represents access package objects. */
    private ?array $accessPackages = null;
    
    /** @var array<AccessPackageAssignmentPolicy>|null $assignmentPolicies Access package assignment policies. */
    private ?array $assignmentPolicies = null;
    
    /** @var array<AccessPackageAssignmentRequest>|null $assignmentRequests Represents access package assignment requests created by or on behalf of a user. */
    private ?array $assignmentRequests = null;
    
    /** @var array<AccessPackageAssignment>|null $assignments Represents the grant of an access package to a subject (user or group). */
    private ?array $assignments = null;
    
    /** @var array<AccessPackageCatalog>|null $catalogs Represents a collection of access packages. */
    private ?array $catalogs = null;
    
    /** @var array<ConnectedOrganization>|null $connectedOrganizations Represents references to a directory or domain of another organization whose users can request access. */
    private ?array $connectedOrganizations = null;
    
    /** @var EntitlementManagementSettings|null $settings Represents the settings that control the behavior of Azure AD entitlement management. */
    private ?EntitlementManagementSettings $settings = null;
    
    /**
     * Instantiates a new entitlementManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntitlementManagement
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EntitlementManagement {
        return new EntitlementManagement();
    }

    /**
     * Gets the accessPackageAssignmentApprovals property value. Approval stages for assignment requests.
     * @return array<Approval>|null
    */
    public function getAccessPackageAssignmentApprovals(): ?array {
        return $this->accessPackageAssignmentApprovals;
    }

    /**
     * Gets the accessPackages property value. Represents access package objects.
     * @return array<AccessPackage>|null
    */
    public function getAccessPackages(): ?array {
        return $this->accessPackages;
    }

    /**
     * Gets the assignmentPolicies property value. Access package assignment policies.
     * @return array<AccessPackageAssignmentPolicy>|null
    */
    public function getAssignmentPolicies(): ?array {
        return $this->assignmentPolicies;
    }

    /**
     * Gets the assignmentRequests property value. Represents access package assignment requests created by or on behalf of a user.
     * @return array<AccessPackageAssignmentRequest>|null
    */
    public function getAssignmentRequests(): ?array {
        return $this->assignmentRequests;
    }

    /**
     * Gets the assignments property value. Represents the grant of an access package to a subject (user or group).
     * @return array<AccessPackageAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the catalogs property value. Represents a collection of access packages.
     * @return array<AccessPackageCatalog>|null
    */
    public function getCatalogs(): ?array {
        return $this->catalogs;
    }

    /**
     * Gets the connectedOrganizations property value. Represents references to a directory or domain of another organization whose users can request access.
     * @return array<ConnectedOrganization>|null
    */
    public function getConnectedOrganizations(): ?array {
        return $this->connectedOrganizations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $currentObject = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageAssignmentApprovals' => function (ParseNode $n) use ($currentObject) { $currentObject->setAccessPackageAssignmentApprovals($n->getCollectionOfObjectValues(Approval::class)); },
            'accessPackages' => function (ParseNode $n) use ($currentObject) { $currentObject->setAccessPackages($n->getCollectionOfObjectValues(AccessPackage::class)); },
            'assignmentPolicies' => function (ParseNode $n) use ($currentObject) { $currentObject->setAssignmentPolicies($n->getCollectionOfObjectValues(AccessPackageAssignmentPolicy::class)); },
            'assignmentRequests' => function (ParseNode $n) use ($currentObject) { $currentObject->setAssignmentRequests($n->getCollectionOfObjectValues(AccessPackageAssignmentRequest::class)); },
            'assignments' => function (ParseNode $n) use ($currentObject) { $currentObject->setAssignments($n->getCollectionOfObjectValues(AccessPackageAssignment::class)); },
            'catalogs' => function (ParseNode $n) use ($currentObject) { $currentObject->setCatalogs($n->getCollectionOfObjectValues(AccessPackageCatalog::class)); },
            'connectedOrganizations' => function (ParseNode $n) use ($currentObject) { $currentObject->setConnectedOrganizations($n->getCollectionOfObjectValues(ConnectedOrganization::class)); },
            'settings' => function (ParseNode $n) use ($currentObject) { $currentObject->setSettings($n->getObjectValue(EntitlementManagementSettings::class)); },
        ]);
    }

    /**
     * Gets the settings property value. Represents the settings that control the behavior of Azure AD entitlement management.
     * @return EntitlementManagementSettings|null
    */
    public function getSettings(): ?EntitlementManagementSettings {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageAssignmentApprovals', $this->accessPackageAssignmentApprovals);
        $writer->writeCollectionOfObjectValues('accessPackages', $this->accessPackages);
        $writer->writeCollectionOfObjectValues('assignmentPolicies', $this->assignmentPolicies);
        $writer->writeCollectionOfObjectValues('assignmentRequests', $this->assignmentRequests);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeCollectionOfObjectValues('catalogs', $this->catalogs);
        $writer->writeCollectionOfObjectValues('connectedOrganizations', $this->connectedOrganizations);
        $writer->writeObjectValue('settings', $this->settings);
    }

    /**
     * Sets the accessPackageAssignmentApprovals property value. Approval stages for assignment requests.
     *  @param array<Approval>|null $value Value to set for the accessPackageAssignmentApprovals property.
    */
    public function setAccessPackageAssignmentApprovals(?array $value ): void {
        $this->accessPackageAssignmentApprovals = $value;
    }

    /**
     * Sets the accessPackages property value. Represents access package objects.
     *  @param array<AccessPackage>|null $value Value to set for the accessPackages property.
    */
    public function setAccessPackages(?array $value ): void {
        $this->accessPackages = $value;
    }

    /**
     * Sets the assignmentPolicies property value. Access package assignment policies.
     *  @param array<AccessPackageAssignmentPolicy>|null $value Value to set for the assignmentPolicies property.
    */
    public function setAssignmentPolicies(?array $value ): void {
        $this->assignmentPolicies = $value;
    }

    /**
     * Sets the assignmentRequests property value. Represents access package assignment requests created by or on behalf of a user.
     *  @param array<AccessPackageAssignmentRequest>|null $value Value to set for the assignmentRequests property.
    */
    public function setAssignmentRequests(?array $value ): void {
        $this->assignmentRequests = $value;
    }

    /**
     * Sets the assignments property value. Represents the grant of an access package to a subject (user or group).
     *  @param array<AccessPackageAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the catalogs property value. Represents a collection of access packages.
     *  @param array<AccessPackageCatalog>|null $value Value to set for the catalogs property.
    */
    public function setCatalogs(?array $value ): void {
        $this->catalogs = $value;
    }

    /**
     * Sets the connectedOrganizations property value. Represents references to a directory or domain of another organization whose users can request access.
     *  @param array<ConnectedOrganization>|null $value Value to set for the connectedOrganizations property.
    */
    public function setConnectedOrganizations(?array $value ): void {
        $this->connectedOrganizations = $value;
    }

    /**
     * Sets the settings property value. Represents the settings that control the behavior of Azure AD entitlement management.
     *  @param EntitlementManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?EntitlementManagementSettings $value ): void {
        $this->settings = $value;
    }

}
