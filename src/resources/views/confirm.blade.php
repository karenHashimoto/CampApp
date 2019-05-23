<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/confirm.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto|Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBunFa8M5cUXVfE2ewS5ZCueUIh-AxtB5Y&language=ja"></script>


    <title>Document</title>
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
    <div class="reserve_band">一括予約</div>
    <div class="stepper_wrap">
        <div class="stepper">
            <div class="circle">
                <div class="circle-inner">90%</div>
            </div>
        </div>
        <div class="purpose_unit">
            <div class="purpose">予約内容の確認</div>
            <div class="purpose_next">もうすぐ予約完了</div>
        </div>
    </div>


    <div class="confirm_area">
        <div class="confirm_unit">
            <div class="confirm_title">予約人数</div>
            <div class="confirm_textbox">大人{{$adlut_number}}人:子供{{$child_number}}人</div>
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
        <div><button class="button_flat_wide">

                <div class="before_button">
                </div>

                <div class="center_button">予約確定</div>

                <div class="next_button">
                    <a href="◯◯" class="button_color_white"><i class="material-icons large-size">
                            navigate_next
                        </i> </a>
                </div>
            </button></div>
    </div>
    <div class="button_wrap_wide">
        <div><button class="button_flat_wide_white">

                <div class="before_button">
                </div>

                <div class="center_button">修正する</div>

                <div class="next_button">
                </div>
            </button></div>
    </div>

    <div class="hidden">
        <input type="hidden" name="camp_id" value="{{$camps->id}}">
        <input type="hidden" name="adlut_number" value="{{$adlut_number}}">
        <input type="hidden" name="child_number" value="{{$child_number}}">
        <input type="hidden" name="inDate" value="{{$inDate}}">
        <input type="hidden" name="outDate" value="{{$outDate}}">
        <input type="hidden" name="isItemRental" value="{{$isItemRental}}">
    </div>





















    <input type="hidden" name="camp_id" value="{{$camps->id}}">
    <input type="hidden" name="adlut_number" value="{{$adlut_number}}">
    <input type="hidden" name="child_number" value="{{$child_number}}">
    <input type="hidden" name="inDate" value="{{$inDate}}">
    <input type="hidden" name="outDate" value="{{$outDate}}">
    <input type="hidden" name="isItemRental" value="{{$isItemRental}}">
</body>

</html>