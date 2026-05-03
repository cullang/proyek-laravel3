<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;
use Exception;

class TaskController extends Controller
{
    protected $taskService;

    // Inject Service ke Controller
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    // 1. TAMPILKAN DATA
    public function index()
    {
        $tasks = $this->taskService->getAllTasks();
        return response()->json($tasks);
    }

    // 2. TAMBAH DATA (dengan Validasi, Error Handling, & Service)
    public function store(Request $request)
    {
        // Request Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        try {
            $task = $this->taskService->storeTask($validated);
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil ditambahkan',
                'data' => $task
            ], 201);
        } catch (Exception $e) {
            // Error Handling
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    // 3. UBAH DATA
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'sometimes|boolean'
        ]);

        $updatedTask = $this->taskService->updateTask($task, $validated);
        return response()->json(['message' => 'Data berhasil diperbarui', 'data' => $updatedTask]);
    }

    // 4. HAPUS DATA
    public function destroy(Task $task)
    {
        $this->taskService->deleteTask($task);
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}