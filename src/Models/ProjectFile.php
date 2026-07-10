<?php

namespace Zerp\Taskly\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectFile extends Model
{
    protected $fillable = [
        'project_id',
        'file_name',
        'file_path',
        'media_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function media()
    {
        return $this->belongsTo(\Spatie\MediaLibrary\MediaCollections\Models\Media::class, 'media_id');
    }
}