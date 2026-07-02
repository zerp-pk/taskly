<?php

namespace Zerp\Taskly\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Zerp\Taskly\Models\BugComment;

class DestroyBugComment
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public BugComment $comment
    ) {}
}
