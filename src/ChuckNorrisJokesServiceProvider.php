<?php

namespace Mcbarnard\ChuckNorrisJokes;

use Illuminate\Support\ServiceProvider;
use Mcbarnard\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Mcbarnard\ChuckNorrisJokes\JokeFactory;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if($this->app->runningInConsole())
        {
            $this->commands([
                ChuckNorrisJoke::class
            ]);
        }
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokeFactory();
        });
    }
}
