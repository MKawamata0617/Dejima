<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="book.css">
    <title>Profile</title>
</head>
<body>
    <div id="main_container">
        <!-- キャラクターの画像 -->
        <div id="character_image">
            <img src="img/1.png" alt="characer" width="100%" height="100%">
        </div>
        <!-- キャラ紹介以外のプロフィール -->
        <!--以下div id内の部分に登録情報が表示される感じ-->
        <div class="status_container">
            <div class="contents">秘密基地：
                <div id="portforio">http://どーたらこーたら</div>
            </div>
            <div class="contents">お便り先：
                <td>{{ $mail }}</td>
            </div>
            <div class="contents">名前：
                <td>{{ $name }}</td>
            </div>
            <div class="contents">性別：
                <td>{{ $sex }}</td>
            </div>
            <div class="contents">職業：
                <td>{{ $job }}</td>
            </div>
            <div class="contents">武器：
                <td>{{ $weapon }}</td>
            </div>
            <div class="contents">必殺技：
                <td>{{ $technique }}</td>
            </div>
        </div>
    </div>
    <!-- キャラ紹介-->
    <div id="character">焼肉食べ放題のさらなる安さを求め、カワ・サキ国より旅立った青年。</br>
    彼の眼中には2000円以下、ラストオーダー120分の店しか映らないのだった。
    </div> 
</body>
</html>