<?php
class Animal {
    public function makeSound() {
        return "Some generic animal sound";
    }

    public function describe() {
        return "This is an animal.";
    }
}
class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }

    public function describe() {
        return "This is a cat.";
    }
}
?>
