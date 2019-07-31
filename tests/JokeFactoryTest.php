<?php

namespace Mcbarnard\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Mcbarnard\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
        'Add a joke here',
    ]);
        $joke = $jokes->getRandomJoke();
        $this->assertSame('Add a joke here', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
        'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
        "Chuck Norris' tears cure cancer. Too bad he has never cried.",
        'Chuck Norris counted to infinity... Twice.',
        "If you can see Chuck Norris, he can see you. If you can't see Chuck Norris you may be only seconds away from death.",
        'There is no theory of evolution. Just a list of animals Chuck Norris allows to live.',
    ];
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
