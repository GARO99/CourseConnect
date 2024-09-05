<?php
namespace Models\Entities;

class AcademicProgram {
    public int $academicProgramId;
    public int $unityId;
    public string $academicProgramName;

    public function __construct(
        int $academicProgramId,
        int  $unityId,
        string $academicProgramName,
    ){
        $this->academicProgramId = $academicProgramId;
        $this->unityId = $unityId;
        $this->academicProgramName = $academicProgramName;
    }
}
?>