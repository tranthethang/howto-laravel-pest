<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\WithFaker;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withHeaders([
            'X-API-KEY' => config('constant.x_api_key'),
        ]);
    }
}
