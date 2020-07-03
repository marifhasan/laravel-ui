<?php

namespace Arifhas\LaravelUi;

use Laravel\Ui\UiServiceProvider;
use Laravel\Ui\ControllersCommand;

class PresetUiServiceProvider extends UiServiceProvider
{
    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PresetAuthCommand::class,
                ControllersCommand::class,
                PresetUiCommand::class,
            ]);
        }
    }

}
