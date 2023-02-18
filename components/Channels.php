<?php namespace Nielsvandendries\Twitchembed\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Twitchembed\Models\Channel;

/**
 * Channels Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Channels extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'Twitch Channels',
            'description' => 'Show your live stream on your website'
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
        $this->item = Channel::get()->toArray();
    }
}
