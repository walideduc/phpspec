<?php

/**
 * Created by PhpStorm.
 * User: waled
 * Date: 27/05/17
 * Time: 13:10
 */
class Movie
{
    protected $title ;
    protected $watched = false ;
    protected $rating ;


    public function __construct($title)
    {
        $this->title = $title ;
    }

    public function watch(){
        $this->watched = true ;
    }

    public function setRating($rating)
    {
        $this->validateRatingRang($rating);

        $this->rating = $rating ;
    }

    public function getRating()
    {

        return $this->rating ;
    }

    public function validateRatingRang($rating){
        if($rating > 5) throw new InvalidArgumentException();
    }

    public function isWatched()
    {
        return $this->watched ;
    }

    public function getTitle()
    {
        return $this->title;
    }

}