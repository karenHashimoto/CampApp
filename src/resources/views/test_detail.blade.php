<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Test_detail</title>
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>

<body>



    <div>
        
    <p>キャンプ場名</p><td>{{$camps->camp_name}}</td>
    <p>キャンプ場見出し</p><td>{{$camps->cg_title}}</td>
    <p>キャンプ場サブ見出し</p><td>{{$camps->cg_subtitle}}</td>
    <p>おすすめ1(先頭にマテリアルアイコンリンク)</p><td>{{$camps->reco_text1}}</td>
    <p>おすすめ2(先頭にマテリアルアイコンリンク)</p><td>{{$camps->reco_text2}}</td>
    <p>おすすめ3(先頭にマテリアルアイコンリンク)</p><td>{{$camps->reco_text3}}</td>
    <p>住所　都道府県</p><td>{{$camps->state}}</td>
    <p>住所　市町村</p><td>{{$camps->city}}</td>
    <p>住所　番地</p><td>{{$camps->address}}</td>
    <p>電話番号</p><td>{{$camps->phone}}</td>
    <p>地図</p><td>{{$camps->map_link}}</td>
    <p>アクセス方法コメント</p><td>{{$camps->access_comment}}</td>
    <p>オーナー名</p><td>{{$camps->owner_name}}</td>
    <p>オーナー画像</p><td>{{$camps->owner_pic}}</td>
    <p>オーナー画像</p><td><img src="/image/owner/{{$camps->owner_pic}}"></td>
    <p>オーナー情報</p><td>{{$camps->owner_comment}}</td>
    <p>プラン名</p><td>{{$camps->plan_name}}</td>
    <p>プラン名に対するコメント</p><td>{{$camps->plan_comment}}</td>
    <p>プラン金額</p><td>{{$camps->plan_fee}}</td>
    <p>最大人数</p><td>{{$camps->max_people}}</td>

    @foreach($camps->points as $point)
        <div class='city'><img src="/image/point/{{$point->point_masters->path}}"></div>
        <div class='city'>{{$point->point_masters->point_comment}}</div>
    @endforeach

    @foreach($camps->cg_pictures as $cg_picture)
        <div class='city'><img src="/image/camps_img/{{$cg_picture->cg_picture_masters->path}}"></div>
    @endforeach



    





    






    <div>設備</div>
    


    





   
   
    
        
        
        
















    </div>





</body>

</html>