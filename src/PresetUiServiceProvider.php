<?php

namespace Arifhas\LaravelUi;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;
use Arifhas\LaravelUi\Presets\Tailwindcss;

class PresetUiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('tailwindcss', function ($command) {
            Tailwindcss::install();

            $command->info('Tailwind CSS scaffolding installed successfully.');

            if ($command->option('auth')) {
                Tailwindcss::installAuth();

                $command->info('Tailwind CSS auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }

}
