<?php

namespace AbdulAziz\Indograms;

use System\Classes\PluginBase;
use RainLab\User\Models\User;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Abdulaziz\Indograms\Components\CustomForm' => 'customform',
        ];
    }

    public function registerSettings()
    { }

    public function boot()
    {
        User::extend(function ($model) {
            $model->belongsToMany['posts'] = 'Abdulaziz\Indograms\Models\Post';
        });
    }
}
