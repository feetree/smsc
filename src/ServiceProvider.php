<?php

namespace SMSC;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'smsc');
        $this->app->alias(SMSC::class, 'smsc');
    }

    public function boot()
    {
        $configPath = __DIR__ . '/../config/smsc.php';
        $this->publishes([$configPath => $this->getConfigPath()], 'config');
    }

    protected function getConfigPath(): string
    {
        return __DIR__ . '/../config/smsc.php';
    }
}