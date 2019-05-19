<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- <div class="container">
        {!! Form::open(array('files' => true)) !!}
        <div class="form-group">
            {!! Form::label('nicname', 'ニックネーム:') !!}
            {!! Form::text('nicname', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'メールアドレス:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit("Send", ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div> -->

    <div class="container">
        <form method="POST" action="">
            <p>大人の人数</p>
            <select name="adult_number" id="adult_number">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <p>子供の人数</p>
            <select name="child_number" id="child_number">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input type="submit" value="送信">

        </form>

        <div>{{ $adult_number->adult_number }}</div>
        <div>{{ $child_number->child_number }}</div>

    </div>


</body>

</html>