<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        {!! Form::open(['url' => 'number/complete', 'method' => 'post']) !!}
        <div class="form-group">
            {!! Form::label('nicname', 'ニックネーム: '. $data["nicname"]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'メールアドレス: '. $data["email"]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit("Send", ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>

</body>

</html>