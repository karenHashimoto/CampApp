<!DOCTYPE html>
<html lang="en">
<head><title>camcierge</title>
<!-- css -->
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
<!-- javascript -->
<link  href="{{ asset('js/detail.js') }}">
<head>
	<meta charset="utf-8" />
	<title>ART SCHOOL</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css" />
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- google material icon -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

  <!-- グーグルマップAPI -->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyBunFa8M5cUXVfE2ewS5ZCueUIh-AxtB5Y&language=ja"></script>

</head>
<html>
<div id="header">
		<h1><a href="#">camcierge</a></h1>
		<img src="images/main-img.jpg" width="320" height="250" alt="" />

		<h2><a href="#">ボイボイキャンプ場</a></h2>
		<div id="nav">
			<div>
				<div><a href="#">トップ</a></div>
				<div><a href="#">予約</a></div>
				<div><a href="#">写真・設備</a></div>
				<div><a href="#">アクセス</a></div>
				<div><a href="#">オーナー</a></div>
			</div>
		</div>

	</div>


	<div id="main">

		<h3>大分・久住高原で<br>大自然を体感しよう </h3>
		<div class="subtitle">広々とした完全フリースペースのオートキャンプ場です。隣が気にならないお気に入りの場所を見つけ、ゆったりとしたひと時をお楽しみください。</div>

		<div class="recommend">
				<div class="reccomend_img1"><input type="image" src="" alt="" title="広々アイコン"></div>
			<div class="recommend_point1">ポイント１</div>
			<div class="reccomend_img2"><input type="image" src="" alt="" title="星空アイコン"></div>
			<div class="recommend_point2">ポイント2</div>
			<div class="reccomend_img3"><input type="image" src="" alt="" title="広々アイコン"></div>
			<div class="recommend_point3">ポイント3</div>
		</div>

		<div class="recommend_plan">
			<p>キャンシェルジュ限定プラン</p>


			<div class="recommend_plan">
				<p>好きな場所にテントを張れる</p>
				<p>フリーサイトプラン</p>
				<p>2,000円/泊</p>
				<p>（最大5名OK）</p>
			</div>
		</div>
		<div class="facility">
			<div class="facility_title">
				<p>設備</p>
			</div>
			<div class="facility_icon">imag</div>

		</div>
<div class="camp_img">
			<p>写真一覧</p>
		</div>
		<div class="access">
			<p></p>
				<div class="map_api">
					
					
				</div>
				<div class="access"><p>アクセス・地図</p></div>
			</div>
	
			<div id="map-canvas"></div>

			<div id="map2" style="width:100%; height:150px"></div>
						<!-- 地図アイコン用リンク -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.27582958991!2d138.55973331525104!3d35.398412980261185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x527ef1e8bbb1107c!2z44G144KC44Go44Gj44Gx44KJ!5e0!3m2!1sja!2sjp!4v1554697120382!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

						<a href="http://maps.google.com/maps?q=35.398413,138.561922" class="btn-app">
							<i class="material-icons">
								place
								</i>地図アプリでみる</a> 

			<div class="camp_data">
				<p>施設データ</p>
				<div class="camp_name">ボイボイキャンプ場</div>
			<div class="camp_phone">0000-00-000</div>
			<div class="camp_adress">大分県竹田市hogehoge</div>
			</div>
<div class="owner_info">
	<div class="owner_img"><img src="" alt="" title="オーナー画像"></div>
<div class="owner_comment">hogehogehoge</div>
</div>
			
		 <!-- 本文 -->
		 <article>
			<div class="container">
			  <div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
		
				  <!-- グーグルマップを付ける -->
				  <div id="map" style="width:100%; height:200px"></div>
		
				  <!-- wrapperエリア -->

				</div>
			  </div>
			</div>
		  </article>



		<div class="box">
			 <h3>Art Lessons for Kids</h3><span class="date">2013.09.15</span>
			<p>Navigation for smartphone site. Navigation for smartphone site. Navigation for smartphone site.</p>
			<p>Navigation for smartphone site. Navigation for smartphone site. Navigation for smartphone site.</p>
			<a href=""><span class="more">more</span></a>
		</div> 
			<div class="box">
				 <h3>Art Exhibition 2013</h3><span class="date">2013.08.30</span>
			<p>Navigation for smartphone site. Navigation for smartphone site. Navigation for smartphone site.</p>
			<p>Navigation for smartphone site. Navigation for smartphone site. Navigation for smartphone site.</p>
			<a href=""><span class="more">more</span></a> 
			</div>






		</div>








		<div id="footer">
			<p>&copy; camcierge</p>
		</div>










		
<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>


  <script>

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


  </script>

                    </html>
