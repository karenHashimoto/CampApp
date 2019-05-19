<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>camcierge</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{ asset('css/people.css') }}"> -->
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
    <div class="panel-body">

        <form action="{{route('people')}}" method="get">
        {{-- <form action="{{ route('people') }}" method="post" name="number"> --}}
            {{ csrf_field()}}
            <div>大人の人数</div>
            <input type="text" name="adlut_child" id="adlut_child">
            <div>子供の人数</div>
            <input type="text" name="child_child" id="child_child">
            <div>
                <input type="hidden" value="{{$camps->id}}" name="camp_id">
            {{-- <button type="submit"><a href="/date/{{$camps->id}}">日にちを予約</a></button></div> --}}
                <button type="submit">日にちを予約</button></div>
        </form>




</body>

</html>