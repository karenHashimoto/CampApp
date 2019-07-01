<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="//www.googletagmanager.com/gtag/js?id=UA-142770356-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-142770356-1');
    </script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/list.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto|Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>


    <!-- ファビコン -->
    <link rel="icon" href="/image/icon/favicon.ico">

    <!-- スマホ用アイコン -->
    <link rel="apple-touch-icon" sizes="180x180" href="/image/icon/sumaho.ico">

</head>

<body>
    <div class="fixed">
        <div class="header">
            <div class="before_button">
                <a href="/" class="button_color_glay"><i class="material-icons large-size">
                        navigate_before
                    </i> </a>
            </div>
            <div class="logo_area">
                <a class="logo" href="/"><img src="/image/logo.svg"></a>
            </div>
            <div class="next_button">
            </div>

        </div>
    </div>



    <div class="list-wrap"></div>
    <div class="cg-name-sub -is_center"><i class="material-icons small-size">check_box</i>『福岡県』その他キャンプ場</div>
    <div class="notes">※設備・環境が厳しい上級者向けキャンプ場も含まれます<br>
        ※初心者の方は<a href="/">前ページ</a>のキャンプ場をおすすめします</div>


    <!-- <div class="cg-name-sub">福岡県内</div> -->

    <div class="grid">
        @foreach($camps as $camps)

        <div class="item">
            <a href="/people/{{$camps->id}}">
                <div class="prefecture">{{$camps -> city}}</div>
                <div class="cg-name">
                    {{$camps -> camp_name}}
                </div>
            </a>
        </div>
        @endforeach

        <div class="item_bg-gray">
            <div class="prefecture -is_gray">福岡市</div>
            <div class="cg-name -is_gray"> シーサイドももち海浜公園キャンプ場</div>
        </div>



    </div>
    </div>

    <div class="button_wrap_wide">
        <div><button class="button_flat_wide">

                <div class="before_button">
                    <a href="" class="button_color_white"><i class="material-icons large-size">
                            navigate_before
                        </i> </a>
                </div>

                <div class="center_button">前に戻る</div>

                <div class="next_button">

                </div>
            </button></div>
    </div>


</body>

</html>