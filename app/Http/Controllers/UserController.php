<?php
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use App\Models\User;
    use App\Models\Post;
    use App\Models\profiles;
    
    use App\Models\countries;
    use App\Models\cities;
    use App\Models\positions;
    use App\Models\userps;
	
	class UserController extends Controller 
	{
    	public function show3(){
      	$userps=userps::all();
      	foreach ($userps as $city) {
			var_dump($city);
			var_dump($city->cities);
      	  	dump($city->positions);
		}
      	return view('User.showes', ['userps' => $userps]);
		}
	}
?>
