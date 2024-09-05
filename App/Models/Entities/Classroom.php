<?php
namespace Models\Entities;

class Classroom {
    public int $classroomId;
    public int $buildingId;
    public int $classroomNumber;

    public function __construct(
        int $classroomId,
        int $buildingId,
        int $classroomNumber,
    ){
        $this->classroomId = $classroomId;
        $this->buildingId = $buildingId;
        $this->classroomNumber = $classroomNumber;
    }
}
?>