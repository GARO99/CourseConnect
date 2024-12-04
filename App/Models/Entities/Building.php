<?php
namespace Models\Entities;

class Building {
    private int $id;
    private string $buildingName;

    public static function getTableName(): string {
        return 'buildings';
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getBuildingName(): string {
        return $this->buildingName;
    }

    // Setters

    public function setBuildingName(string $buildingName): void {
        $this->buildingName = $buildingName;
    }
}
?>
