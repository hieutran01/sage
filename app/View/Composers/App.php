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
            'currentTime' => \App\Models\Schedule::TIME_NOW,
            'favorites' => $this->favorites()
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
    public function favorites()
    {
        $favorites = session()->get('favorites',[]);
        $favorites['match'] = !empty($favorites['match']) ? $favorites['match'] : [];
        $favorites['sclass'] = !empty($favorites['sclass']) ? $favorites['sclass'] : [];
        return $favorites;
    }
}
