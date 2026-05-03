<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
        // SEMUA fungsi di controller ini wajib LOGIN
        $this->middleware('auth:sanctum'); 
    }

    // Tampilkan Data (Bisa diakses Admin & User yang sudah login)
    public function index()
    {
        $tasks = $this->taskService->getAllTasks();
        return response()->json($tasks);
    }

    // Tambah Data
    public function store(Request $request)
    {
        $validated = $request->validate(['title' => 'required|string']);
        $task = $this->taskService->storeTask($validated);
        return response()->json($task, 201);
    }

    // HAPUS DATA (Hanya Admin)
    public function destroy(Task $task)
    {
        // Proses Otorisasi
        if (!Gate::allows('is-admin')) {
            return response()->json(['message' => 'Hanya Admin yang boleh menghapus!'], 403);
        }

        $this->taskService->deleteTask($task);
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}