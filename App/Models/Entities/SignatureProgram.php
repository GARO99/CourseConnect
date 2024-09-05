<?php
namespace Models\Entities;

class SignatureProgram {
    public int $signatureProgramId;
    public int $academicProgramId;
    public int $signatureId;

    public function __construct(
        int $signatureProgramId,
        int  $academicProgramId,
        int $signatureId,
    ){
        $this->signatureProgramId = $signatureProgramId;
        $this->academicProgramId = $academicProgramId;
        $this->signatureId = $signatureId;
    }
}
?>