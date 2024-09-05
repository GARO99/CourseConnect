<?php
namespace Models\Entities;

class Signature {
    public int $signatureId;
    public int $unityId;
    public string $signatureName;

    public function __construct(
        int $signatureId,
        int  $unityId,
        string $signatureName
    ){
        $this->signatureId = $signatureId;
        $this->unityId = $unityId;
        $this->signatureName = $signatureName;
    }
}
?>