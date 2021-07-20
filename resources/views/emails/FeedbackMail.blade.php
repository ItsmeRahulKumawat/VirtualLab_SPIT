<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Mail</title>
</head>

<body>
    <h1>{{$details['title']}}</h1>
    <br>
    <h2>{{$details['name']}}</h2>
    <h3 style="color:#cc0f0f">{{$details['feedback']}}</h3>
    <br>
    <div class="col-lg-2 d-block m-auto">
        <a href="http://127.0.0.1:8000/admindash"><input class ="btnn" type="button" style="border:none; border-radius:10px ;color:white;font-size:20px ;background-color:green; width: 100px; height: 40px" value="Approve"></a>
        <a href="http://127.0.0.1:8000/admindash"><input class ="btnn" type="button" style="border:none; border-radius:10px ;color:white;font-size:20px ;background-color:#cc0f0f;margin-left:10px; width: 100px; height: 40px" value="Delete"></a>
    </div>
    <br>
    <b>ThankYou</b>
</body>
</html>