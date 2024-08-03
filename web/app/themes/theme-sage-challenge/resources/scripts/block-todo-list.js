import { registerBlockType } from '@wordpress/blocks';
import { InspectorControls } from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';
import { useState, useEffect } from '@wordpress/element';

registerBlockType('sage/todo-list', {
  title: 'Todo List',
  category: 'widgets',
  attributes: {
    numberOfTodos: {
      type: 'number',
      default:
        wp.data.select('core/editor').getEditedPostAttribute('meta')[
          'todo_number'
        ] || 5,
    },
  },
  edit: ({ attributes, setAttributes }) => {
    const { numberOfTodos } = attributes;
    const [todos, setTodos] = useState([]);

    useEffect(() => {
      fetch(
        `https://jsonplaceholder.typicode.com/todos?_limit=${numberOfTodos}`,
      )
        .then((response) => response.json())
        .then((data) => setTodos(data))
        .catch((error) => {
          console.error('Error fetching todos:', error);
          setTodos([]);
        });
    }, [numberOfTodos]);

    return (
      <div>
        <InspectorControls>
          <PanelBody title="Todo List Settings">
            <RangeControl
              label="Number of Todos"
              value={numberOfTodos}
              onChange={(value) => setAttributes({ numberOfTodos: value })}
              min={1}
              max={20}
            />
          </PanelBody>
        </InspectorControls>
        <ul className="list-disc pl-5">
          {todos.map((todo) => (
            <li key={todo.id} className="py-1">
              {todo.title}
            </li>
          ))}
        </ul>
      </div>
    );
  },
  save: () => null,
});
