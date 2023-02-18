<?php namespace Nielsvandendries\Twitchembed\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Twitchembed\Models\Clips;

/**
 * Clips Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Clip extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'clips Component',
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

    public function onRun()
    {
        $this->item = Clips::get()->toArray();
    }
}
