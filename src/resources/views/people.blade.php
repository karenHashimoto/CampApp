<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>camcierge</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
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
    <div class="cg_img"><img src="/image/camps_img/{{$camps->camp_img}}" width="200" height="150"></div>
    <div class="plan_comment">{{$camps->plan_comment}}</div>
    <div class="plan_name">{{$camps->plan_name}}</div>


    {{-- <form action="/date/{{$camps->id}}" method="get"> --}}
    <form action="{{url('/date' )}}" method="post">
        {{-- <form action="{{ route('people') }}" method="post" name="number"> --}}
        {{ csrf_field()}}
        {{-- <div>大人の人数</div>
        <input type="text" name="adlut_number" id="adlut_number">
        <div>子供の人数</div>
        <input type="text" name="child_number" id="child_number">
        <div>
            <input type="submit" class="button_flat"> --}}

        <div>大人の人数</div>
        <select name="adlut_number">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <div>小人の人数</div>
        <select name="child_number">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <input type="hidden" name="camp_id" value={{$camps->id}}>
        <input type="submit" class="button_flat">


        {{-- <button type="submit"><a href="/date/{{$camps->id}}">日にちを予約</a></button></div> --}}
        {{-- <button type="submit"><a href="/date/{{$camps->id}}">日にちの確認へ進む</button> --}}

    </form>




</body>

</html>