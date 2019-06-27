<!DOCTYPE html>
<html lang="ja">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142770356-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-142770356-1');
  </script>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/input.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <title>お客様情報入力</title>
</head>

<body>
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
      </div>

    </div>
  </div>


  <div class="reserve_band">お客様情報入力</div>
  <div class="stepper_wrap">
    <div class="stepper">
      <div class="circle">
        <div class="circle-inner">85%</div>
      </div>
    </div>
    <div class="purpose_unit">
      <div class="purpose">レンタカー予約</div>
      <div class="purpose_next">予約完了まで あとすこし♫</div>
    </div>
  </div>

  <form method="POST" action="{{action('CustomersController@confirm')}}">
    @csrf
    <div class="box_item">
      <div class="user_item">お名前（フルネーム）</div>
      <div class="required">※必須</div>
    </div>
    <div class="form_item">
      <input type="text" name="name" required="required" value="{{ old('name') }}"></div>
    @foreach ($errors->get('name') as $errorMsg)
    {{ $errorMsg }}
    @endforeach

    <div class="box_item">
      <div class="user_item">メール</div>
      <div class="required">※必須</div>
    </div>
    <div class="form_item">
      <input type="text" name="email" required="required" value="{{ old('email') }}"></div>
    @foreach ($errors->get('email') as $errorMsg)
    {{ $errorMsg }}
    @endforeach

    <div class="box_item">
      <div class="user_item"> 電話番号</div>
      <div class="required">※必須</div>
    </div>
    <div class="form_item">
      <input type="text" name="phone" required="required" value="{{ old('phone') }}"></div>
    @foreach ($errors->get('phone') as $errorMsg)
    {{ $errorMsg }}
    @endforeach

    <div class="box_item">
      <div class="user_item"> 備考</div>
    </div>
    <div class="form_item">
      <input type="text" name="memo" value="{{ old('memo') }}"></div>
    @foreach ($errors->get('memo') as $errorMsg)
    {{ $errorMsg }}
    @endforeach


    <div class="box_item">
      <div class="user_item"> 会員規約</div>
      <div class="required">※必須</div>
    </div>


    <div class="wrap_bottom">
      <div class="terms">
        <a href="terms" class="kiyaku">キャンシェルジュ会員規約</a></div>
      <div>
        <input type="checkbox" value="" name="agree_terms" id="agree" required="required"> キャンシェルジュ規約に同意する</div>
      <div class="color_pink">
        <div class="materiai_icons">
          <i class="material-icons">
            error
          </i></div>
        <div>会員規約への同意が必要です。</div>
      </div>

      <div class="button_wrap_center">

        <button input type="submit" class="button_flat" value="submit" id="submit">
          <div class="before_button">
          </div>

          <div class="center_button">確認</div>

          <div class="next_button">
            <a href="◯◯" class="button_color_white"><i class="material-icons large-size">
                navigate_next
              </i> </a>
          </div>
        </button>
      </div>
    </div>
    </div>

    <div class="wrap_end">
      ご登録いただいたメールアドレスに予約確認メールが自動送信されます。その後48時間以内に担当者よりご登録いただいたお電話番号へ在庫確認のお電話をさせていただきます。
    </div>

  </form>
  </div>

  <script>
    $(function() {
      $('#submit').prop('disabled', true);

      $('#agree').on('click', function() {
        if ($(this).prop('checked') == false) {
          $('#submit').prop('disabled', true);
        } else {
          $('#submit').prop('disabled', false);
        }
      });
    });
  </script>