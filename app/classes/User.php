<?php
namespace App\classes;
class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'kawranbazar';

    public function login()
    {
        echo 'In login';
    }
    protected function logout()
    {
        echo 'In login';
    }
    private function Profile()
    {
        echo 'In login';
    }
}