<?php
namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Producer;
use App\Models\Genres;
use App\Models\FilmGenre;

class FilmController extends Controller
{
    public function show(Request $request)
    {

    }

    public function result(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $director = $request->input('director');
        $created_at = $request->input('created_at');
        $genres = $request->input('genres');
        
        $film = new Film();
        $film->title = $title;
        $film->desc = $description;
        $film->director = $director;
        $film->created_at = $created_at;
        $film->save();

        
        
        foreach($genres as $genre){
          $filmGenre = new FilmGenre();
          $filmGenre->id_film = $film->id;
          $filmGenre->id_genre = $genre;
          $filmGenre->save();
        }

        return redirect('/film');
    
      }
      public function form()
      {
        $producers = Producer::all();
        $genres = Genres::all();
        return view('film.form', ['producers' => $producers, 'genres'=>$genres]);
      }
}


