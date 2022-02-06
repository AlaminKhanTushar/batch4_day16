<?php


namespace App\classes;


class person
{
    public $district = "savar";
    protected $division = "Dhaka";
    private $country = "Bangladesh";

    public function district()
    {
        echo 'Dhaka';
    }
    protected function division()
    {
        echo 'Dhaka';
    }
    private function country()
    {
        echo "Bangladesh";
    }

}