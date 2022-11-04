<?php

namespace App\Tests;

use App\Entity\User;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();
        $datetime = new DateTimeImmutable();

        $user->setUsername('test')
            ->setRoles(['ROLE_USER'])
            ->setPassword('password')
            ->setEmail('test@test.com')
            ->setLastLogin($datetime)
            ->setIsVerified(true);

        $this->assertTrue($user->getUserIdentifier() === 'test');
        $this->assertTrue($user->getRoles() === ['ROLE_USER']);
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getEmail() === 'test@test.com');
        $this->assertTrue($user->getLastLogin() === $datetime);
        $this->assertTrue($user->isVerified() === true);
    }

    public function testIsFalse(): void
    {
        $user = new User();
        $datetime = new DateTimeImmutable();

        $user->setUsername('test')
            ->setRoles(['ROLE_USER'])
            ->setPassword('password')
            ->setEmail('test@test.com')
            ->setLastLogin($datetime)
            ->setIsVerified(true);

        $this->assertFalse($user->getUserIdentifier() === 'false');
        $this->assertFalse($user->getRoles() === ['ROLE_ADMIN']);
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getEmail() === 'false');
        $this->assertFalse($user->getLastLogin() === new DateTimeImmutable());
        $this->assertFalse($user->isVerified() === false);
    }

    public function testIsEmpty(): void
    {
        $user = new User();
        $datetime = new DateTimeImmutable();

        $this->assertEmpty($user->getUserIdentifier());
        // $this->assertEmpty($user->getRoles()); //Cannot be empty because Symfony attribute ROLE_USER if role isn't defined
        $this->assertEmpty($user->getPassword());
        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getLastLogin());
        $this->assertEmpty($user->isVerified());
    }
}
