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
  <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/reco_unit.css') }}">

  <!-- material fonts -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto|Noto+Serif+JP" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet"> -->
  <!-- <link href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css" rel="stylesheet"> -->
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
    <div class="cg_img" style="background-image: url(main-img.jpg)">{{$cg_imgs->path}}</div>
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


      <!-- <div class="rotate"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.094 2.814l9.092 9.186-9.092 9.186-1.244-1.207 7.979-7.979-7.979-7.979 1.244-1.207zm.028-2.814l-4.122 4 8 8-8 8 4.122 4 11.878-12-11.878-12z"/></svg>
    </div>
    <div class="right_just">    <div class="rotate_2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.094 2.814l9.092 9.186-9.092 9.186-1.244-1.207 7.979-7.979-7.979-7.979 1.244-1.207zm.028-2.814l-4.122 4 8 8-8 8 4.122 4 11.878-12-11.878-12z"/></svg>
      </div>
    </div> -->

      <div class="parenthesis">

        <div class="reco3_title">３つのおすすめポイント<i class="material-icons"></i>
        </div>
        @foreach($camps->points as $point)
        <div class="recommend_column">
          <div class="recommend_item">
            <!-- <div class="recommend_item_icon">
              <img class="recommend_item_icon_image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAQAAABIkb+zAAACQElEQVR4Ae2aA6wYQRRFXxHWRlRbe2/tNmrDRj9mjagI6tipbSsoozJug1pxbQfftv9s3+xO8c6NcWfOGiMqDMMwDKPZ8D6cE63Fdp7FLT7GR+SzsP4gH5/whDd5DjuwhnPYV5pJIFpiJjbzDl8im4W/H2TzFW9jM2ZKS0mLaDYO8QcL/QbfcQizEj9ckIEnLEwueIKMxA6raBofsTCF3IumiXeaYwMKWJhOUICNnvcD97Mw5ewXf3AlC9MPVokfRvRGVhCBrOF9xAc4xcIwwWnRM6gTc0MJMIedRQsWsjBcsFC08HBIAR7WCzwMKvBIL/A+qMB70YKCkAIoEC21K8Wd8OOZgAmYgAmYgAmYgAkoMQETMAETMAETCBkTMAETMAETMAETMIE/TQBZ2F72D3d4H2x3/4vs0pOCAN5GQ6Qa0RC8dZiuU08KAsgfNUlqMWoi8h2m7NSTvMBBqQcciCng0JOUwHipB46LKeDQk5BAv7ZSD/3axhRw6ElIYGhrqYehrWMKOPfYIcSftQY+JPWAgzEFXHt+6QUe1/53Hk2QWkQTHP/nx+95Llpwoe4NiINqKA5yvZHF78E1vcCCoI8SK0S/Yivccg8UjOgqerA3mMBR8cGo9vwSZPpZUU/xAyczL4DCPPEHlqW+/deIX9IWEDGB/0RAlJiACfwtAnhb/xOlWuCdple/CPyIKMFRp149I7rWs63eRV30vfxQt3d4B/EPe+Aiv1YO8pVX2MNPL69U78VFt17DMAzDMAyjCNmNxVSrwW9fAAAAAElFTkSuQmCC" alt="">
            </div> -->
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


       


        <!-- <div class="reco_point_unit">
        <div class="reco_icon_wrap">
          <div class="reco_point_left">
              <i class="material-icons large-size">departure_board</i>
          </div>

          <div class="main_wrap">

            <div class="reco_icon_area">
              <div class="reco_number">1</div>
              <div class="text_area">
                  <div class="reco_title2">満点の星空</div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div class="reco_text_area"></div> -->

        <!-- </div>

      <div class="reco_point_unit">
          <div class="reco_point_left">
              <i class="material-icons large-size">departure_board</i>
          </div>
          <div class="main_wrap">
              <div class="full_area">
                  <div class="reco_number">2</div>
                  <div class="text_area">
                      <div class="reco_title2">満点の星空</div>
                  </div>
              </div>
              <div class="reco_textarea"></div>
          </div>
      </div>
    
      <div class="reco_point_unit">
          <div class="reco_point_left">
              <i class="material-icons large-size">departure_board</i>
          </div>
          <div class="main_wrap">
              <div class="full_area">
                  <div class="reco_number">3</div>
                  <div class="text_area">
                      <div class="reco_title2">満点の星空</div>
                  </div>
              </div>
          </div>
      </div> -->




        <!-- <div class="rotate_3"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.094 2.814l9.092 9.186-9.092 9.186-1.244-1.207 7.979-7.979-7.979-7.979 1.244-1.207zm.028-2.814l-4.122 4 8 8-8 8 4.122 4 11.878-12-11.878-12z"/></svg>
      </div>
      <div class="rotate_4"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.094 2.814l9.092 9.186-9.092 9.186-1.244-1.207 7.979-7.979-7.979-7.979 1.244-1.207zm.028-2.814l-4.122 4 8 8-8 8 4.122 4 11.878-12-11.878-12z"/></svg>
      </div> -->
      </div>


      <!-- <div class="reccomend_img2"><input type="image" src="" alt="" title="星空アイコン"></div>
    <div class="recommend_point2">ポイント2</div>
    <div class="reccomend_img3"><input type="image" src="" alt="" title="広々アイコン"></div>
    <div class="recommend_point3">ポイント3</div> -->


    </div>

    <div class="plan_center">
      キャンシェルジュ限定プラン</div>


<div class="reserve_button">
  <div><button class="button_flat">いますぐ予約</button></div>
</div>

<!-- <div class="facility"> -->
<!-- <div class="facility_title"> -->
<div class="topic">設備</div>
<!-- <div class="facility_icon">imag</div> -->
<div class="grid-5images">

  <div class="image-5container">
    <div class="facility_icon"><img src="http://via.placeholder.com/32x32" alt=""></div>
    <div class="facility_text"><div>温水トイレ</div></div>
  </div>

  <div class="image-5container_white">
      <div class="facility_icon"><img src="http://via.placeholder.com/32x32" alt=""></div>
      <div class="facility_text"><div>温水トイレ</div></div>
  </div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>
  <div class="image-5container"></div>

  </div>
  <div class="facility_explain"><div class="facility_on">■</div>設備あり  <div class="facility_off">■</div>なし</div>


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

  <!-- <div id="map-canvas"></div> -->

  <!-- <div id="map2" style="width:100%; height:150px"></div> -->
  <!-- 地図アイコン用リンク -->
  <div class="map">
    <div>
         {!! $camps->map_link !!}
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
  <!-- </div>
<div class="owner_info">
<div class="owner_img"><img src="" alt="" title="オーナー画像"></div>
<div class="owner_comment">hogehogehoge</div>
</div> -->

  <!-- 本文 -->
  <!-- <article>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-10 mx-auto"> -->

  <!-- グーグルマップを付ける -->
  <!-- <div id="map" style="width:100%; height:200px"></div> -->

  <!-- wrapperエリア -->

  <!-- </div>
</div>
</div>
</article>


</div> -->



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
        <div class="plan_max_people">{{$camps->max_people}}名</div>
      </div>
      <div class="reserve_button">
        <div><button class="button_flat">いますぐ予約</button></div>
      </div>

    </div>
  </div>




  <!-- <div id="footer">
<p>&copy; camcierge</p>
</div> -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Custom scripts for this template -->
  <!-- <script src="js/clean-blog.min.js"></script> -->


  <!-- <script>

// １位のキャンプ場の地図
var MyLatLng = new google.maps.LatLng(35.400028, 138.564639);
var Options = {
zoom: 17,      //地図の縮尺値
center: MyLatLng,    //地図の中心座標
mapTypeId: 'satellite'   //地図の種類
};
var map = new google.maps.Map(document.getElementById('map'), Options);


// ランキング1位のキャンプ場のストリートビュー
// 変数群
var map2, svp;
//--------------------------------------------
//初期ページを読み込んだ時に実行する関数
//--------------------------------------------
function initialize() {
// 緯度・経度変数
var latlng = new google.maps.LatLng(35.400028, 138.564639);
// 地図のオプション設定変数
var myOptions = {
// カメラの向き
heading: -20,
// 初期のズーム レベル
zoom: 8,
// 地図の中心点
center: latlng,
// 地図タイプ
mapTypeId: google.maps.MapTypeId.ROADMAP
};
//地図オブジェクト生成
map2 = new google.maps.Map(document.getElementById('map2'), myOptions);
// ストリートビューオブジェクト生成
svp = new google.maps.StreetViewPanorama(
document.getElementById('svp'), {
position: map2.getCenter()
});
// ストリートビューオブジェクト詳細設定
svp.setPov({ heading: 150, pitch: 0, zoom: 0 });
// マップとストリートビューを一致させる為の記述
map2.setStreetView(svp);
}

// function initialize()
// ページを読み込んだ時にinitialize()を実行
google.maps.event.addDomListener(window, 'load', initialize);


// // 回転関数をいれたが動かなかった

// function rotate() {
//   // カメラの位置取得
//   var pov = svp.getPov();
//   var _heading = pov['heading'];
//   var _pitch = pov['pitch'];
//   var _zoom = pov['zoom'];
//   // 位置をずらす
//   _heading = _heading + 0.1;
//   // 位置情報をセット(一番大事)
//   svp.setPov({
//     heading: _heading, pitch: _pitch, zoom: _zoom
//   });
// }


</script> -->

</body>