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
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/rental.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto|Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBunFa8M5cUXVfE2ewS5ZCueUIh-AxtB5Y&language=ja"></script>
    <title>Document</title>
    <link rel="icon" href="/image/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/image/icon/sumaho.ico">

</head>

<body>
    <div class="fixed">
        <div class="header">
            <div class="before_button">
                <a href="/date" class="button_color_glay"><i class="material-icons large-size">
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
    <div class="reserve_band">一括予約</div>
    <div class="stepper_wrap">
        <div class="stepper">
            <div class="circle">
                <div class="circle-inner">60%</div>
            </div>
        </div>
        <div class="purpose_unit">
            <div class="purpose">アイテムレンタル</div>
            <div class="purpose_next">次はレンタカー選択</div>
        </div>
    </div>


    <div class="rental_image">
        <img src="/image/rental_image.jpg">

    </div>


    <form action="{{url('/rental_car/' )}}" method="post">
        {{ csrf_field()}}
        <div class="button_wrap_wide">
            <div>
                <button class="button_flat_wide" name="item_yes" input type="submit">
                    <div class="before_button"></div>

                    <div class="center_button">レンタルする</div>
                    <div class="next_button">
                        <a href="◯◯" class="button_color_white"><i class="material-icons large-size">
                                navigate_next
                            </i> </a>
                    </div>
                </button></div>
        </div>

        </div>
        <div class="button_wrap_wide">
            <div><button class="button_flat_wide_white" name="item_no" input type="submit">

                    <div class="before_button">
                    </div>
                    <div class="center_button">しない</div>
                    <div class="next_button">
                    </div>
                </button>
            </div>
        </div>



    </form>
</body>

</html>