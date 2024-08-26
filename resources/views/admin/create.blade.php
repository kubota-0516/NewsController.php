<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <title>MYNews</title>
    </head>
    <body>
        <h1>MYニュース作成画面</h1>
    </body>
</html>

1.Viewは何をするところでしょうか。簡潔に説明してみてください
Controllerの指示によって アクセスしてきたユーザーのブラウザに表示するデータを生成する ところ

2.プログラマーがHTMLを書かずにPHPなどのプログラミング言語やフレームワークを使う必要があるのはどういった理由でしょうか
ログインしたユーザーごとにWebページにユーザー名を表示したい場合などは、Model経由でデータベースからデータを取得し、
それをhtmlファイルに記述してユーザーに渡す必要があります。
そういう場合にPHPなどのプログラミング言語や、ひいてはLaravelなどのフレームワークが使われる

3. 前々章でAdmin/ProfileControllerのadd Action, edit Action に下記のように記述しました
  public function add()
  {
      return view('admin.profile.create');
  }
  public function edit()
  {
      return view('admin.profile.edit');
  }
この場合、add Action と edit Action を描画するには、それぞれどこのディレクトリに何というBladeファイルを設置すれば良いでしょうか。

admin/profileにcreate.blade.phpファイルを作る
admin/profileにedit.blade.phpファイルを作る
となる

4.3. の答えを実際に作成してみましょう。また、作成したBladeファイルにhtmlで記述して装飾してみましょう
