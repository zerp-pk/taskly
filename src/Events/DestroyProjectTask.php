<?php

namespace Zerp\Taskly\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Zerp\Taskly\Models\ProjectTask;

class DestroyProjectTask
{
    use Dispatchable, SerializesModels;

     public function __construct(
        public ProjectTask $task
    ) {}
}
