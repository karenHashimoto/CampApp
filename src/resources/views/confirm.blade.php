<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <input type="hidden" name="camp_id" value="{{$camps->id}}">
    <input type="hidden" name="adlut_number" value="{{$adlut_number}}">
    <input type="hidden" name="child_number" value="{{$child_number}}">
    <input type="hidden" name="inDate" value="{{$inDate}}">
    <input type="hidden" name="outDate" value="{{$outDate}}">
    <input type="hidden" name="isItemRental" value="{{$isItemRental}}">


    <div>予約確認</div>
    <div>大人の人数：{{$adlut_number}}</div>
    <div>こどもの人数：{{$child_number}}</div>
    <div>チェックイン：{{$inDate}}</div>
    <div>チェックアウト：{{$outDate}}</div>
    <div>道具レンタル：{{$isItemRental}}</div>
    <div>車レンタル：{{$isCarRental}}</div>


</body>

</html>