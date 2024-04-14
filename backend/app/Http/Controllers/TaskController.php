<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskController extends Controller
{
    /**
     * Get all tasks
     *
     * @return JsonResource
     */
    public function tasks(): JsonResource
    {
        $tasks = Task::with('user')->get();
        return TaskResource::collection($tasks);
    }
}
