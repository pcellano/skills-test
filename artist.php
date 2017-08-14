<?php
require_once ('/home/pcellano/skils-test/employee.php');
class Artist extends Employee
{
    private $time_in = [];
    private $time_out = [];

    //set time in in 24 hours format
    public function setTimeIn(array $time_in) {
        $this->time_in = $time_in;    
    }

    //set time out in 24 hour format
    public function setTimeOut(array $time_out) {
        $this->time_out = $time_out;    
    }
    public function getTimeIn() {
        return $this->time_in;
    }
    public function getTimeOut() {
        return $this->time_out;
    }

    public function getHours(array $time_in, array $time_out) {
        $number_of_days = count($time_in);
        $count = 0;
        $hours = 0;
        while($count < $number_of_days) {
            $in = new DateTime($time_in[$count]);
            $out = new DateTime($time_out[$count]);
            //$hours += date("h:i", $time_out[$count]) - date("h:i", $time_in[$count]);
            $diff = $out->diff($in);
            $hours += $diff->format("%H");
            $count++;
        }

        return $hours;
    }

    public function calculate($rate, $hours) {
        return $rate * $hours;
    }
}
