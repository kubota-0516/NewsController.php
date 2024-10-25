<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift(); //配列の最初のデータを削除し、その値を左いシフトする（返す）メソッド
        } else {
            $headline = null;
        }

        return view('profile.index', ['headline' => $headline, 'posts' => $posts]);
    }
}