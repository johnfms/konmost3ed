<!DOCTYPE html>
<html lang="en">
<head>
  

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" type = "image/png" href = "name-of-image.png">
    <link rel="stylesheet" href="../css/index.css">
    <title>الصفحه رئيسيه</title>
    <link rel = "icon" type = "image/png" href = "../img/group logo.jpg">
</head>
<body>
    
    <!--start nav bar-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i></label>
        <div class="divtext">
            <img src="../img/scout.jpg" alt="لوجو فتيان">
            <img src="../img/group logo.jpg" alt="لوجو مجموعه ماربولس الكشفيه">
            <img src="../img/mot logo.jpg" alt="لوجو فريق متقدم ">
            <br>
        <label class="navtext">مجموعه مار بولس الكشفيه
            <br>
            <span>قطاع متقدم</span>
          </label>
        </div>
        <ul>
          <li><button onclick="Function1()" id="1" class="active">الرئيسيه</button></li>
          <li><button onclick="Function2()" id="2" >الاخبار</button></li>
          <li><button onclick="Function3()" id="3" >المحاضرات</button></li>
          <li><button onclick="Function4()" id="4" >حفله الوعد</button></li>          
          <li style="" ><button onclick="Function5()" id="5"  >فك شفرة </button></li>          

        </ul>
      </nav>
<section id="s1">

<div class="new" data-gr-c-s-loaded="true">
  <div class="outer">
    <div class="conco">
      <div class="inner">


<div class="item">
          <div class="c" style="
    width: 821px;
    height: 410px;
    background:#8a6edf;
">
            <img src="../img/1.jpg" style="
">
            <h6 style="text-align: center;">
                كشاف
            </h6>
          </div>
        </div>

<div class="item">
          <div class="c" style="
    width: 821px;
    height: 410px;
    background:#8a6edf;
">
            <img src="../img/2.jpg" style="
">
            <h6 style="text-align: center;">
                متقدم
            </h6>
          </div>
        </div>



<div class="item">
          <div class="c" style="
    width: 821px;
    height: 410px;
    background:#8a6edf;
">
            <img src="../img/3.jpg" style="
">
            <h6 style="text-align: center;">
                كن مستعد
            </h6>
          </div>
        </div>

<?php
require "../php/db.php";
$sql = "SELECT * FROM `code`;";
$result=mysqli_query($con,$sql);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo $row["intro"] ;

}} else { echo " "; }
?>

 </div>
     </div>
   </div>
</div>
</div>
</section>
<!----------END MAIN SECTIOM---------->
<!----------START NEWS SECTIOM---------->
<section id="s2">
<?php
require "../php/db.php";
$sql = "SELECT * FROM `code`;";
$result=mysqli_query($con,$sql);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo $row["news"] ;

}} else { echo " "; }
?>


<figure class="snip1527" style="height: 200px;">
  <div class="image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfnba9GGu08x2pQxIWg10zGJNdnJ25sXxnZQ&amp;usqp=CAU"></div>
  <figcaption>
    <div class="date"><span class="day">28</span><span class="month">May</span></div>
    <h3>رحله خلويه</h3>
    <p>
يوم الجمعه سنذهب فريق متقدم الي رحله خلويه في كنيسه العذراء بالمعادي
    </p>
  </figcaption>
</figure>

</section>
<!----------END NEWS SECTIOM---------->
<!----------START droos SECTIOM---------->
<section id="s3">
<?php
require "../php/db.php";
$sql = "SELECT * FROM `code`;";
$result=mysqli_query($con,$sql);
$resultcheck = mysqli_num_rows($result);
if ($resultcheck > 0) {
while($row = mysqli_fetch_assoc($result)) {
echo $row["droos"] ;

}} else { echo " "; }
?>
  </section>
<!----------END droos SECTIOM---------->
<!----------START azr SECTIOM---------->
<section id="s4">
  <div class="form" id="loginform">
    <h2> حجز كرسي لحفله الوعد </h2>
    <form method="POST">
      <p class="email">
          <label for="email">الاسم <span>*</span>
          </label>
          <input class="input" required="" type="textbox" id="email" name="name">
      </p>
      <div style="display:flex;">
      <p class="password">
          <label for="password">رقم التليفون <span>*</span></label>
          <input class="input" required="" type="textbox" id="password" name="phone">
      </p>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <p class="email">
          <label for="email">عدد الكراسي <span>*</span>
          </label>
          <input class="input" required="" type="textbox" id="email" name="krs">
      </p>
</div>

      <p class="login">
        <input type="submit" name="go" value=" احجز الان">
      </p>
    </form>
</div>
</section>

<?php
require '../php/db.php';
// هنا اضفنا دالة الشرط للتحقق من ضغط زر signup
if(isset($_POST['go'])){
  $name = $_POST['name'];
	$phone = $_POST['phone'];
	$nfr = $_POST['krs'];
  $qu = "INSERT INTO hafla VALUES ('$name','$phone','$nfr')";

  if ($con->query($qu) === TRUE) {
	    ob_start();
header("refresh:4;url=https://konmost3ed.000webhostapp.com/html");
ob_flush();
} else {
  echo "Error: " . $qu . "<br>" . $con->error;
}}
  
  ?>
<!----------end azr SECTIOM---------->
<section id="s5">
    <style>
    .box *{
        margin:5px;
    }
  .box{
    transform: scale(1.3);
    background: #A8E10C;
    border: 2px solid #8A6FDF;
    color: #636363;
    width: 300px;
    border-radius: 4px;
    margin: 150px auto;
    padding: 20px 30px;
    height: 400px;
    overflow: hidden;
  }
  @media (max-width: 500px) {
  .box {
    transform: scale(1);
  }
}
@media (max-width: 370px) {
  .box {
    transform: scale(.8);
  }
}
</style>
<div class="text-center my-wrap pt-5 pb-5 box" >

  <h1 class="h3 mb-3 font-weight-bold text-uppercase" style=" color: #ff5765">
    الشفره الرقميه
  </h1>
  <p>ضع مسافه بعد كل رقم و - لبدايه كلمه جديده</p>
  <div class="custom-form">

    <div class="custom-form-label">

      <label for="userid">الشفره</label>

    </div>

    <textarea type="text" id="arkam" class="custom-form-control" placeholder=""></textarea>

  </div>

  <div class="custom-form">

    <div class="custom-form-label">

      <label for="password">الحل</label>

    </div>

    <textarea type="text" class="custom-form-control" id="done" style="direction: rtl;"></textarea>

  </div>
  <button onclick="solve()" style="" class="qwe">حول</button>
</div>

<style>
  .qwe{
    display: block;
  color: #5a3b5d;
  font-weight: bold;
  background: #FFDB15;
  box-shadow: 5px 5px 0 0 #ff5765, inset 4px 4px 0 0 #ffdb15;
  border: 2px solid #5a3b5d;
  border-radius: 3px;
  padding: 10px;
  width: 20%;
  margin: 0 auto;
  transition: background .3s;
  height: 14%;
  }
  .qwe:hover{background: #ff5765;
    box-shadow: 5px 5px 0 0 #ffdb15, inset 4px 4px 0 0 #ff5765;}
body{
  background: #FFDB15;
}
:root

  {

    --e_blue: #16569a;

    --e_light: #FAFAFA;

  }

  html {
    text-align: center;
  }

  .my-wrap {

    font-family: 'Poppins', sans-serif;

  }

  .custom-form

  {

    position: relative;

    margin-bottom: 1rem;

  }

  .custom-form > .custom-form-label > label

  {

    position: relative;

    padding: 0.2rem 1.5rem;

    text-align: center;

    font-size: 60%;

    margin-bottom: 0;

  }

  .custom-form > .custom-form-label > label

  {

    color: #fff;

    background:#8a6fdf;

  }

  .custom-form > .custom-form-label > label::before

  {

    top: 4px;

    left: -12px;

    border-radius: 6px 0 0 0;

    transform: rotate(35deg);

    background: linear-gradient(145deg, var(--e_blue) 56%, #ffffff00 50%);

  }


</style>
<script>
function solve(){
var arkam = document.getElementById("arkam").value;
var shafrarkm = arkam;

shafrarkm = shafrarkm.split(" ");
console.log(shafrarkm);

for (i = 0; i < shafrarkm.length; i++) {
if(shafrarkm[i]=="1"){
shafrarkm[i]="ا"
}

if(shafrarkm[i]=="2"){
shafrarkm[i]="ب"
}

if(shafrarkm[i]=="3"){
shafrarkm[i]="ت"
}

if(shafrarkm[i]=="4"){
shafrarkm[i]="ث"
}

if(shafrarkm[i]=="5"){
shafrarkm[i]="ج"
}

if(shafrarkm[i]=="6"){
shafrarkm[i]="ح"
}

if(shafrarkm[i]=="7"){
shafrarkm[i]="خ"
}

if(shafrarkm[i]=="8"){
shafrarkm[i]="د"
}

if(shafrarkm[i]=="9"){
shafrarkm[i]="ذ"
}

if(shafrarkm[i]=="10"){
shafrarkm[i]="ر"
}

if(shafrarkm[i]=="11"){
shafrarkm[i]="ز"
}

if(shafrarkm[i]=="12"){
shafrarkm[i]="س"
}

if(shafrarkm[i]=="13"){
shafrarkm[i]="ش"
}

if(shafrarkm[i]=="14"){
shafrarkm[i]="ص"
}

if(shafrarkm[i]=="15"){
shafrarkm[i]="ض"
}

if(shafrarkm[i]=="16"){
shafrarkm[i]="ط"
}

if(shafrarkm[i]=="17"){
shafrarkm[i]="ظ"
}

if(shafrarkm[i]=="18"){
shafrarkm[i]="ع"
}

if(shafrarkm[i]=="19"){
shafrarkm[i]="غ"
}

if(shafrarkm[i]=="20"){
shafrarkm[i]="ف"
}

if(shafrarkm[i]=="21"){
shafrarkm[i]="ق"
}

if(shafrarkm[i]=="22"){
shafrarkm[i]="ك"
}

if(shafrarkm[i]=="23"){
shafrarkm[i]="ل"
}

if(shafrarkm[i]=="24"){
shafrarkm[i]="م"
}

if(shafrarkm[i]=="25"){
shafrarkm[i]="ن"
}

if(shafrarkm[i]=="26"){
shafrarkm[i]="ه"
}

if(shafrarkm[i]=="27"){
shafrarkm[i]="و"
}

if(shafrarkm[i]=="28"){
shafrarkm[i]="ي"
}

if(shafrarkm[i]=="-"){
shafrarkm[i]=" "
}
}
console.log(shafrarkm);
shafrarkm = shafrarkm.toString();
shafrarkm = shafrarkm.replace(/,/g,"");

document. getElementById("done").value = shafrarkm;
}

</script>
</section>
<!---------start script--------->
<script src="../js/index2.js"></script>
</body>
</html>