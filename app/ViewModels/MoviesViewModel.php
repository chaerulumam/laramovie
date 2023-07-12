<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $popularMovie;
    public $genres;
    public $nowPlaying;

    public function __construct($popularMovie, $genres, $nowPlaying)
    {
        $this->popularMovie = $popularMovie;
        $this->genres = $genres;
        $this->nowPlaying = $nowPlaying;
    }

    public function popularMovie()
    {
        return $this->popularMovie;
    }
    public function genres()
    {
        return $this->genres;
    }
    public function nowPlaying()
    {
        return $this->nowPlaying;
    }
}
