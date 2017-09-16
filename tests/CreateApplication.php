<?php

namespace Wnx\DisableUpdatedAt\Tests;

trait CreateApplication
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();

        $this->loadMigrationsFrom([
            '--database' => 'testbench',
            '--realpath' => __DIR__.'/migrations',
        ]);
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            \Orchestra\Database\ConsoleServiceProvider::class
        ];
    }

}