<?php namespace DipeshBanjade\Contactform;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
            'DipeshBanjade\Contactform\Components\contactform' => 'contactform'
        ];
    }

    public function registerSettings()
    {
    }
}
