<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2 style = "color: rgba(51,122,183, 1); font-size: 24px">iPub</h2>
        <p> {{ $user->name }} wants to be followed by you on iPub. </p>
        <p> To know more about {{ $user->name }} on iPub, visit <a href="#">link</a> </p>
        <p> Click on the button below to accept this request </p>
        <p>
            <a href="{{ url('/follow/agree/'.$user->id.'/'.$user->name.'/'.$email) }}" class = "btn btn-primary" title = 'By clicking this link, you agree to follow {{ $user->name }} on iPub'> I Agree </a>
        </p>
    </body>
</html>
