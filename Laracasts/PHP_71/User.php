<?php
/**
 * Created by PhpStorm.
 * User: dhayal
 * Date: 2019-04-05
 * Time: 23:29
 */

Class User{

    protected $age;


    public function age() : ?int {
        return $this->age;
    }
}

$age = (new User())->age();

var_dump($age);

/**
 * @param iterable $a
 */
function test(iterable $a ){

}