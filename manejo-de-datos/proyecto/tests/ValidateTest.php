<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase {
    public function test_email(){
        $email = Validate::email('i@imorsoft.com');
        $this->assertTrue($email);

        $email = Validate::email('i@@imorsoft.com');
        $this->assertFalse($email);
    }

    public function test_url(){
        $url = Validate::url('https://github.com/');
        $this->assertTrue($url);

        $url = Validate::url('github.com');
        $this->assertFalse($url);
    }
    
    public function test_password()
    {
        $password = Validate::password('Contrasena2020*');
        $this->assertTrue($password);

        $password = Validate::password('Contrasena');
        $this->assertFalse($password);
    }
}