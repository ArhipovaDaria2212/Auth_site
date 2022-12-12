<?php
namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Producer;
use App\Models\Genres;
use App\Models\FilmGenre;
use App\Models\User;

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
      public function form(Request $request)
      {
        if ($request->session()->has('user')) {
				  $producers = Producer::all();
				  $genres = Genres::all();

				  return view('film.form', ['producers' => $producers, 'genres'=>$genres]);
			  }
			  else{
				  return redirect('/login');
			  }
      }

      public function login(Request $request){
			  $request->session()->forget('user');
			  $request->session()->forget('client');
			  return view('film.login');
		  }

		  public function loginresult(Request $request){
			  $login = $request->input('login');
			  $password = $request->input('password');
			  $users = User::where('id_level', 1)->get();
			  $clients = User::where('id_level', 2)->get();

			  foreach ($users as $user) {
          if ($login == $user->lodin){
            if ($password == $user->password){
              $request->session()->put('user', $login);
              return redirect('/film');
            }
          }
        }
        foreach ($clients as $client) {
          if ($login == $client->lodin){
            if ($password == $client->password){
              $request->session()->put('client', $login);
              return redirect('/');
            }
          }
        }
        echo "Неверный логин или пароль";
			  return view('film.login');
		  }		

      public function main(Request $request){
        if ($request->session()->has('client') || $request->session()->has('user')) {
				  $films = film::paginate(25);
          $producers = producer::all();
          $genres = genres::all();

          return view('film.main', ['films' => $films, 'producers' => $producers, 'genres'=>$genres]);
			  }
			  else{
				  return redirect('/login');
			  }
      }
}