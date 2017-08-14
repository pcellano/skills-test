<?php
require_once ('/home/pcellano/skils-test/employee.php');
class Tailor extends Employee
{
    private $number_of_pieces;
    public function pieces($number_of_pieces) {
        $this->number_of_pieces = $number_of_pieces;
    }

    public function getPieces() {
        return $this->number_of_pieces;
    }

    public function calculate($number_of_pieces, $rate) {
        return $number_of_pieces * $rate;
    }
}
