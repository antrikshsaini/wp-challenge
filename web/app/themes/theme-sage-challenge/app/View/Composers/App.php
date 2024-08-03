<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function getTodos($limit = 5)
    {
        $response = wp_remote_get("https://jsonplaceholder.typicode.com/todos?_limit={$limit}");
        if (is_wp_error($response)) {
            return ['error' => 'Unable to fetch todos.'];
        }
        $body = wp_remote_retrieve_body($response);
        return json_decode($body, true);
    }
}
