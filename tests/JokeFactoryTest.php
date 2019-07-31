<?php

namespace Mcbarnard\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;

use Mcbarnard\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 441, "joke": "Chuck Norris did not &quot;lose&quot; his virginity, he stalked it and then destroyed it with extreme prejudice.", "category": [] } }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);
       
        $jokes = new JokeFactory($client);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('Chuck Norris did not &quot;lose&quot; his virginity, he stalked it and then destroyed it with extreme prejudice.', $joke);
    }
}
