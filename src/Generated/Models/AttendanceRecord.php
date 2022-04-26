<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttendanceRecord extends Entity 
{
    /** @var array<AttendanceInterval>|null $attendanceIntervals List of time periods between joining and leaving a meeting. */
    private ?array $attendanceIntervals = null;
    
    /** @var string|null $emailAddress Email address of the user associated with this atttendance record. */
    private ?string $emailAddress = null;
    
    /** @var Identity|null $identity Identity of the user associated with this atttendance record. */
    private ?Identity $identity = null;
    
    /** @var string|null $role Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer. */
    private ?string $role = null;
    
    /** @var int|null $totalAttendanceInSeconds Total duration of the attendances in seconds. */
    private ?int $totalAttendanceInSeconds = null;
    
    /**
     * Instantiates a new attendanceRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttendanceRecord
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AttendanceRecord {
        return new AttendanceRecord();
    }

    /**
     * Gets the attendanceIntervals property value. List of time periods between joining and leaving a meeting.
     * @return array<AttendanceInterval>|null
    */
    public function getAttendanceIntervals(): ?array {
        return $this->attendanceIntervals;
    }

    /**
     * Gets the emailAddress property value. Email address of the user associated with this atttendance record.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $currentObject = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attendanceIntervals' => function (ParseNode $n) use ($currentObject) { $currentObject->setAttendanceIntervals($n->getCollectionOfObjectValues(AttendanceInterval::class)); },
            'emailAddress' => function (ParseNode $n) use ($currentObject) { $currentObject->setEmailAddress($n->getStringValue()); },
            'identity' => function (ParseNode $n) use ($currentObject) { $currentObject->setIdentity($n->getObjectValue(Identity::class)); },
            'role' => function (ParseNode $n) use ($currentObject) { $currentObject->setRole($n->getStringValue()); },
            'totalAttendanceInSeconds' => function (ParseNode $n) use ($currentObject) { $currentObject->setTotalAttendanceInSeconds($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the identity property value. Identity of the user associated with this atttendance record.
     * @return Identity|null
    */
    public function getIdentity(): ?Identity {
        return $this->identity;
    }

    /**
     * Gets the role property value. Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer.
     * @return string|null
    */
    public function getRole(): ?string {
        return $this->role;
    }

    /**
     * Gets the totalAttendanceInSeconds property value. Total duration of the attendances in seconds.
     * @return int|null
    */
    public function getTotalAttendanceInSeconds(): ?int {
        return $this->totalAttendanceInSeconds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attendanceIntervals', $this->attendanceIntervals);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
        $writer->writeObjectValue('identity', $this->identity);
        $writer->writeStringValue('role', $this->role);
        $writer->writeIntegerValue('totalAttendanceInSeconds', $this->totalAttendanceInSeconds);
    }

    /**
     * Sets the attendanceIntervals property value. List of time periods between joining and leaving a meeting.
     *  @param array<AttendanceInterval>|null $value Value to set for the attendanceIntervals property.
    */
    public function setAttendanceIntervals(?array $value ): void {
        $this->attendanceIntervals = $value;
    }

    /**
     * Sets the emailAddress property value. Email address of the user associated with this atttendance record.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the identity property value. Identity of the user associated with this atttendance record.
     *  @param Identity|null $value Value to set for the identity property.
    */
    public function setIdentity(?Identity $value ): void {
        $this->identity = $value;
    }

    /**
     * Sets the role property value. Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer.
     *  @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value ): void {
        $this->role = $value;
    }

    /**
     * Sets the totalAttendanceInSeconds property value. Total duration of the attendances in seconds.
     *  @param int|null $value Value to set for the totalAttendanceInSeconds property.
    */
    public function setTotalAttendanceInSeconds(?int $value ): void {
        $this->totalAttendanceInSeconds = $value;
    }

}
