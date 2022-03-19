<?php

namespace App\Services;

use App\Models\Project;

/**
 * Class ProjectServiceImpl
 *
 * @package App\Services
 */
class ProjectServiceImpl implements ProjectService
{

    /**
     * @inheritDoc
     */
    public function createNewProject(array $input)
    {
        return Project::create([
            'name' => $input['name'],
            'description' => $input['description']
        ]);
    }

    /**
     * @inheritDoc
     */
    public function getAllProjects()
    {
        return Project::all();
    }
}
