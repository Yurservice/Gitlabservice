<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitLabController extends Controller
{
    public function GitLabPage () {
		return view('pages.frontpage');
	}
	
	public function GitLabProfile () {
	
		$user_id = auth()->user()->gitlab_id;
		$access_token = env('GITLAB_ACCESS_TOKEN');
	
		try {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://gitlab.com/api/v4/users/'.$user_id.'/projects?statistics=true');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, ["PRIVATE-TOKEN:".$access_token]);
			$response = curl_exec($ch);
			curl_close($ch);
			$data = json_decode($response, true);
		}
		catch(\Exception $e) {
			Log::error('Виникла помилка при отриманні проектів: '.$e->getMessage());
			return redirect(route('main'));
		}
		return view('pages.profile',['projects'=>$data]);
		//return view('pages.profile');
	}
	
}
