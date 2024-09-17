<?php
namespace Models\Entities;

use DateTime;

class SignatureGroupSchedule {
    public int $id;
    public int $signatureGroupId;
    public int $classroomId;
    public DateTime $startHour;
    public DateTime $endHour;
    public int $classDay;
}
?>