<?php

namespace spec;

use Movie;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('There is no sunshine');
        $this->shouldHaveType(Movie::class);
    }

    function it_should_be_rateable(){
        $this->setRating(5);

        $this->getRating()->shouldBe(5);
    }

    function it_should_not_allow_rating_greater_then_5(){
        $this->shouldThrow('\InvalidArgumentException')->duringSetRating(8);
    }

    function it_can_be_watched(){
        $this->watch();

        $this->shouldBeWatched();
    }

    function it_can_fetch_the_title_of_the_movie(){
        $this->getTitle()->shouldBe('There is no sunshine');
    }
}
