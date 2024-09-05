<?php
namespace Models\Entities;

use DateTime;

class SignatureGroupSchedule {
    public int $signatureGroupScheduleId;
    public int $signatureGroupId;
    public int $classroomId;
    public DateTime $startHour;
    public DateTime $endHour;
    public int $classDay;
    
    public function __construct(
        int $signatureGroupScheduleId,
        int $signatureGroupId,
        int $classroomId,
        DateTime $startHour,
        DateTime $endHour,
        int $classDay
    ){
        $this->signatureGroupScheduleId = $signatureGroupScheduleId;
        $this->signatureGroupId = $signatureGroupId;
        $this->classroomId = $classroomId;
        $this->startHour = $startHour;
        $this->endHour = $endHour;
        $this->classDay = $classDay;
    }
}
?>