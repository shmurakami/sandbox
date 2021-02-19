<?php
declare(strict_types=1);

namespace shmurakami\sandbox;

class App
{
    public function foo(bool $create): ?Foo
    {
        if ($create) {
            return new Foo();
        }
        return null;
    }

    public function bar(?Foo $maybeFoo): string
    {
        return $this->buzz($maybeFoo);
    }

    private function buzz(Foo $foo): string
    {
        return $foo->say();
    }
}

