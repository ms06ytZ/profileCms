<div>
    
サイト内容の更新<br>
当該箇所のファイルを入れ替えることにより、サイトの内容を更新できます。
<hr>

<div>現在の設定（ファイル）を確認したい場合、ファイルをクリックしてください。ダウンロードできます。
    <li>サイト＿タイトル（ブラウザのタブに表示される）：ファイル名：<a href="/admin_file/myProfile.txt" target="_blank">myProfile.txt</a></li>
 <li>サイト＿ホーム（メニューもここ）：ファイル名：<a href="/admin_file/home.txt" target="_blank">home.txt</a></li>
 <li>サービス：ファイル名：<a href="/admin_file/service.txt" target="_blank">service.txt</a></li>
 <li>ポートフォーリオ（マイワークス）：ファイル名：
     <a href="/admin_file/portfolio.txt" target="_blank">portfolio.txt</a></li>
 <li>私について：ファイル名：<a href="/admin_file/about.txt" target="_blank">about.txt</a></li>
 <li>私を選ぶ理由（強み）：ファイル名：<a href="/admin_file/whyme.txt" target="_blank">whyme.txt</a></li>
 <li>コンタクトミー：ファイル名：<a href="/admin_file/contact.txt" target="_blank">contact.txt</a></li>
 <li>フッター：ファイル名：<a href="/admin_file/footer.txt" target="_blank">footer.txt</a></li>
 </div>    
また画像を指定すると同じ名前の画像を入れ替えます。


{{Form::open(array('url' => '/admin_root_update', 'files' => true))}}

<input type="hidden" name="_token" value="{{csrf_token()}}">

    <div>file：{{Form::file('filename')}}</div>



{{Form::submit('コンテンツのファイルを入れ替え')}}
{{Form::close()}}


</div> 