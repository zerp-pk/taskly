<?php

namespace Zerp\Taskly\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Zerp\Taskly\Models\BugStage;

class UpdateBugStage
{
    use Dispatchable;

    public function __construct(
        public Request $request,
        public BugStage $bugStage
    ) {}
}