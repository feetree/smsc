<?php

namespace SMSC;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $configPath = __DIR__ . '/../config/smsc.php';
        $this->mergeConfigFrom($configPath, 'smsc');

        $this->app->alias(SMSC::class, 'smsc');
    }
}