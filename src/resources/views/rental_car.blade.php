<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <div>レンタカーは必要ですか？</div>
    <form action="{{url('/confirm/' )}}" method="post">
        {{ csrf_field()}}
        <input type="submit" class="button_flat" value="はい" name="car_yes">
        <input type="submit" class="button_flat" value="いいえ" name="car_no">

        <input type="hidden" name="camp_id" value="{{$camps->id}}">
        <input type="hidden" name="adlut_number" value="{{$adlut_number}}">
        <input type="hidden" name="child_number" value="{{$child_number}}">
        <input type="hidden" name="inDate" value="{{$inDate}}">
        <input type="hidden" name="outDate" value="{{$outDate}}">
        <input type="hidden" name="isItemRental" value="{{$isItemRental}}">
    </form>




</body>

</html>