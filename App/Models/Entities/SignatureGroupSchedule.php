<?php
namespace Models\Entities;

use DateTime;

class SignatureGroupSchedule {
    private int $id;
    private int $signatureGroupId;
    private int $classroomId;
    private DateTime $startHour;
    private DateTime $endHour;
    private int $classDay;

    public static function getTableName(): string {
        return 'signature_group_schedules';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getSignatureGroupId(): int {
        return $this->signatureGroupId;
    }

    public function getClassroomId(): int {
        return $this->classroomId;
    }

    public function getStartHour(): DateTime {
        return $this->startHour;
    }

    public function getEndHour(): DateTime {
        return $this->endHour;
    }

    public function getClassDay(): int {
        return $this->classDay;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setSignatureGroupId(int $signatureGroupId): void {
        $this->signatureGroupId = $signatureGroupId;
    }

    public function setClassroomId(int $classroomId): void {
        $this->classroomId = $classroomId;
    }

    public function setStartHour(DateTime $startHour): void {
        $this->startHour = $startHour;
    }

    public function setEndHour(DateTime $endHour): void {
        $this->endHour = $endHour;
    }

    public function setClassDay(int $classDay): void {
        $this->classDay = $classDay;
    }
}
