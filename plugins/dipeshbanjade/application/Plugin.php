<?php namespace DipeshBanjade\Application;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return[
            'DipeshBanjade\Application\Components\application' => 'application'
        ];
    }

    public function registerSettings()
    {
    }
}
