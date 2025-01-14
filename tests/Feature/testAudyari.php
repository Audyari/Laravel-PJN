<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

use function PHPUnit\Framework\assertSame;

class testAudyari extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $appName = env("YOUTUBE");

        self::assertEquals("Audyari W", $appName);
    }

    public function test_env_default()
    {
        $author = Env::get("author", "tidak ada");

        self::assertEquals("tidak ada", $author);
    }
}
