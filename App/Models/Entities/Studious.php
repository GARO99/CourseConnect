<?php
namespace Models\Entities;

class Studious {
    public string $studiousId;
    public int $userId;
    public int $academicProgramId;
    
    public function __construct(
        string $studiousId,
        int $userId,
        int $academicProgramId
    ){
        $this->studiousId = $studiousId;
        $this->userId = $userId;
        $this->academicProgramId = $academicProgramId;
    }
}
?>