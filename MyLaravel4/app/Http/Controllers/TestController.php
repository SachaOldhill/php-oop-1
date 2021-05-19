<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Movie {
  public $titolo;
  public $descrizione;
  public function __construct($titolo, $descrizione = null){
   $this->titolo = $titolo;
   $this->descrizione=$descrizione;
  }
  public function getString(){
    return "Film: " . $this -> titolo . "  Descrizione: " . $this -> descrizione;
  }
}
class TestController extends Controller
{
    public function home() {
      $movie1 = new Movie('Alien', 'Azione, Horror');
      $movie2 = new Movie('Re Leone');
      $movie3 = new Movie('Matrix', 'Azione, Fantascientifico');
      $movie4 = new Movie('Bronx', 'Gangster');

      $movies = [
        $movie1,
        $movie2,
        $movie3,
        $movie4
      ];

      $str = '';
      foreach ($movies as $movie) {
        $str .= $movie -> getString() . "\n";
      }
        dd($str);
        return view("pages.home");
    }
}
