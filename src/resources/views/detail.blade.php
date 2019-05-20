<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>camcierge</title>

  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet'
                    type='text/css'> -->
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <!-- css -->
  <!-- <link rel="stylesheet" href="detail.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="reco_unit.css"> -->

  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
  <link rel="stylesheet" href="{{ asset('css/reco_unit.css') }}">

  <!-- material fonts -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Noto+Serif+JP" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&text=0123456789" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- グーグルマップAPI -->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBunFa8M5cUXVfE2ewS5ZCueUIh-AxtB5Y&language=ja"></script>

</head>

<body>
  <!-- <div class="fixed">
    <div class="header">
        <a href="◯◯" class="button_before"><i class="material-icons large-size">
            navigate_before
            </i> </a>
      <a class="logo" href="index.html">camcierge</a>

    </div>
  </div> -->

  <div class="fixed">
    <div class="header">
      <div class="before_button">
        <a href="◯◯" class="button_color_glay"><i class="material-icons large-size">
            navigate_before
          </i> </a>
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
  </div>


  <div class="camp_pic">
    <div class="cg_img" style="background-image: url(/image/camps_img/{{$camps->camp_img}})"></div>
  </div>




  <!-- <div class="camp_pic">
 <img class="cg_img" src="main-img.jpg" > -->
  <div class="cg_title_unit">
    <div class="cg_subtext">キャンシェルジュのキャンプ場予約</div>
    <div class="cg_title">
      <div class="cg_name">{{$camps->camp_name}}</div>
      <!-- <div class="cg_area_unit"> -->
      <div class="cg_area">(
        <div class="cg_state_name">{{$camps->state}}</div>/
        <div class="cg_area_name">{{$camps->city}}</div>)
      </div>
    </div>
  </div>

  <nav class="global-nav">
    <p><a href="#">トップ</a></p>
    <p><a href="#">予約</a></p>
    <p><a href="#">写真・設備</a></p>
    <p><a href="#">アクセス</a></p>
    <p><a href="#">オーナー</a></p>
    <span class="global-nav--bar"></span>
  </nav>

  <div id="main">

    <div class="font-serif">{{$camps->cg_title}}</div>
    <div class="nav_textbox">{{$camps->cg_subtitle}}</div>

    <div class="reco3_wrap">



      <div class="parenthesis">

        <div class="reco3_title">３つのおすすめポイント<i class="material-icons"></i>
        </div>
        @foreach($camps->points as $point)
        <div class="recommend_column">
          <div class="recommend_item">
            <div class="reco_point_left">
              <i class="material-icons large-size"><img src="/image/point/{{$point->point_masters->path}}"></i>
            </div>

            <div class="recommend_words">
              <p class="recommend_word">{{$point->point_masters->point_comment}}</p>
              <p class="recommend_number"></p>
            </div>
          </div>
          <div class="recommend_text_item">
            <div class="recommend_text_area">{{$camps->reco_text1}}
            </div>
          </div>
        </div>
        @endforeach


        <div class="reco_wrapper">

          <div class="reco_icon_wrap">
            <div class="recom_point_split">
              <div class="recommend_item vertical">
                <div class="reco_point_left">
                  <i class="material-icons large-size">departure_board</i>
                </div>

                <div class="recommend_words">
                  <p class="recommend_word">満点の星空</p>
                  <p class="recommend_number">1</p>
                </div>
              </div>
            </div>
            <div class="recom_point_split">
              <div class="recommend_item vertical">
                <div class="reco_point_left">
                  <i class="material-icons large-size">departure_board</i>
                </div>

                <div class="recommend_words">
                  <p class="recommend_word">満点の星空</p>
                  <p class="recommend_number">1</p>
                </div>
              </div>
            </div>
            <div class="recom_point_split">
              <div class="recommend_item vertical">
                <div class="reco_point_left">
                  <i class="material-icons large-size">departure_board</i>
                </div>

                <div class="recommend_words">
                  <p class="recommend_word">満点の星空</p>
                  <p class="recommend_number">1</p>
                </div>
              </div>
            </div>
          </div>
          <div class="reco_text_wrap">
            <div class="recom_text_item">
              <div class="recom_text_area">広々とした完全フリースペースの
                オートキャンプ場です。
              </div>
            </div>

            <div class="recom_text_item">
              <div class="recom_text_area">広々とした完全フリースペースの
                オートキャンプ場です。
              </div>
            </div>


            <div class="recom_text_item">
              <div class="recom_text_area">広々とした完全フリースペースの
                オートキャンプ場です。
              </div>
            </div>

          </div>

        </div>

      </div>




    </div>




  </div>

  <div class="plan_center">
    キャンシェルジュ限定プラン</div>

  <div class="plan_wrap">
    <div class="plan_img"><img src="https://openweathermap.org/themes/openweathermap/assets/img/dashboardbanner.png"></div>
    <div class="plan_title_unit">
      <div class="plan_subtitle">好きな場所にテントを張れる</div>
      <div class="plan_name">フリーサイトプラン</div>
    </div>
    <div class="plan_amount_unit">
      <div class="plan_amount">
        <div>2,000</div>
        <div class="fontsize_smaller">円/泊〜</div>
      </div>
      <div class="plan_max_people">（最大5名OK）</div>
    </div>
  </div>

  <div class="button_margin">
    <div class="reserve_button">
      <div><button class="button_flat"><a href="/people/{{$camps->id}}">いますぐ予約</a></button></div>
    </div>
  </div>

  <div class="topic">設備</div>
  <div class="grid-5images">
    @foreach($facilities as $facilities)
    <div class="image-5container">
      <div class="facility_icon"><img src="/image/facility/{{$facilities->path}}" width="32px" height="32px"></div>
      <div class="facility_text">
        <div></div>{{$facilities->facility_comment}}
      </div>
    </div>
    @endforeach
  </div>




  <div class="facility_explain">
    <div class="facility_on">■</div>設備あり <div class="facility_off">■</div>なし
  </div>



  <div class="topic">写真一覧</div>

  <div class="grid-3images">

    @foreach($camps->cg_pictures as $cg_picture)
    <div class="image-container">
      <img src="/image/camps_img/{{$cg_picture->cg_picture_masters->path}}">
    </div>
    @endforeach

  </div>



  <!-- <div class="cg_pictures_grid"></div>
<div class="camp_img_grid_unit">
  <div class="cg_img_grid" style="background-image: url(https://lh3.googleusercontent.com/8QnuC3qB5mhsI88bv9ghodTkKDxBDL391An6fmhfzw03b_KgTRaCKdAadqv1Id6pMJ6bPcLjPrY9-0PoppWSrRYcOiJ9vNzCQK3vVSzsRkhq6dlaL09aetqEiGn5GHfRaYg7QqlBuw=w800-h533)"></div>
</div>

<div class="camp_pic">
  <div class="cg_img_grid" style="background-image: url(https://lh3.googleusercontent.com/8QnuC3qB5mhsI88bv9ghodTkKDxBDL391An6fmhfzw03b_KgTRaCKdAadqv1Id6pMJ6bPcLjPrY9-0PoppWSrRYcOiJ9vNzCQK3vVSzsRkhq6dlaL09aetqEiGn5GHfRaYg7QqlBuw=w800-h533)"></div>
</div>
  
<div class="camp_pic">
  <div class="cg_img_grid" style="background-image: url(https://lh3.googleusercontent.com/8QnuC3qB5mhsI88bv9ghodTkKDxBDL391An6fmhfzw03b_KgTRaCKdAadqv1Id6pMJ6bPcLjPrY9-0PoppWSrRYcOiJ9vNzCQK3vVSzsRkhq6dlaL09aetqEiGn5GHfRaYg7QqlBuw=w800-h533)"></div>
</div> -->



  <!-- <img class="cg_pictures" src="https://lh3.googleusercontent.com/8QnuC3qB5mhsI88bv9ghodTkKDxBDL391An6fmhfzw03b_KgTRaCKdAadqv1Id6pMJ6bPcLjPrY9-0PoppWSrRYcOiJ9vNzCQK3vVSzsRkhq6dlaL09aetqEiGn5GHfRaYg7QqlBuw=w800-h533" alt="">
  <img class="cg_pictures" src="https://lh3.googleusercontent.com/8QnuC3qB5mhsI88bv9ghodTkKDxBDL391An6fmhfzw03b_KgTRaCKdAadqv1Id6pMJ6bPcLjPrY9-0PoppWSrRYcOiJ9vNzCQK3vVSzsRkhq6dlaL09aetqEiGn5GHfRaYg7QqlBuw=w800-h533" alt="">
  <img class="cg_pictures" src="https://lh3.googleusercontent.com/8QnuC3qB5mhsI88bv9ghodTkKDxBDL391An6fmhfzw03b_KgTRaCKdAadqv1Id6pMJ6bPcLjPrY9-0PoppWSrRYcOiJ9vNzCQK3vVSzsRkhq6dlaL09aetqEiGn5GHfRaYg7QqlBuw=w800-h533" alt=""> -->


  <!-- <div class="access">
<div class="map_api">
</div> -->

  <div class="topic">アクセス・地図</div>
  </div>


  <!-- 地図アイコン用リンク -->
  <div class="map">
    <div>
      <iframe src="{{$camps->map_link}}" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

  <a href="http://maps.google.com/maps?q=35.398413,138.561922" class="btn-app">
    <i class="material-icons">place</i>地図アプリでみる
  </a>

  <div class="access_comment">{{$camps->access_comment}}</div>

  <div class="cg_detail_wrap">
    <div class="cg_detail">
      <div class="cg_detail_column">
        <div class="bold">キャンプ場名</div>
        <div class="cg_detail_box">{{$camps->camp_name}}</div>
      </div>
    </div>

    <div class="cg_detail">
      <div class="cg_detail_column">
        <div class="bold">電話番号</div>
        <div class="cg_detail_box">{{$camps->phone}}</div>
      </div>
    </div>

    <div class="cg_detail_noborder">
      <div class="cg_detail_column">
        <div class="bold">住所</div>
        <div class="cg_detail_box">{{$camps->state}}{{$camps->city}}{{$camps->address}}</div>
      </div>
    </div>
  </div>




  <div class="topic">オーナー情報</div>

  <div class="owner_pic"><img src="/image/owner/{{$camps->owner_pic}}"></div>

  <div class="owner_comment">
    {{$camps->owner_comment}}
  </div>




  <div class="fixed_bottom">
    <div class="footer">

      <div class="plan_amount_unit">
        <div class="plan_amount">
          <div>{{$camps->plan_fee}}</div>
          <div class="fontsize_smaller">円/泊〜</div>
        </div>
        <div class="plan_max_people">（最大{{$camps->max_people}}名OK）</div>
      </div>
      <div class="reserve_button">
        <div><button class="button_flat"><a href="/people/{{$camps->id}}">いますぐ予約</a></button></div>
      </div>

    </div>
  </div>





</body>