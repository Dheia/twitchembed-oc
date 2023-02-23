<?php namespace Nielsvandendries\Twitchembed\Components;

use Cms\Classes\ComponentBase;

/**
 * Followers Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Followers extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'followers Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
