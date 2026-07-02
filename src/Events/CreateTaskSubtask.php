<?php

namespace Zerp\Taskly\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Zerp\Taskly\Models\TaskSubtask;

class CreateTaskSubtask
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public Request $request,
        public TaskSubtask $taskSubTask
    ) {}
}
