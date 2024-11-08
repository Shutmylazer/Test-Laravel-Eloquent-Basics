<?php
namespace App\Observers;


use App\Models\Project;
use App\Models\Stat;

class ProjectObserver
{
    public function created(Project $project)
    {
        // Get the first stats record and increment projects_count
        $stats = Stat::first();
        if ($stats) {
            $stats->increment('projects_count');
        }
    }
}

