<?php

namespace Zerp\Taskly\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Zerp\Taskly\Models\ProjectBug;

class DestroyProjectBug
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public ProjectBug $bug
    ) {}
}
