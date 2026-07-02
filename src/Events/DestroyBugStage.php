<?php

namespace Zerp\Taskly\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Zerp\Taskly\Models\BugStage;

class DestroyBugStage
{
    use Dispatchable;

    public function __construct(
        public BugStage $bugStage,
    ) {}
}