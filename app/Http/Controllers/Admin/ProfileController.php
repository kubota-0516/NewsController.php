<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\History;
use App\Models\Index;
use Carbon\Carbon;
use App\Models\ProfileHistory;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = new Profile;
        $form = $request->all();

         // フォームから送信されてきた_tokenを削除する
         unset($form['_token']);
         
         // データベースに保存する
        $profile->fill($form);
        $profile->save();
         
        return redirect('admin/profile/index');

    }

    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        if ($cond_name != '') {
             // 検索されたら検索結果を取得する
            $posts = Profile::where('name', $cond_name)->get();} else {
                 // それ以外はすべてのprofileを取得する
                $posts = Profile::all();
            }
            return view('admin.profile.index', ['posts' => $posts, 'cond_name' => $cond_name]);
    }

    public function edit(Request $request)
    {
        // profile Modelからデータを取得する
        $profile = Profile::find($request->id);
        if (empty($profile)) {
            abort(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profile]);
//      ^^^^^^^^^^^ view ファイル admin.profile.index ？を表示する
    }

    public function update(Request $request)
    {
        // dd($request);
        // Validationをかける
        $this->validate($request, Profile::$rules);
        // Profile Modelからデータを取得する
        $profile = Profile::find($request->id);
        // dd($profile);
        // 送信されてきたフォームデータを格納する
        $profile_form = $request->all();
        // dd($profile_form);
        // if ($request->remove == 'true') {
        //     $profile_form['image_path'] = null;
        // } elseif ($request->file('image')) {
        //     $path = $request->file('image')->store('public/image');
        //     $profile_form['image_path'] = basename($path);
        // } else {
        //     $profile_form['image_path'] = $profile->image_path;
        // }

        // unset($profile_form['image']);
        // unset($profile_form['remove']);
        unset($profile_form['_token']);
        // dd($profile_form);
        // 該当するデータを上書きして保存する
        $profile->fill($profile_form)->save();

        // 以下を追記
        $history = new ProfileHistory();
        $history->profile_id = $profile->id;
        $history->edited_at = Carbon::now();
        $history->save();

        return redirect()->back(); //元に戻る便利なコード
//      ^^^^^^^^^^^^^^^ redirect で /admin/profile/edit ？へ移動する
    }

    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $profile = Profile::find($request->id);

        // 削除する
        $profile->delete();

        return redirect('admin/profile/');
    }
};