<?php
// استدعاء ملف الاتصال بقاعدة البيانات
require 'db.php';
// فتح جلسه
session_start();

// دالة الشرط للتحقق من ضغط زر login
if(isset($_POST['login'])){

	$email = $_POST['logemail'];
	$pass = $_POST['logpassword'];
	
	
    if($email=="admin@admin"&&$pass=="admin"){
        header("Location:../html/admin.php");
    }
	// تخزين الحقول فى متغيرات

	
	// انشاء استعلام
	// فى هذا الاستعلام استخدمنا الشرط وجود اسم المستخدم وكلمة المرور
	$qu = "select * from data where email = '$email' && password = '$pass'";
	
	// ارسال الاستعلام والتحقق من وجود العضو
	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		// اذا تم وجود النتيجة يتم اضافة اسم العضو فى الجلسه 
		$_SESSION['username'] = $user;
		// ثم يتم الانتقال الى منطقة الاعضاء
		$today=date("m-d");

$query= mysqli_query($con,"SELECT fullname FROM `data` WHERE dateofbirth like '%$today' ");
$datearray =mysqli_fetch_array($query);

if(strpos($datearray,$today)!==false){
    ob_start();
    echo '

<div class="cake">
  <div class="velas">
    <div class="fuego"></div>
    <div class="fuego"></div>
    <div class="fuego"></div>
    <div class="fuego"></div>
    <div class="fuego"></div>
  </div>
  <div class="cobertura"></div>
  <div class="bizcocho"></div>
  <h1>كل سنه وانت طيب وعقبال سنين كتير حلوه مع يسوع</h1>
  <p>'.$datearray[0].'</p>
</div>
<style>
html,
body {
  height: 100%;
}
body {
  background-image: radial-gradient(circle, #a27bcc,#8a6fdf);}
/* ============================================== POSITION
*/
.cake {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -50px;
  margin-top: -50px;
  width: 100px;
  height: 100px;
}
/* ============================================== BASE
*/
.cake:after {
  background: #ebe3e1;
  border-radius: 100px;
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100px;
  height: 2px;
}
/* ============================================== Candle
*/
.velas {
  background: #ffffff;
  border-radius: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -2.5px;
  margin-top: -8.333333333333334px;
  width: 5px;
  height: 16.666666666666668px;
}
.velas:after,
.velas:before {
  background: rgba(255, 0, 0, 0.4);
  content: "";
  position: absolute;
  width: 100%;
  height: 2.2222222222222223px;
}
.velas:after {
  top: 25%;
  left: 0;
}
.velas:before {
  top: 45%;
  left: 0;
}
/* ============================================== Fire
*/
.fuego {
  border-radius: 100%;
  box-shadow: 0 0 40px 10px rgba(248, 233, 209, 0.2);
  position: absolute;
  top: -12px;
  left: 50%;
  margin-left: -3.3333333333333335px;
  width: 6.666666666666667px;
  height: 12.5px;
}
.fuego:nth-child(1) {
  animation: fuego 2s infinite;
}
.fuego:nth-child(2) {
  animation: fuego 1.5s infinite;
}
.fuego:nth-child(3) {
  animation: fuego 1s infinite;
}
.fuego:nth-child(4) {
  animation: fuego 0.5s infinite;
}
.fuego:nth-child(5) {
  animation: fuego 0.2s infinite;
}
/* ============================================== Animation Fire
*/
@keyframes fuego {
  0% {
    background: rgba(254, 248, 97, 0.5);
    transform: translateY(0) scale(1);
  }
  50% {
    background: rgba(255, 50, 0, 0.1);
    transform: translateY(-20px) scale(0);
  }
  100% {
    background: rgba(254, 248, 97, 0.5);
    transform: translateY(0) scale(1);
  }
}
/* ============================================== Frosting
*/
.cobertura {
  background: #ece7e3;
  border-radius: 50px;
  position: absolute;
  top: 60%;
  left: 50%;
  margin-left: -27.77777777777778px;
  margin-top: -5px;
  width: 55.55555555555556px;
  height: 12.5px;
  z-index: 10;
}
.cobertura:after,
.cobertura:before {
  background: #ece7e3;
  border-radius: 100px;
  content: "";
  position: absolute;
  width: 5px;
  height: 10px;
}
.cobertura:after {
  top: 6.666666666666667px;
  right: 14.285714285714286px;
}
.cobertura:before {
  top: 10px;
  right: 9.090909090909092px;
}
/* ============================================== BIZCOCHO
*/
.bizcocho {
  background: #6d3826;
  position: absolute;
  bottom: 0;
  left: 50%;
  margin-left: -25px;
  width: 50px;
  height: 33.333333333333336px;
}
.bizcocho:after,
.bizcocho:before {
  background: rgba(236, 231, 227, 0.6);
  content: "";
  position: absolute;
  width: 100%;
  height: 5px;
}
.bizcocho:after {
  top: 30%;
  left: 0;
}
.bizcocho:before {
  top: 60%;
  left: 0;
}
/* ============================================== TEXT
*/
h1,
p {
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-style: italic;
  text-align: center;
  width: 100%;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
h1 {
  color: #ffdb15;
  font-size: 1em;
  margin-top: 6.8em;
}
p {
  color:#a8e10c;
  font-size: 0.8em;
  line-height: 2em;
}

</style>';
    header("refresh:5;url=https://konmost3ed.000webhostapp.com/html");
    ob_end_flush();
}
		
		        header("Location:https://konmost3ed.000webhostapp.com/html");
	} else {
	ob_start();
		// اذا لم يتم ايجاد اى قيمه 0
		echo '<html><head></head><body style="
    background: #FFDB15;
"><div id="container" style="
    transform: scale(1.5);
    margin-top: 25%;
    margin-left: -12%;
">
  <div id="error-box" style="
    /* margin: 50% 0 0 0; */
">
    <div class="face2">
      <div class="eye"></div>
      <div class="eye right"></div>
      <div class="mouth sad"></div>
    </div>
    <div class="shadow move"></div>
    <div class="message"><h1 class="alert">Error!</h1><h4>اسم المستخدم او كلمه المرور خطا</h4></div>
  </div>
</div>
<style>
body {
	 text-transform: uppercase;
	 text-align: center;
}
 #container {
	 position: relative;
	 margin: auto;
	 overflow: hidden;
	 width: 700px;
	 height: 250px;
}
 h1 {
	 font-size: 0.9em;
	 font-weight: 100;
	 letter-spacing: 3px;
	 padding-top: 5px;
	 color: #fcfcfc;
	 padding-bottom: 5px;
	 text-transform: uppercase;
}
 .green {
	 color: #4ec07d;
}
 .red {
	 color: #e96075;
}
 .alert {
	 font-weight: 700;
	 letter-spacing: 5px;
}
 p {
	 margin-top: -5px;
	 font-size: 0.5em;
	 font-weight: 100;
	 color: #5e5e5e;
	 letter-spacing: 1px;
}
 #error-box {
	 position: absolute;
	 width: 35%;
	 height: 100%;
	 right: 12%;
	 background: linear-gradient(to bottom left, #ef8d9c 40%, #ffc39e 100%);
	 border-radius: 20px;
	 box-shadow: 5px 5px 20px rgba(203, 205, 211, 10);
}
 .dot {
	 width: 8px;
	 height: 8px;
	 background: #fcfcfc;
	 border-radius: 50%;
	 position: absolute;
	 top: 4%;
	 right: 6%;
}
 .dot:hover {
	 background: #c9c9c9;
}
 .two {
	 right: 12%;
	 opacity: 0.5;
}
 .face {
	 position: absolute;
	 width: 22%;
	 height: 22%;
	 background: #fcfcfc;
	 border-radius: 50%;
	 border: 1px solid #777;
	 top: 21%;
	 left: 37.5%;
	 z-index: 2;
	 animation: bounce 1s ease-in infinite;
}
 .face2 {
	 position: absolute;
	 width: 22%;
	 height: 22%;
	 background: #fcfcfc;
	 border-radius: 50%;
	 border: 1px solid #777;
	 top: 21%;
	 left: 37.5%;
	 z-index: 2;
	 animation: roll 3s ease-in-out infinite;
}
 .eye {
	 position: absolute;
	 width: 5px;
	 height: 5px;
	 background: #777;
	 border-radius: 50%;
	 top: 40%;
	 left: 20%;
}
 .right {
	 left: 68%;
}
 .mouth {
	 position: absolute;
	 top: 43%;
	 left: 41%;
	 width: 7px;
	 height: 7px;
	 border-radius: 50%;
}
 .happy {
	 border: 2px solid;
	 border-color: transparent #777 #777 transparent;
	 transform: rotate(45deg);
}
 .sad {
	 top: 49%;
	 border: 2px solid;
	 border-color: #777 transparent transparent #777;
	 transform: rotate(45deg);
}
 .shadow {
	 position: absolute;
	 width: 21%;
	 height: 3%;
	 opacity: 0.5;
	 background: #777;
	 left: 40%;
	 top: 43%;
	 border-radius: 50%;
	 z-index: 1;
}
 .scale {
	 animation: scale 1s ease-in infinite;
}
 .move {
	 animation: move 3s ease-in-out infinite;
}
 .message {
	 position: absolute;
	 width: 100%;
	 text-align: center;
	 height: 40%;
	 top: 47%;
}
 .button-box {
	 position: absolute;
	 background: #fcfcfc;
	 width: 50%;
	 height: 15%;
	 border-radius: 20px;
	 top: 73%;
	 left: 25%;
	 outline: 0;
	 border: none;
	 box-shadow: 2px 2px 10px rgba(119, 119, 119, .5);
	 transition: all 0.5s ease-in-out;
}
 .button-box:hover {
	 background: #efefef;
	 transform: scale(1.05);
	 transition: all 0.3s ease-in-out;
}
 @keyframes bounce {
	 50% {
		 transform: translateY(-10px);
	}
}
 @keyframes scale {
	 50% {
		 transform: scale(0.9);
	}
}
 @keyframes roll {
	 0% {
		 transform: rotate(0deg);
		 left: 25%;
	}
	 50% {
		 left: 60%;
		 transform: rotate(168deg);
	}
	 100% {
		 transform: rotate(0deg);
		 left: 25%;
	}
}
 @keyframes move {
	 0% {
		 left: 25%;
	}
	 50% {
		 left: 60%;
	}
	 100% {
		 left: 25%;
	}
}
 footer {
	 position: absolute;
	 bottom: 0;
	 right: 0;
	 text-align: center;
	 font-size: 1em;
	 text-transform: uppercase;
	 padding: 10px;
}
 footer p {
	 color: #ef8d9c;
	 letter-spacing: 2px;
}
 footer a {
	 color: #b0db7d;
	 text-decoration: none;
}
 footer a:hover {
	 color: #ffc39e;
}
 
</style></body></html>';

header("refresh:4;url=https://konmost3ed.000webhostapp.com");
ob_flush();
	}
}
?>