<?php
namespace Models\Entities;

class SignatureInscribed {
    public int $signatureGroupAttendanceId;
    public string $studiousId;
    public int $signatureGroupId;
    
    public function __construct(
        int $signatureGroupAttendanceId,
        string $studiousId,
        int $signatureGroupId
    ){
        $this->signatureGroupAttendanceId = $signatureGroupAttendanceId;
        $this->studiousId = $studiousId;
        $this->signatureGroupId = $signatureGroupId;
    }
}
?>