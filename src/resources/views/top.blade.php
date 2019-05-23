<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>camcierge</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" href="/css/top.css">
    <link rel="stylesheet" href="/css/header.css">
    <!-- <link rel="stylesheet" href="/css/detail.css"> -->
    <link rel="stylesheet" href="/css/reco_unit.css">


    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto|Pacifico|Gaegu|Sacramento" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>
    <div class="header_fixed">
        <div class="header">
            <div class="before_button">
                <!-- <a href="◯◯" class="button_color_glay"><i class="material-icons large-size">
                    navigate_before
                </i> </a> -->
            </div>
            <div class="logo_area">
                <a class="logo" href="index.html"><img src="/image/logo.svg"></a>
            </div>
            <div class="next_button">
                    <!-- <a href="◯◯" class="button_before"><i class="material-icons large-size">
                        navigate_before
                    </i> </a> -->
            </div>

        </div>

        <div class="tab">
            <div class="tab_item is_on">
                <div><i class="material-icons small-size">departure_board</i></div>
                <div><a class="_is_color_deeppink" href="#title1">２時間</a></div>
            </div>
            <div class="tab_item">
                <div><i class="material-icons small-size">sentiment_satisfied_alt</i></div>
                <div><a href="#title2">豪華</a></div>
            </div>
            <div class="tab_item">
                <div><i class="material-icons small-size">hot_tub</i></div>
                <div><a href="#title3">海が見える</a></div>
            </div>
        </div>
        <div class="top_var">Recommend Campground</div>
    </div>

    <div class="card_head">
        <div class="nav_title_wrap">
            <div id="title1" class="nav_title_img">
                <img width="max" src="/image/title/titles1.jpg"></a>
            </div>





            <div class="nav_layertext">deperture</div>

            <div  class="nav_title">
                <div><i class="material-icons">departure_board</i></div>
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
    <div class="box_empty"></div>
    
    
    <div class="card_head">
        <div class="nav_title_wrap">
            <div id="title2" class="nav_title_img">
                <img width="max" src="/image/title/titles2.jpg"></a>
            </div>
            <div class="nav_layertext">Comfort</div>

            <div class="nav_title">
                <div><i class="material-icons">departure_board</i></div>
                <div>{{$titles2->top_title}}</div>
            </div>
        </div>
        <div class="nav_textbox">{{$titles2->top_subtitle}}</div>
    </div>




 @foreach($camps2 as $camps2)
    <div class="card">

        <div class="card_img_wrap">
            <div class="card_img">
                <img src="/image/camps_img/{{$camps2->camp_img}}">
            </div>


            <div class="layer_padding">
                <div class="card_layer">
                    <div class="title2">
                        <div class="camp_id">{{$camps2->camp_name}}</div>
                        <div class="camp_area">（{{$camps2->state}}/
                            {{$camps2->city}})</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="reco_container">
            <div class="reco-main_margin">
                <div class="cg_title_margin">
                    <div class="cg_title">{{$camps2->cg_title}}</div>
                </div>
                <div class="cg_title_under">Point</div>
                <div class="reco_point_wrap">


                    @foreach($camps2->points as $point)

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

                <div class="detail_btn"><a href="detail/{{$camps2->id}}">もっと詳しくみる</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach










    <div class="box_empty"></div>

    <div class="card_head">
        <div class="nav_title_wrap">
            <div id="title3" class="nav_title_img">
                <img width="max" src="/image/title/titles3.jpg"></a>
            </div>
            <div class="nav_layertext">Ocian</div>

            <div class="nav_title">
                <div><i class="material-icons">departure_board</i></div>
                <div>{{$titles3->top_title}}</div>
            </div>
        </div>
        <div class="nav_textbox">{{$titles3->top_subtitle}}</div>
    </div>


    @foreach($camps3 as $camps3)
    <div class="card">

        <div class="card_img_wrap">
            <div class="card_img">
                <img src="/image/camps_img/{{$camps3->camp_img}}">
            </div>


            <div class="layer_padding">
                <div class="card_layer">
                    <div class="title2">
                        <div class="camp_id">{{$camps3->camp_name}}</div>
                        <div class="camp_area">（{{$camps3->state}}/
                            {{$camps3->city}})</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="reco_container">
            <div class="reco-main_margin">
                <div class="cg_title_margin">
                    <div class="cg_title">{{$camps3->cg_title}}</div>
                </div>
                <div class="cg_title_under">Point</div>
                <div class="reco_point_wrap">


                    @foreach($camps3->points as $point)

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

                <div class="detail_btn"><a href="detail/{{$camps3->id}}">もっと詳しくみる</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach




</body>



</html>