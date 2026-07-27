<?php

namespace Zerp\Taskly\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zerp\Taskly\Providers\TasklyServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [TasklyServiceProvider::class];
    }
}
