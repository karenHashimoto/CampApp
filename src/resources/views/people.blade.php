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


    <meta charset="utf-8">
    <title>camcierge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/people.css">
    <link rel="stylesheet" href="/css/spinner.css">

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto|Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>


    <!-- ファビコン -->
    <link rel="icon" href="/image/icon/favicon.ico">

    <!-- スマホ用アイコン -->
    <link rel="apple-touch-icon" sizes="180x180" href="/image/icon/sumaho.ico">

</head>

<body>
    <div class="fixed">
        <div class="header">
            <div class="before_button">
                <a href="{{ route('detail', ['id' => $camps->id]) }}" class="button_color_glay"><i class="material-icons large-size">
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
                <div class="circle-inner">20%</div>
            </div>
        </div>
        <div class="purpose_unit">
            <div class="purpose">人数を選択</div>
            <div class="purpose_next">次は日にちを選択</div>
        </div>
    </div>
    <div class="wrapper -is-flexbox">

        <div class="is_harf">
            <div class="plan_name">{{$camps->plan_name}}</div>


            <div class="cg_img"><img src="/image/camps_img/{{$camps->camp_img}}" width=130px height=130px></div>
        </div>

        <div class="is_harf">





            <div class="alert">毎日２組。４名限定で受付中</div>
            @if ($errors->any())


            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('date') }}" method="post">
                {{ csrf_field()}}
                <div class="people-number">
                    <div class="people-number_title">大人</div>


                    <div class="spinner_wrap">
                        <div>
                            <input type="button" name="spinner_down" class="spinner_down down js-spinner">
                        </div>
                        <div>
                            <input class="input_number" type="number" name="adult_number" value="2" tabindex="1">
                        </div>
                        <div>
                            <input type="button" name="spinner_up" class="spinner_up up js-spinner">
                        </div>
                    </div>

                    <div class="people-number_title">こども</div>

                    <div class="spinner_wrap">
                        <div>
                            <input type="button" name="spinner_up_c" class="spinner_down down js-spinner">
                        </div>
                        <div>
                            <input class="input_number" type="number" name="child_number" value="0" tabindex="1">
                        </div>
                        <div>
                            <input type="button" name="spinner_up_c" class="spinner_up up js-spinner">
                        </div>
                    </div>




                </div>



                <div class="button_wrap">

                    <div>
                        <button type="submit" class="button_flat">
                            <div class="before_button">
                            </div>

                            <div class="center_button">次へ</div>

                            <div class="next_button">
                                <div class="button_color_white"><i class="material-icons large-size">
                                        navigate_next
                                    </i> </div>
                            </div>
                            <input type="hidden" name="camp_id" value={{$camps->id}}>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        var counter = function() {
            return function(e) {
                var isDown = $(this).hasClass("down")
                var isUp = $(this).hasClass("up")

                var direction = isDown ? "down" : isUp ? "up" : undefined;

                var $current = $(this).parent().parent().find(".input_number")
                var current = parseInt($current.val());
                if (direction === "up") {
                    $current.val(++current)
                } else if (direction === "down" && current > 0) {
                    $current.val(--current)
                }
            }
        }

        $(".js-spinner").on("click", counter())
    </script>





</body>

</html>