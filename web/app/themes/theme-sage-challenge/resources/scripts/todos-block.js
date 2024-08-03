// resources/scripts/todos-block.js

import { registerBlockType } from '@wordpress/blocks';
import { TextControl } from '@wordpress/components';
import { useState, useEffect } from '@wordpress/element';

registerBlockType('myplugin/todos', {
  title: 'Todos',
  icon: 'list-view',
  category: 'widgets',

  attributes: {
    numberOfTodos: {
      type: 'number',
      default: 5,
    },
  },

  edit({ attributes, setAttributes }) {
    const { numberOfTodos } = attributes;

    const [todos, setTodos] = useState([]);

    useEffect(() => {
      fetch('https://jsonplaceholder.typicode.com/todos')
        .then((response) => response.json())
        .then((data) => setTodos(data));
    }, []);

    const handleChange = (value) => {
      setAttributes({ numberOfTodos: parseInt(value, 10) });
    };

    return (
      <div>
        <TextControl
          label="Number of Todos"
          value={numberOfTodos}
          onChange={handleChange}
        />
        <ul>
          {todos.slice(0, numberOfTodos).map((todo) => (
            <li key={todo.id}>
              <strong>{todo.title}</strong> -{' '}
              {todo.completed ? 'Completed' : 'Pending'}
            </li>
          ))}
        </ul>
      </div>
    );
  },

  save() {
    return null; // Server-side rendering
  },
});
