<?php namespace NielsVanDenDries\Twitchembed;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\Nielsvandendries\Twitchembed\Components\Channels' => 'Channels',
        ];
    }

    public function registerSettings()
    {
    }
}
