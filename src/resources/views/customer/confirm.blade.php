<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/confirm.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <title>お客様確認画面</title>
</head>

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

<div class="reserve_band">ご予約内容確認</div>

<form method="POST" action="{{action('CustomersController@update')}}">
  {{ csrf_field()}}


  <div class="confirm_area">

    <div class="confirm_unit">
      <div class="confirm_title">お名前</div>
      <div class="confirm_textbox">{{$customer->name}} 様</div>
    </div>


    <div class="confirm_unit">
      <div class="confirm_title">メールアドレス</div>
      <div class="confirm_textbox">{{$customer->email}}</div>
    </div>

    <div class="confirm_unit">
      <div class="confirm_title">お電話番号</div>
      <div class="confirm_textbox">{{$customer->phone}}</div>
    </div>

    <div class="confirm_unit">
      <div class="confirm_title">備考</div>
      <div class="confirm_textbox">{{$customer->memo}}</div>
    </div>
    <div class="confirm_unit">
      <div class="confirm_title">キャンプ場名</div>
      <div class="confirm_textbox"> {{$camps->camp_name}}</div>
    </div>
    <div class="confirm_unit">
      <div class="confirm_title">予約人数</div>
      <div class="confirm_textbox">大人{{$adult_number}}人:子供{{$child_number}}人</div>
    </div>

    <div class="confirm_unit">
      <div class="confirm_title">チェックイン</div>
      <div class="confirm_textbox">{{$inDate}}</div>
    </div>

    <div class="confirm_unit">
      <div class="confirm_title">チェックアウト</div>
      <div class="confirm_textbox">{{$outDate}}</div>
    </div>

    <div class="confirm_unit">
      <div class="confirm_title">道具レンタル</div>
      @if ($isItemRental === '1')
      <div class="confirm_textbox">あり</div>
      @else
      <div class="confirm_textbox">なし</div>
      @endif
    </div>

    <div class="confirm_unit">
      <div class="confirm_title">車レンタル</div>
      @if ($isCarRental === '1')
      <div class="confirm_textbox">あり</div>
      @else
      <div class="confirm_textbox">なし</div>
      @endif
    </div>
  </div>

  <div class="button_wrap_wide">
    <div>
      <input type="submit" name="予約確定" label for="trigger" class="button_flat_wide"></label>
    </div>
  </div>

</form>

<div class="caution">
  送信ボタンを押すと、ご登録いただいたメールアドレスまたはお電話番号に、24時間以内に確認のお電話をさせていただきます。

</div>

<div class="modal_wrap">
  <input id="trigger" type="checkbox">
  <div class="modal_overlay">
    <label for="trigger" class="modal_trigger"></label>
    <div class="modal_content">
      <label for="trigger" class="close_button">✖️</label>
      <div class="-is_font_title">COMPLETE!</div>
      <div class="pic_unit"><img src="/image/camp_complete_img.png" width=100%></div>
      <div class="-is_font_small">
        予約リクエスト完了。日程と在庫確認の上『レンタル予約確定メール』をお送り致します。メールの案内に沿って「お支払い」ください。<br>楽しいキャンプを♪
      </div>
      <div class="-is_font_middle">LET'S GO CAMPING</div>
      <div class="button_wrap_wide">
        <div><button class="button_flat_wide_white -is_short">

            <div class="before_button"></div>

            <a href="/top_recommend" class="center_button">トップへ</a>

            <div class="next_button">
            </div>
          </button></div>
      </div>
    </div>
  </div>
</div>




<div class="button_wrap_wide">
  <div><button class="button_flat_wide_white ">

      <div class="before_button">
        <i class="material-icons large-size">
          navigate_before
        </i>
      </div>

      <div class="center_button">修正する</div>

      <div class="next_button">
      </div>
    </button></div>
</div>