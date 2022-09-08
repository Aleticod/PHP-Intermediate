<?php 

class Michi {
    protected $name;
    protected $color;
    protected $age;

    public function __construct($name, $color, $age) {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getColor() {
        return $this->color;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function __toString() {
        return "Name: " . $this->name . " Color: " . $this->color . " Age: " . $this->age;
    }

    public function sayMeow() {
        return "Meow";
    }
}