<!DOCTYPE html>
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


  <meta charset="utf-8" />
  <title>camcierge</title>

  <meta name="viewport" content="width=device-width; initial-scale=1.0" />
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/detail.css">
  <link rel="stylesheet" href="/css/reco_unit.css">

  <!-- material fonts -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Noto+Serif+JP" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&text=0123456789" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- グーグルマップAPI -->

</head>

<body>

  <div class="fixed">
    <div class="header">
      <div class="before_button">
        <a href="/" class="button_color_glay"><i class="material-icons large-size">
            navigate_before
          </i> </a>
      </div>
      <div id="top" class="logo_area">
        <a class="logo" href="index.html"><img src="/image/logo.svg"></a>
      </div>
      <div class="next_button">
      </div>

    </div>
  </div>


  <div class="camp_pic">
    <div class="cg_img" style="background-image: url(/image/camps_img/{{$camps->camp_img}})"></div>
  </div>
  <div class="cg_title_unit">
    <div class="cg_subtext">キャンシェルジュのキャンプ場予約</div>
    <div class="cg_title">
      <div class="cg_name">{{$camps->camp_name}}</div>

      <div class="cg_area">(
        <div class="cg_state_name">{{$camps->state}}</div>/
        <div class="cg_area_name">{{$camps->city}}</div>)
      </div>
    </div>
  </div>

  <nav class="global-nav">
    <p><a href="#top">トップ</a></p>
    <p><a href="#plan">予約</a></p>
    <p><a href="#facility">写真・設備</a></p>
    <p><a href="#access">アクセス</a></p>
    <p><a href="#owner">オーナー</a></p>
    <span class="global-nav--bar"></span>
  </nav>

  <div id="main">

    <div class="font-serif">{{$camps->cg_title}}</div>
    <div class="nav_textbox">{{$camps->cg_subtitle}}</div>

    <div class="reco3_wrap">



      <div class="parenthesis">

        <div class="reco3_title">３つのおすすめポイント<i class="material-icons"></i>
        </div>


        <div class="reco_wrapper">

          <div class="reco_icon_wrap">

            <div class="recom_point_split">
              @foreach($camps->points as $point)
              <div class="recommend_item vertical">
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


          <div class="reco_text_wrap">
            <div class="recom_text_item">
              <div class="recom_text_area">
                {{$camps->reco_text1}}
              </div>
            </div>

            <div class="recom_text_item">
              <div class="recom_text_area">
                {{$camps->reco_text2}}
              </div>
            </div>


            <div class="recom_text_item">
              <div class="recom_text_area">
                {{$camps->reco_text3}}
              </div>
            </div>

          </div>

        </div>

      </div>




    </div>




  </div>

  <div id="plan" class="plan_center">
    キャンシェルジュ限定プラン</div>

  <div class="plan_wrap">
    <div class="plan_img"><img src="/image/camps_img/{{$camps->camp_img}}"></div>
    <div class="plan_title_unit">
      <div class="plan_subtitle">{{$camps->plan_comment}}</div>
      <div class="plan_name">{{$camps->plan_name}}</div>
    </div>
    <div class="plan_amount_unit">
      <div class="plan_amount">
        <div>{{$camps->plan_fee}}</div>
        <div class="fontsize_smaller">円/泊〜</div>
      </div>
      <div class="plan_max_people">（最大{{$camps->max_people}}名OK）</div>
    </div>
  </div>

  <div class="button_margin">
    <div class="reserve_button">
      <div><button class="button_flat"><a href="/people/{{$camps->id}}">いますぐ予約</a></button></div>
    </div>
    <div>


      <div id="facility" class="topic">設備</div>

      <div class="grid-5images">

        @foreach($camps->facilities as $facility)




        @if($facility->css_numbers === 0)
        <div class="image-5container">
          <div class="facility_icon"><img src="/image/facility/{{$facility->facility_masters->path}}" width="32px" height="32px"></div>
          <div class="facility_text">
            <div>{{$facility->facility_masters->facility_comment}}</div>
          </div>
        </div>
        @else
        <div class="image-5container image-5container_white">
          <div class="facility_icon "><img src="/image/facility/{{$facility->facility_masters->path}}" width="32px" height="32px"></div>
          <div class="facility_text">
            <div>{{$facility->facility_masters->facility_comment}}</div>
          </div>
        </div>
        @endif










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



      <div id="access" class="topic">アクセス・地図</div>


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




      <div id="owner" class="topic">オーナー情報</div>

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