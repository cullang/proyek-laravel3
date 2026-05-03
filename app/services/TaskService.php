<?php

namespace App\Services;

use App\Models\Task;
use Exception;
use Illuminate\Support\Facades\Log;

class TaskService
{
    public function getAllTasks()
    {
        return Task::latest()->get();
    }

    public function storeTask(array $data)
    {
        try {
            return Task::create($data);
        } catch (Exception $e) {
            Log::error("Kesalahan saat menyimpan Task: " . $e->getMessage());
            throw new Exception("Gagal menyimpan data ke database.");
        }
    }

    public function updateTask(Task $task, array $data)
    {
        $task->update($data);
        return $task;
    }

    public function deleteTask(Task $task)
    {
        return $task->delete();
    }
}