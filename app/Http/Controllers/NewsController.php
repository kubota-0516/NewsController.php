<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 追記
use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at'); //sortBy(‘xxx’)：xxxで昇順に並べ換える。
                                                        //sortByDesc(‘xxx’)：xxxで降順に並べ換える。

        if (count($posts) > 0) {
            $headline = $posts->shift(); //配列の最初のデータを削除し、その値を返すメソッド
        } else {
            $headline = null;
        }

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('news.index', ['headline' => $headline, 'posts' => $posts]);
    }
}