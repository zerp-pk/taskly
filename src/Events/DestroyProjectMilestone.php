<?php

namespace Zerp\Taskly\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Zerp\Taskly\Models\ProjectMilestone;

class DestroyProjectMilestone
{
    use Dispatchable;

    public function __construct(
        public ProjectMilestone $milestone
    ) {}
}
