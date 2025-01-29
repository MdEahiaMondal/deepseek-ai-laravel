<?php

namespace eahiya\DeepSeekAI;

use eahiya\DeepSeekAI\Services\DeepSeekAIClient;
use Illuminate\Support\ServiceProvider;

class DeepSeekAIServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/deepseek.php', 'deepseek');

        $this->app->singleton('deepseek', function ($app) {
            return new DeepSeekAIClient(
                $app['config']->get('deepseek.api_key'),
                $app['config']->get('deepseek.base_url')
            );
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/config/deepseek.php' => config_path('deepseek.php'),
            ], 'deepseek-config');
        }
    }
}
