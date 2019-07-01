<html lang="ja">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142770356-1"></script>
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
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="/css/top.css">
    <link rel="stylesheet" href="/css/header.css">


    <link rel="stylesheet" href="/css/reco_unit.css">


    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto|Pacifico|Gaegu|Sacramento" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="icon" href="/image/icon/favicon.ico">


    <link rel="apple-touch-icon" sizes="180x180" href="/image/icon/sumaho.ico">


</head>

<body>
    <div class="wrapper">
        <div class="wrapper_child">



            <div class="header_fixed">
                <div class="header">
                    <div class="before_button">

                    </div>
                    <div class="logo_area">
                        <a class="logo" href="/"><img src="/image/logo.svg"></a>
                    </div>
                    <div class="next_button">

                    </div>

                </div>


                <ul class="tab-list">
                    <!--タブ-->
                    <li class="tab is-active">
                        <div><i class="material-icons small-size">business_center</i></div>
                        <div><a class="_is_color_deeppink" href="#title1">場所を選ぶ</a></div>
                    </li>
                    <li class="tab">
                        <div><i class="material-icons small-size">format_list_bulleted</i></div>
                        <div><a href="#title2">レンタル内容</a></div>

                    </li>
                    <li class="tab">
                        <div><i class="material-icons small-size">access_time</i></div>
                        <div><a href="#title3">キャンプ当日</a></div>

                    </li>
                </ul>
                <div class="top_var">【福岡先行】グランピング宅配＆設営サービス</div>

                <div class="main">
                    <!--タブを切り替えて表示するコンテンツ-->
                    <div class="content is-show">
                        <!-- ここを修正 -->


                    </div>
                    <div class="content">
                        <div class="box_empty -is_white_bg"></div>
                        <div class="wrapper_item">
                            <img src="/image/rental1.png" width="100%">
                            <img src="/image/rental2.jpg" width="100%">
                        </div>


                    </div>

                    <div class="content">
                        <div class="box_empty -is_white_bg"></div>
                        <div class="wrapper_flow">
                            <img src="/image/flow1.png" width="100%">
                            <img src="/image/flow2.jpg" width="100%">
                            <img src="/image/flow3.jpg" width="100%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper_book">
                <div class="card_head">
                    <div class="nav_title_wrap">
                        <div id="title1" class="nav_title_img">
                            <img width="max" src="/image/title/titles.png"></a>
                        </div>


                        <div class="nav_title">
                            <div><i class="material-icons">check_box</i></div>
                            <div>{{$titles1->top_title}}</div>
                        </div>
                    </div>
                    <div class="nav_textbox">{{$titles1->top_subtitle}}</div>
                </div>



                @foreach($camps1 as $camps1)
                <div class="card">

                    <div class="card_img_wrap">
                        <div class="card_img">
                            <img src="/image/camps_img/{{$camps1->camp_img}}">
                        </div>


                        <div class="layer_padding">
                            <div class="card_layer">
                                <div class="title2">
                                    <div class="camp_id">{{$camps1->camp_name}}</div>
                                    <div class="camp_area">（{{$camps1->state}}/
                                        {{$camps1->city}})</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reco_container">
                        <div class="reco-main_margin">
                            <div class="cg_title_margin">
                                <div class="cg_title">{{$camps1->cg_title}}</div>
                            </div>
                            <div class="cg_title_under">Point</div>
                            <div class="reco_point_wrap">


                                @foreach($camps1->points as $point)

                                <div class="recommend_item parallel">
                                    <div class="reco_point_left">
                                        <i class="material-icons large-size"><img src="/image/point/{{$point->point_masters->path}}" width=32px height=32px></i>
                                    </div>

                                    <div class="recommend_words">
                                        <p class="recommend_word">{{$point->point_masters->point_comment}}</p>
                                        <p class="recommend_number">{{$loop->iteration}}</p>
                                    </div>
                                </div>

                                @endforeach



                            </div>
                        </div>
                        <div class="detail_btn_width">

                            <div class="detail_btn"><a href="detail/{{$camps1->id}}">もっと詳しくみる</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="button_wrap_wide">
                <div><button class="button_flat_wide">

                        <div class="before_button">
                        </div>

                        <div class="center_button"><a href="list">その他のキャンプ場</a></div>

                        <div class="next_button">
                            <a href="" class="button_color_white"><i class="material-icons large-size">
                                    navigate_next
                                </i> </a>
                        </div>
                    </button></div>
            </div>
        </div>
        <div class="box_empty"> <a href="privacy" class=privacy>プライバシーポリシー</a><a href="terms" class="privacy">利用規約</a></div>


    </div>
    </div>

    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
        jQuery(function($) {
            $('.tab').click(function() {
                $('.tab.is-active').removeClass('is-active');
                $(this).addClass('is-active');
                $(".content.is-show").removeClass('is-show');
                // クリックしたタブからインデックス番号を取得
                const index = $(this).index();
                // クリックしたタブと同じインデックス番号をもつコンテンツを表示
                $(".content").eq(index).addClass('is-show');
            });
        });
    </script>
</body>



</html>