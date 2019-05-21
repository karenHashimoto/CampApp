<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>道具の予約いりますか？</div>

    <form action="{{url('/rental_car/'.$camps->id.$adlut_number.$child_number.$inDate.$outDate )}}" mathod="get">
        {{ csrf_field()}}
        <input type="submit" class="button_flat" value="はい">
    </form>

    <form action="{{url('/rental_car/'.$camps->id.$adlut_number.$child_number.$child_number.$inDate.$outDate )}}" mathod="get">
        {{ csrf_field()}}
        <input type="submit" class="button_flat" value="いいえ">
    </form>




    <input type="hidden" name="camp_id" value={{$camps->id}}>
    <input type="hidden" name="adlut_number" value={{$adlut_number}}>
    <input type="hidden" name="child_number" value={{$child_number}}>
    <div>大人：{{$adlut_number}}人</div>
    <div>小人：{{$child_number}}人</div>
    <div>チェックイン：{{$inDate}}</div>
    <div>チェックアウト：{{$outDate}}</div>

</body>

</html>