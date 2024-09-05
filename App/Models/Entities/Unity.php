<?php
namespace Models\Entities;

class Unity {
    public int $unityId;
    public int  $facultyId;
    public string  $unityName;

    public function __construct(
        int $unityId, 
        int  $facultyId,
        string $unityName,
    ){
        $this->unityId = $unityId;
        $this->facultyId = $facultyId;
        $this->unityName = $unityName;
    }
}
?>