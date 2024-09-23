<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        if ('testing' !== config('app.env')) {
            $msg = 'Testing is only possible in a "testing" environment. Please config APP_ENV=testing, and try again.';
            info($msg);

            exit();
        }
    }
}
