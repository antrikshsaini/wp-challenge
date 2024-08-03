<div class="todo-list">
    <ul class="list-disc pl-5">
        @foreach ($todos as $todo)
            <li class="py-1">{{ $todo['title'] }}</li>
        @endforeach
    </ul>
</div>
