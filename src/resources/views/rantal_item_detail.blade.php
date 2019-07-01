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
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/rentacar.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto|Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- ファビコン -->
    <link rel="icon" href="/image/icon/favicon.ico">

    <!-- スマホ用アイコン -->
    <link rel="apple-touch-icon" sizes="180x180" href="/image/icon/sumaho.ico">

    <title>Document</title>
</head>

<body>
    <div class="fixed">
        <div class="header">
            <div class="before_button">
                <a href="{{ route('date', ['id' => $camps->id]) }}" class="button_color_glay"><i class="material-icons large-size">
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
    <div class="reserve_band">レンタル品のご案内</div>