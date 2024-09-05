<?php
namespace Models\Entities;

use DateTime;

class AcademicPeriod {
    public int $academicPeriodId;
    public string  $description;
    public DateTime $startDate;
    public DateTime $endDate;

    public function __construct(
        int $academicPeriodId,
        string  $description,
        DateTime $startDate,
        DateTime $endDate,
    ){
        $this->academicPeriodId = $academicPeriodId;
        $this->description = $description;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
}
?>