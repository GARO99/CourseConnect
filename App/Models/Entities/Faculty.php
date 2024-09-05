<?php
namespace Models\Entities;

class Faculty {
    public int $facultyId;
    public string  $facultyName;

    public function __construct(
        int $facultyId, 
        string  $facultyName
    ){
        $this->facultyId = $facultyId;
        $this->facultyName = $facultyName;
    }
}
?>