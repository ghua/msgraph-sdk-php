<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewInstance extends Entity 
{
    /** @var array<AccessReviewReviewer>|null $contactedReviewers Returns the collection of reviewers who were contacted to complete this review. While the reviewers and fallbackReviewers properties of the accessReviewScheduleDefinition might specify group owners or managers as reviewers, contactedReviewers returns their individual identities. Supports $select. Read-only. */
    private ?array $contactedReviewers = null;
    
    /** @var array<AccessReviewInstanceDecisionItem>|null $decisions Each principal reviewed in an accessReviewInstance has a decision item representing if they were approved, denied, or not yet reviewed. */
    private ?array $decisions = null;
    
    /** @var DateTime|null $endDateTime DateTime when review instance is scheduled to end.The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only. */
    private ?DateTime $endDateTime = null;
    
    /** @var array<AccessReviewReviewerScope>|null $fallbackReviewers This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. Supports $select. */
    private ?array $fallbackReviewers = null;
    
    /** @var array<AccessReviewReviewerScope>|null $reviewers This collection of access review scopes is used to define who the reviewers are. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. */
    private ?array $reviewers = null;
    
    /** @var AccessReviewScope|null $scope Created based on scope and instanceEnumerationScope at the accessReviewScheduleDefinition level. Defines the scope of users reviewed in a group. Supports $select and $filter (contains only). Read-only. */
    private ?AccessReviewScope $scope = null;
    
    /** @var DateTime|null $startDateTime DateTime when review instance is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only. */
    private ?DateTime $startDateTime = null;
    
    /** @var string|null $status Specifies the status of an accessReview. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $select, $orderby, and $filter (eq only). Read-only. */
    private ?string $status = null;
    
    /**
     * Instantiates a new accessReviewInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewInstance
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewInstance {
        return new AccessReviewInstance();
    }

    /**
     * Gets the contactedReviewers property value. Returns the collection of reviewers who were contacted to complete this review. While the reviewers and fallbackReviewers properties of the accessReviewScheduleDefinition might specify group owners or managers as reviewers, contactedReviewers returns their individual identities. Supports $select. Read-only.
     * @return array<AccessReviewReviewer>|null
    */
    public function getContactedReviewers(): ?array {
        return $this->contactedReviewers;
    }

    /**
     * Gets the decisions property value. Each principal reviewed in an accessReviewInstance has a decision item representing if they were approved, denied, or not yet reviewed.
     * @return array<AccessReviewInstanceDecisionItem>|null
    */
    public function getDecisions(): ?array {
        return $this->decisions;
    }

    /**
     * Gets the endDateTime property value. DateTime when review instance is scheduled to end.The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. Supports $select.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getFallbackReviewers(): ?array {
        return $this->fallbackReviewers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $currentObject = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contactedReviewers' => function (ParseNode $n) use ($currentObject) { $currentObject->setContactedReviewers($n->getCollectionOfObjectValues(AccessReviewReviewer::class)); },
            'decisions' => function (ParseNode $n) use ($currentObject) { $currentObject->setDecisions($n->getCollectionOfObjectValues(AccessReviewInstanceDecisionItem::class)); },
            'endDateTime' => function (ParseNode $n) use ($currentObject) { $currentObject->setEndDateTime($n->getDateTimeValue()); },
            'fallbackReviewers' => function (ParseNode $n) use ($currentObject) { $currentObject->setFallbackReviewers($n->getCollectionOfObjectValues(AccessReviewReviewerScope::class)); },
            'reviewers' => function (ParseNode $n) use ($currentObject) { $currentObject->setReviewers($n->getCollectionOfObjectValues(AccessReviewReviewerScope::class)); },
            'scope' => function (ParseNode $n) use ($currentObject) { $currentObject->setScope($n->getObjectValue(AccessReviewScope::class)); },
            'startDateTime' => function (ParseNode $n) use ($currentObject) { $currentObject->setStartDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($currentObject) { $currentObject->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the reviewers property value. This collection of access review scopes is used to define who the reviewers are. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getReviewers(): ?array {
        return $this->reviewers;
    }

    /**
     * Gets the scope property value. Created based on scope and instanceEnumerationScope at the accessReviewScheduleDefinition level. Defines the scope of users reviewed in a group. Supports $select and $filter (contains only). Read-only.
     * @return AccessReviewScope|null
    */
    public function getScope(): ?AccessReviewScope {
        return $this->scope;
    }

    /**
     * Gets the startDateTime property value. DateTime when review instance is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. Specifies the status of an accessReview. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $select, $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('contactedReviewers', $this->contactedReviewers);
        $writer->writeCollectionOfObjectValues('decisions', $this->decisions);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeCollectionOfObjectValues('fallbackReviewers', $this->fallbackReviewers);
        $writer->writeCollectionOfObjectValues('reviewers', $this->reviewers);
        $writer->writeObjectValue('scope', $this->scope);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the contactedReviewers property value. Returns the collection of reviewers who were contacted to complete this review. While the reviewers and fallbackReviewers properties of the accessReviewScheduleDefinition might specify group owners or managers as reviewers, contactedReviewers returns their individual identities. Supports $select. Read-only.
     *  @param array<AccessReviewReviewer>|null $value Value to set for the contactedReviewers property.
    */
    public function setContactedReviewers(?array $value ): void {
        $this->contactedReviewers = $value;
    }

    /**
     * Sets the decisions property value. Each principal reviewed in an accessReviewInstance has a decision item representing if they were approved, denied, or not yet reviewed.
     *  @param array<AccessReviewInstanceDecisionItem>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value ): void {
        $this->decisions = $value;
    }

    /**
     * Sets the endDateTime property value. DateTime when review instance is scheduled to end.The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. Supports $select.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value ): void {
        $this->fallbackReviewers = $value;
    }

    /**
     * Sets the reviewers property value. This collection of access review scopes is used to define who the reviewers are. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value ): void {
        $this->reviewers = $value;
    }

    /**
     * Sets the scope property value. Created based on scope and instanceEnumerationScope at the accessReviewScheduleDefinition level. Defines the scope of users reviewed in a group. Supports $select and $filter (contains only). Read-only.
     *  @param AccessReviewScope|null $value Value to set for the scope property.
    */
    public function setScope(?AccessReviewScope $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the startDateTime property value. DateTime when review instance is scheduled to start. May be in the future. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $select. Read-only.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. Specifies the status of an accessReview. Possible values: Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed. Supports $select, $orderby, and $filter (eq only). Read-only.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
