<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Form</title>
</head>
<body>
    <h1>About Form</h1>
    
    {{-- <form action="<?php //echo url('/preview') ?>" method="post"> --}}
    <form action="{{ route('preview') }}" method="post">
       {{-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> --}}
       @csrf
       <input type="text" name="full_name" placeholder="Entre Your Name">
       <br><br>
       <input type="text" name="email_address" placeholder="Entre Your Email">
       <br><br>
       <input type="text" name="phone_number" placeholder="Entre Your Phone">
       <br><br>
       <button>Preview</button>
    </form>
</body>
</html>