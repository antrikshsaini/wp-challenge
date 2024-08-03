@php
// Get the limit from the block attributes or fallback to 5 if not provided
$number_of_todos = $limit ?? 5;

// Fetch the todos from the API
$response = wp_remote_get('https://jsonplaceholder.typicode.com/todos');
$todos = json_decode(wp_remote_retrieve_body($response));
@endphp

<div class="py-8">
  @foreach($todos as $todo)
    @if ($loop->index < $number_of_todos)
      <div class="todo p-4 mb-4 border border-gray-300 rounded-lg shadow-sm">
        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $todo->title }}</h3>
        <p class="text-sm {{ $todo->completed ? 'text-green-600' : 'text-red-600' }}">
          Status: {{ $todo->completed ? 'Completed' : 'Pending' }}
        </p>
      </div>
    @endif
  @endforeach
</div>
