<?php
namespace Models\Entities;

use DateTime;

class AcademicPeriod {
    public int $id;
    public string  $description;
    public DateTime $startDate;
    public DateTime $endDate;
}
?>