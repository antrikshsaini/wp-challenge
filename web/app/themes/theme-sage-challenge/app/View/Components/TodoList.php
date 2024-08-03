<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class TodoList extends Component
{
    public $todos;
    public $defaultNumber;

    public function __construct($defaultNumber = 5)
    {
        $this->defaultNumber = $defaultNumber;
        $this->todos = $this->fetchTodos($defaultNumber);
    }

    public function fetchTodos($number)
    {
        try {
            $response = Http::get("https://jsonplaceholder.typicode.com/todos?_limit={$number}");
            return $response->json();
        } catch (\Exception $e) {
            return [];
        }
    }

    public function render()
    {
        return view('components.todo-list');
    }
}
