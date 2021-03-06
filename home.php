<?php
include "config.php";
class home {
    public $nama;
    public $email;
    public $kendaraan;

    public function getNama() {
        $mysqli=new mysqli('localhost', 'root', 'alohomora73', 'motobuddies');
        $get = $mysqli->query("SELECT * FROM nama_user WHERE email = '$email'"); 
        while($x= mysqli_fetch_assoc($get)){
            array_push($this->hasil, $x); 
        }
        return $this->hasil;
    } 

    public function getKendaraan() {
        $mysqli=new mysqli('localhost', 'root', '', 'motobuddies');
        $get = $mysqli->query("SELECT * FROM kendaraan WHERE email = '$email'"); 
        while($x= mysqli_fetch_assoc($get)){
            array_push($this->hasil, $x); 
        }
        return $this->hasil;
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Menu Utama | MotoBuddies</title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <div class="wrapper">
      <section class="header fixed-top text-light">
        <div class="row g-1 justify-content-center">
          <div class="col-3" style="width: 85px; height: 85px; left: 36px;">
            <img src="langit.png" style="padding-top: 70px;">
          </div>
          <div class="col-8">
            <div class="card-body" style="padding-top: 64px;">
            <div class="card-title" style="font-size: 24px;">Hi, <strong>Langit!</strong></div>
            <div class="card-text" style="font-size: 16px;">Mobil anda</div>
            <div class="card-text"> INOVA N 2503 SK</div>
            </div>
          </div>
          <button class="card shadow-sm" style="border-radius: 15px; width: 343px; height: 55px;">
            <div class="card-body ps-4">
            <p class="card-text" style="font-size:12px; font-weight: 600;">Anda tidak memiliki jadwal pemesanan hari ini</p>
            </div>
          </button>
        </div>
      </section>
      <section class="opsi">
        <form action="booking.html">
        <button class="card mb-4 mx-auto" style="border-radius: 10px; width: 304px; height: 100px;">
          <div class="card-body shadow-sm">
          <h5 class="card-title" style="font-size: 24px;">Booking Service</h5>
          <p class="card-text fst-italic" style="font-size: 10px;">Hindari menunggu lama, datang langsung layani. Lakukan pemesanan terkait waktu servis Anda.</p>
          </div>
        </button>
        </form>
    
        <form action="FAQ.html">
        <button class="card mb-4 mx-auto" style="border-radius: 10px; width: 304px; height: 100px;">
          <div class="card-body shadow-sm">
          <h5 class="card-title" style="font-size: 24px;">FAQ</h5>
          <p class="card-text fst-italic" style="font-size: 10px;">Frequently Asked Questions.</p>
          </div>
        </button>
        </form>
    
        <form action="rekom.html">
        <button class="card mb-4 mx-auto" style="border-radius: 10px; width: 304px; height: 100px;">
          <div class="card-body shadow-sm">
          <h5 class="card-title" style="font-size: 24px;">Tips and Trick</h5>
          <p class="card-text fst-italic" style="font-size: 10px;">Temukan cara-cara menarik untuk merawat kendaraan Anda.</p>
          </div>
        </button>
        </form>
    
        <form action="rekom.html">
        <button class="card mb-4 mx-auto" style="border-radius: 10px; width: 304px; height: 100px;">
          <div class="card-body shadow-sm">
          <h5 class="card-title" style="font-size: 24px;">Recommendation</h5>
          <p class="card-text fst-italic" style="font-size: 10px;">Rekomendasi terkait jadwal servis terbaik menurut riwayat transaksi Anda.</p>
          </div>
        </button>
        </form>
      </section>
      <section class="bottombar fixed-bottom">
        <div class="justify-content-center row pt-2">
          <div class="col-2 d-flex justify-content-center">
            <a href="home.php"><i class="bi bi-house-door-fill" style="color: #C83E4D; font-size: 25px"></i></a>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <a href="pemesanan.html"><i class="bi bi-journal-text" style="color: #F4D6CC; font-size: 25px"></i></a>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <a href="chat.html"><img src="logox.png" style="height: 25px; width: 25px; margin-top: 5px;"></a>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <a href="notif.php"><i class="bi bi-bell-fill" style="color: #F4D6CC; font-size: 25px"></i></a>
          </div>
          <div class="col-2 d-flex justify-content-center">
            <a href="profile.html"><i class="bi bi-person-circle" style="color: #F4D6CC; font-size: 25px"></i></a>
          </div>
        </div>
      </section>
    </div>
    <script src="javascript/chat.js"></script>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}
body{
  margin:0 auto;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #f7f7f7;
  width: 390px; height: 844px;
}
.wrapper{
  background: #fff;
  max-width: 450px;
  width: 100%;
  border-radius: 16px;
  box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
}
.header{
  position: static;
  background: #C83E4D;
  align-items: center;
  width: 390px;
  height: 207.51px;
  border-radius: 0px 0px 30px 30px;
}
.opsi{
  margin-top: 52px;
}
.bottombar{
  position: static;
  width: 390px; 
  height: 58px; 
  background-color: #FFFFFF; 
  border-radius: 25px 25px 0px 0px; 
  box-shadow: 0px -1px 10px rgba(0, 0, 0, 0.08);
}
</style>
</html>
