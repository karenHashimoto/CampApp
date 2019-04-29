<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>ひとつめ</h1>
<div class='no1'>      
    <div>
        <div class='title'>{{$titles1->top_title}}</div>
        <div class='sub_title'>{{$titles1->top_subtitle}}</div>
    </div>
    @foreach($camps1 as $camps1)
    <div>
        <div class='camp_name'>{{$camps1->camp_name}}</div>
        <div class='state'>{{$camps1->state}}</div>
        <div class='city'>{{$camps1->city}}</div>
    </div>
    @endforeach
</div>

<h1>ふたつめ</h1>
<div class='no2'>      
    <div>
        <div class='title'>{{$titles2->top_title}}</div>
        <div class='sub_title'>{{$titles2->top_subtitle}}</div>
    </div>
    @foreach($camps2 as $camps2)
    <div>
        <div class='camp_name'>{{$camps2->camp_name}}</div>
        <div class='state'>{{$camps2->state}}</div>
        <div class='city'>{{$camps2->city}}</div>
    </div>
    @endforeach
</div>

<h1>みっつめ</h1>
<div class='no3'>      
    <div>
        <div class='title'>{{$titles3->top_title}}</div>
        <div class='sub_title'>{{$titles3->top_subtitle}}</div>
    </div>
    @foreach($camps3 as $camps3)
    <div>
        <div class='camp_name'>{{$camps3->camp_name}}</div>
        <div class='state'>{{$camps3->state}}</div>
        <div class='city'>{{$camps3->city}}</div>
    </div>
    @endforeach
</div>



















</body>
</html>