<?php
namespace Models\Entities;

class Building {
    public int $buildingId;
    public string $buildingName;

    public function __construct(
        int $buildingId,
        string  $buildingName,
    ){
        $this->buildingId = $buildingId;
        $this->buildingName = $buildingName;
    }
}
?>