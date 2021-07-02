<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Preview</title>
</head>
<body>
    @foreach($result as $r)
       <p>Id: {{ $r->Id }}</p>
       <p>Name: {{ $r->Name }} </p>
       <p>Email: {{ $r->Email }} </p>
       <p>Phone: {{ $r->Phone }} </p>
    @endforeach
    {{-- <a href="<?php //echo url('pnt/about/form')?>">Back</a> --}}
    <a href="{{ route('about.form') }}">Back</a>
</body>
</html>