<?php namespace Nielsvandendries\Twitchembed\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Twitchembed\Models\VOD;

/**
 * Clips Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Clips extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'Twitch Clips',
            'description' => 'Show your saved Twitch Clips'
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
        $this->item = Vod::get()->toArray();
    }
}
