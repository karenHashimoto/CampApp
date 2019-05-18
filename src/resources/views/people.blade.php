<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>camcierge</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/people.css') }}">
</head>

<body>
    <div class="header_fixed">
        <div class="header">camcierge</div>
    </div>
    <div class="tab">
        <div class="top_var">一括予約
            キャンシェルジュのキャンプ場予約
        </div>
    </div>

    <div class="camp_id">{{$camps->camp_name}}</div>
    <div class="camp_area">（{{$camps->state}}/
        {{$camps->city}})</div>
    <div class="cg_img">cg_img</div>
    <div class="plan_comment">{{$camps->plan_comment}}</div>
    <div class="plan_name">{{$camps->plan_name}}</div>


    大人の人数
    <form>
        <select name="adlut_number">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </form>
    小人の人数
    <form>
        <select name="child_number">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </form>
    合計人数○○人

    <div class="btn">日時の選択へ進む</div>
</body>

</html>