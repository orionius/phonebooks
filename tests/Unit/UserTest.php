<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {


        $this->visit('/')
        ->press('Добавить контакт')
        ->seePageIs('/form');
    }



}
