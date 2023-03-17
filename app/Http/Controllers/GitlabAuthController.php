<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class GitlabAuthController extends Controller
{
    public function redirectToGitlab() {
        return Socialite::driver('gitlab')->redirect();
	}
          
    public function handleGitLabCallback() {
		try {
			$user = Socialite::driver('gitlab')->user();
            $finduser = User::where('gitlab_id', $user->id)->orWhere('email', $user->email)->first();
            $avatar_id = str_replace("https://secure.gravatar.com/avatar/", "", $user->avatar);         
            if($finduser) {
				if($finduser->gitlab_id === NULL) { 
					$finduser->gitlab_id = $user->id;
					$finduser->updated_at = now();
					$finduser->save();
				}
                Auth::login($finduser);
        
                return redirect(route('profile'));
			} 
			else {
                $newUser = User::create([
					'name' => $user->name,
					'email' => $user->email,
					'password' => Hash::make(Str::random(12)),
					'avatar' => $avatar_id,
					'gitlab_id'=> $user->id,
				]);
         
                Auth::login($newUser);
        
                return redirect(route('profile'));
            }
        } 
		catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
