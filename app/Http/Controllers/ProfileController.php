<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Profile;

//課題18
class ProfileController extends Controller
{
    public function index(Request $request)
    {
      $posts = Profile::all()->sortByDesc('updated_at');
      if(count($posts) > 0){
        $headline = $posts->shift();
      }else{
        $headline = null;
      }
      //profile/index.blade.phpファイルを渡している。
      return view('profile.index',['headline'=> $headline,'posts'=>$posts]);
    }
}
