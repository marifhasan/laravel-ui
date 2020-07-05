<?php

namespace Arifhas\LaravelUi\Presets;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;
use Symfony\Component\Finder\SplFileInfo;

class Tailwindcss extends Preset
{

    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateWebpackConfiguration();
        static::updateTailwindConfiguration();
        static::updateSass();
        static::updateBootstrapping();
        static::removeNodeModules();
    }

    public static function installAuth()
    {
        static::scaffoldController();
        static::scaffoldAuth();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return array_merge([
            'tailwindcss' => '^1.4'
        ], Arr::except($packages, [
            'bootstrap',
            'popper.js',
            'jquery',
        ]));
    }

    /**
     * Update the Webpack configuration.
     *
     * @return void
     */
    protected static function updateWebpackConfiguration()
    {
        copy(__DIR__.'/tailwindcss-stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    /**
     * Update the Tailwind configuration.
     *
     * @return void
     */
    protected static function updateTailwindConfiguration()
    {
        copy(__DIR__.'/tailwindcss-stubs/tailwind.config.js', base_path('tailwind.config.js'));
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        copy(__DIR__.'/tailwindcss-stubs/app.scss', resource_path('sass/app.scss'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/tailwindcss-stubs/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    
    protected static function scaffoldController()
    {
        if (! is_dir($directory = app_path('Http/Controllers/Auth'))) {
            mkdir($directory, 0755, true);
        }

        $filesystem = new Filesystem;

        collect($filesystem->allFiles(base_path('vendor/laravel/ui/stubs/Auth')))
            ->each(function (SplFileInfo $file) use ($filesystem) {
                $filesystem->copy(
                    $file->getPathname(),
                    app_path('Http/Controllers/Auth/'.Str::replaceLast('.stub', '.php', $file->getFilename()))
                );
            });
    }

    protected static function scaffoldAuth()
    {
        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());

        file_put_contents(
            base_path('routes/web.php'),
            file_get_contents(base_path('vendor/laravel/ui/src/Auth/stubs/routes.stub')),
            FILE_APPEND
        );

        copy(
            base_path('vendor/laravel/ui/stubs/migrations/2014_10_12_100000_create_password_resets_table.php'),
            base_path('database/migrations/2014_10_12_100000_create_password_resets_table.php')
        );

        $views = [
            'auth/login.stub' => 'auth/login.blade.php',
            'auth/passwords/confirm.stub' => 'auth/passwords/confirm.blade.php',
            'auth/passwords/email.stub' => 'auth/passwords/email.blade.php',
            'auth/passwords/reset.stub' => 'auth/passwords/reset.blade.php',
            'auth/register.stub' => 'auth/register.blade.php',
            'auth/verify.stub' => 'auth/verify.blade.php',
            'home.stub' => 'home.blade.php',
            'layouts/app.stub' => 'layouts/app.blade.php',
            'layouts/auth.stub' => 'layouts/auth.blade.php',
        ];
    
        if (! is_dir($directory = static::getViewPath('layouts'))) {
            mkdir($directory, 0755, true);
        }

        if (! is_dir($directory = static::getViewPath('auth/passwords'))) {
            mkdir($directory, 0755, true);
        }

        foreach ($views as $key => $value) {
            $view = static::getViewPath($value);
            
            copy(
                __DIR__.'/../Auth/tailwindcss-stubs/'.$key,
                $view
            );
        }
    }

    protected static function compileControllerStub()
    {
        return str_replace(
            '{{namespace}}',
            Container::getInstance()->getNamespace(),
            file_get_contents(base_path('vendor/laravel/ui/src/Auth/stubs/controllers/HomeController.stub'))
        );
    }

    /**
     * Get full view path relative to the application's configured view path.
     *
     * @param  string  $path
     * @return string
     */
    protected static function getViewPath($path)
    {
        return implode(DIRECTORY_SEPARATOR, [
            config('view.paths')[0] ?? resource_path('views'), $path,
        ]);
    }

}
