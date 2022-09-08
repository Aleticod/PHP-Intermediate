<?php 
namespace App\Classes;
class MichiAdopted {
    protected $name;
    protected $date_adopted;
    protected $adopted_by;

    public function __construct($name, $date_adopted, $adopted_by) {
        $this->name = $name;
        $this->date_adopted = $date_adopted;
        $this->adopted_by = $adopted_by;
    }

    public function getName() {
        return $this->name;
    }

    public function getDateAdopted() {
        return $this->date_adopted;
    }

    public function getAdoptedBy() {
        return $this->adopted_by;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setDateAdopted($date_adopted) {
        $this->date_adopted = $date_adopted;
    }

    public function setAdoptedBy($adopted_by) {
        $this->adopted_by = $adopted_by;
    }

    public function __toString() {
        return "Name: " . $this->name . " date_adopted: " . $this->color . " Age: " . $this->age;
    }
}