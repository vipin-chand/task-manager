<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Services\ProjectService;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    /**
     * @var ProjectService
     */
    private $projectService;

    /**
     * @param ProjectService $projectService
     */
    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }

    /**
     * This is used to create a new project
     *
     * @param StoreProjectRequest $request
     * @return JsonResponse
     */
    public function createProject(StoreProjectRequest $request): JsonResponse
    {
        $this->projectService->createNewProject($request->validated());

        return response()->json(["message" => "Project has been created"]);
    }

    /**
     * This method returns to all projects
     */
    public function index()
    {
        return $this->projectService->getAllProjects();
    }

}
