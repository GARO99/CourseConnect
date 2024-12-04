<?php
namespace Models\Entities;

use DateTime;

class AcademicPeriod {
    private int $id;
    private string $description;
    private DateTime $startDate;
    private DateTime $endDate;

    public static function getTableName(): string {
        return 'academic_periods';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getStartDate(): DateTime {
        return $this->startDate;
    }

    public function getEndDate(): DateTime {
        return $this->endDate;
    }

    // Setters

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setStartDate(DateTime $startDate): void {
        $this->startDate = $startDate;
    }

    public function setEndDate(DateTime $endDate): void {
        $this->endDate = $endDate;
    }
}
?>
