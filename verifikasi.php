<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" /><link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />

    <style>
        *{
            box-sizing: border-box;
        }
        body{
            font-size: 14px;
            font-style: normal;
        }
        .v1{
            position: relative;
            width: 375px;
            height: 812px;
            left: 0px;
            top: 0px;
            opacity: 1;
            overflow: hidden;

            background: #FFF6F6;
        }
        .img{
            position: absolute;
            width: 40px;
            height: 40px;
            left: 27px;
            top: 64px;
        }
        .awal{
            position: absolute;
            width: 218px;
            height: 59px;
            left: 32px;
            top: 133px;

            font-family: 'Roboto';
            font-weight: 900;
            font-size: 50px;
            line-height: 59px;

            color: #C83E4D;
        }
        .sub{
            position: absolute;
            width: 309px;
            height: 21px;
            left: 33px;
            top: 201px;

            font-family: 'Poppins';
            font-weight: 400;
            font-size: 14px;
            line-height: 21px;

            color: #414141;
        }
        .email{
            position: absolute;
            width: 200px;
            height: 24px;
            left: 95px;
            top: 222px;

            font-family: 'Poppins';
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;

            color: #414141;
        }
        .countdown{
            position: absolute;
            width: 150px;
            height: 18px;
            left: 115px;
            top: 358px;

            font-family: 'Roboto';
            font-weight: 300;
            font-size: 15px;
            line-height: 18px;

            color: #3C3939;
        }
        .verif{
            display: flex;
            justify-content: center;
            position: absolute;
            top: 276px;
            margin-left: 42px;
        }
        .verif input{
            margin-right: 13px;
            width: 60px;
            height: 60px;
            background: #F4D6CC;
            border-radius: 10px;
            border: none;
            color: #C83E4D;
            font-family: 'Roboto';
            font-weight: 900;
            font-size: 45px;
            line-height: 53px;
        }
        .btn-kirim{
            margin-left: 14.48px;
            margin-top: 400px;
            width: 90%;
            padding: 10px;
            color: white;
            background-color: #C83E4D;
            border-radius: 10px;
            font-size: 17px;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            border: none;
        }
        .btn-kirim:hover{
            background: #D35562;
        }
    </style>

    <title>Verification Page | MotoBuddies</title>
  </head>
  <body>
    <div class="v1">
        <img src="arrow-left-circle.svg" alt="back button" class="img" onclick="window.location.href='register2.html'">
        <p class="awal">Verifikasi</p>
        <p class="sub">Silahkan masukkan kode yang kami kirim ke</p>
        <p class="email"><strong><?php session_start(); echo $_SESSION["email"];?></p>
        <div class="verif">
            <input type="text" maxlength="1" id="first" onkeyup="clickEvent(this, 'sec')">
            <input type="text" maxlength="1" id="sec" onkeyup="clickEvent(this, 'third')">
            <input type="text" maxlength="1" id="third" onkeyup="clickEvent(this, 'fourth')">
            <input type="text" maxlength="1" id="fourth">
        </div>
        <div class="countdown">
            <p>Kirim ulang kode <span id="countdown">60</span></p>
            <script>
                var count = 60;

                setInterval(function () {
                    count--;

                    if(count >= 0){
                        counter = document.getElementById("countdown");
                        counter.innerHTML = count;
                    }
                }, 1000);
            </script>
        </div>
        <input type="submit" name="kirim" class="btn-kirim" value="KIRIM" onclick="window.location.href='menu_utama.html'"> 
    </div>
    <script type="text/javascript">
        function clickEvent(first, last){
            if(first.value.length){
                document.getElementById(last).focus();
            }
        }
    </script>
  </body>
</html>