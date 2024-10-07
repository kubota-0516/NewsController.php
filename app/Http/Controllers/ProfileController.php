<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $poost = Profile::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $sheadline = $posts->shift(); //配列の最初のデータを削除し、その値を返すメソッド
        } else {
            $headline = null;
        }

        return view('plofile.index', ['headline' => $headline, 'posts' => $posts]);
    }
}