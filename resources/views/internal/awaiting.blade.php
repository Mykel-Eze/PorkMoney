<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PorkMoney</title>
    <link rel="shortcut icon" href=" favicon.png">

    <link href="css/fonts.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/materialize.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/styles.css" media="screen" rel="stylesheet" type="text/css">

    <style>
        body{
            height: 100vh;
            position: relative;
        }
        body::before{
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.2;
            background: url("img/doodles.png");
            background-size: 30%;
        }
        img{
            width: 30%;
        }
        .content-wrapper{
            top: 15%;
            position: relative;
        }
        @media(max-width: 991px){
            img{
                width: 70%;
            }
            .content-wrapper h3{
                font-size: 1.92rem;
            }
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        <div class="center">
           <a href="{{url('/')}}"> <img src="img/logo-black.png" alt="logo">   </a>
        </div>

        <h3 class="text-uppercase center">Application in view....You will be on the waiting list</h3>
    </div>
</body>
</html>