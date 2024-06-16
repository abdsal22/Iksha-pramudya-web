<?php
class MathOperations {
    public function __call($name, $arguments) {
        if ($name == 'add') {
            if (count($arguments) == 2) {
                return $this->addTwoNumbers($arguments[0], $arguments[1]);
            } elseif (count($arguments) == 3) {
                return $this->addThreeNumbers($arguments[0], $arguments[1], $arguments[2]);
            }
        }
        throw new BadMethodCallException("Method $name does not exist.");
    }

    private function addTwoNumbers($a, $b) {
        return $a + $b;
    }

    private function addThreeNumbers($a, $b, $c) {
        return $a + $b + $c;
    }
}
?>
