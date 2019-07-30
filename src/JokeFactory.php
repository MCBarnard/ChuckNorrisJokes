<?php

namespace Mcbarnard\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        "Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.",
        "Chuck Norris' tears cure cancer. Too bad he has never cried.",
        "Chuck Norris counted to infinity... Twice.",
        "If you can see Chuck Norris, he can see you. If you can't see Chuck Norris you may be only seconds away from death.",
        "There is no theory of evolution. Just a list of animals Chuck Norris allows to live."
    ];

    public function __construct(array $jokes=null)
    {
        if ($jokes) 
        {
            $this->jokes = $jokes;
        }   
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}

?>