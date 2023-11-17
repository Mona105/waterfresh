<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>


{!! Session::has('msg') ? Session::get("msg") : '' !!}

    <form action="user-details-save" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="tel" name="contact" placeholder="Contact">
        <input type="submit" value="Submit">
    </form>
</body>
</html>