<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test_detail</title>
</head>

<body>

    @extends('layouts.app')
    @section('content')
    <p>タイトル：{{ $title }}</p>
    <p>詳細内容：{{ $content }}</p>
    <p>ユーザID：{{ $user_id }}</p>
    @endsection




</body>

</html>