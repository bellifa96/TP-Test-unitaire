<?php


namespace App\Tests\Entity;


use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
   public function testUser(){

     $user = new User();
     $user->setFirstName('oussama');
     $user->setLastName('bellifa');
     $user->setAge('13');
     $user->setEmail('osm@live.fr');
     $this->assertNotEmpty($user->getFirstName());
     $this->assertNotEmpty($user->getLastName());
     $this->assertGreaterThanOrEqual('13',$user->getAge());
     $this->assertNotEmpty($user->getEmail());

   }
}
