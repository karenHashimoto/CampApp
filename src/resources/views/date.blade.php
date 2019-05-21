<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>キャンプ場日にち予約 </title>
</head>

<body>

    <div class="header_fixed">
        <div class="header">camcierge</div>
    </div>
    <div class="tab">
        <div class="top_var">一括予約<br>
            キャンシェルジュのキャンプ場予約
        </div>
    </div>

    <div class="camp_id">{{$camps->camp_name}}</div>
    <div class="camp_area">（{{$camps->state}}/
        {{$camps->city}})</div>
    <div class="cg_img"><img src="/image/camps_img/{{$camps->camp_img}}" width="200" height="150"></div>
    <div class="plan_comment">{{$camps->plan_comment}}</div>
    <div class="plan_name">{{$camps->plan_name}}</div>
    <div>ご予約人数</div>
    <div>大人：{{$adlut_number}}人</div>
    <div>小人：{{$child_number}}人</div>

    <form action="{{url('/rental_item/'.$camps->id.$adlut_number.$child_number )}}" mathod="get">
        {{ csrf_field()}}
        <label>チェックイン</label>
        <input type="text" name="inDate" id="inDate"><br>

        <label>チェックアウト</label>
        <input type="text" name="outDate" id="outDate">
        <input type="hidden" name="camp_id" value={{$camps->id}}>
        <input type="hidden" name="adlut_number" value={{$adlut_number}}>
        <input type="hidden" name="child_number" value={{$child_number}}>


        <input type="submit" class="button_flat" value="選択した日付で予約する">
    </form>



    <script>
        < script src = "https://code.jquery.com/jquery-3.3.1.min.js" >
    </script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/hot-sneaks/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/hot-sneaks/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>



    <script type="text/javascript">
        $(function() {
            $("#inDate").datepicker({
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function(pDate) {
                    $("#outDate").datepicker("option", "minDate", pDate);
                }
            });
            $("#outDate").datepicker({
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function(pDate) {
                    $("#inDate").datepicker("option", "maxDate", pDate);
                }
            });
        });
    </script>
</body>

</html>