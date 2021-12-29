<?php

namespace App\Services;

interface ProjectService
{

    /**
     * This is used to create a new project
     *
     * @return mixed
     */
    public function createNewProject(array $input);


    public function getAllProjects();
}
