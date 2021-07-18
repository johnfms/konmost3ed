
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
<style>
    
    .snip1527 {
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
          color: #ffffff;
          font-family: 'Lato', Arial, sans-serif;
          font-size: 16px;
          margin: 10px;
          max-width: 310px;
          min-width: 250px;
          overflow: hidden;
          position: relative;
          text-align: left;
          width: 100%;
        }
        
        .snip1527 * {
          -webkit-box-sizing: border-box;
          box-sizing: border-box;
          -webkit-transition: all 0.25s ease;
          transition: all 0.25s ease;
        }
        
        .snip1527 img {
          max-width: 100%;
          vertical-align: top;
          position: relative;
        }
        
        .snip1527 figcaption {
          padding: 25px 20px 25px;
          position: absolute;
          bottom: 0;
          z-index: 1;
        }
        
        .snip1527 figcaption:before {
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          background: #700877;
          content: '';
          background: -moz-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
          background: -webkit-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
          background: linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
          opacity: 0.8;
          z-index: -1;
        }
        
        .snip1527 .date {
          background-color: #fff;
          border-radius: 50%;
          color: #700877;
          font-size: 18px;
          font-weight: 700;
          min-height: 48px;
          min-width: 48px;
          padding: 10px 0;
          position: absolute;
          right: 15px;
          text-align: center;
          text-transform: uppercase;
          top: -25px;
        }
        
        .snip1527 .date span {
          display: block;
          line-height: 14px;
        }
        
        .snip1527 .date .month {
          font-size: 11px;
        }
        
        .snip1527 h3,
        .snip1527 p {
          margin: 0;
          padding: 0;
        }
        
        .snip1527 h3 {
          display: inline-block;
          font-weight: 700;
          letter-spacing: -0.4px;
          margin-bottom: 5px;
        }
        
        .snip1527 p {
          font-size: 0.8em;
          line-height: 1.6em;
          margin-bottom: 0px;
        }
        
        .snip1527 a {
          left: 0;
          right: 0;
          top: 0;
          bottom: 0;
          position: absolute;
          z-index: 1;
        }
        
        .snip1527:hover img,
        .snip1527.hover img {
          -webkit-transform: scale(1.1);
          transform: scale(1.1);
        }
</style>
</head>
<body data-gr-c-s-loaded="true" style="
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: #ffdb15;
  ">
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
          <li><a  href="admin.php" >بيانات الكشافه</a></li>
          <li><a id="2" href="hafla.php">حفله الوعد</a></li>
          <li><a id="3" href="droos.php">صنع محاضره</a></li>
          <li><a id="4"href="images.php" >وضع صوره </a></li>          
          <li><a class="active" id="4" href="khaber.php" >وضع خبر </a></li>          
        </ul>
      </nav>
<br><br><br>
      <style>
          @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css");

      * {
        margin:0;
        padding:0;
        box-sizing: border-box;
        text-decoration:none;
        list-style:none;
        direction:rtl;
      }
      .divtext{
        width:300px;
        text-align: center;
        font-size: large;
        z-index:99999999;
      }
      .divtext img{
  width:30px;
  height:30px;
  border-radius: 50px;
}
      .navtext span{
        color: #ffdb15;
      }
      .navtext{
        color: #8a6fdf;
      
      }
      nav {
        height:95px;
        background:#ff5765 ;
        width:100%;
        display: flex;
        justify-content: center;
        z-index:9999;
      }
      nav ul {
        float: right;
        margin-right:20px;
        z-index: 3;
      }
      nav ul li {
        line-height:80px;
        display:inline-block;
        margin:0 5px;
      }
      nav ul li a {
        text-transform:uppercase;
        font-size: 16px;
        color: white;
        padding:7px 13px;
        border-radius:3px;
      }
      a.active,a:hover {
        background: #A8E10C;
    transition: 0.5s;
    color: #636363;;
      }
      .checkbtn {
        font-size:30px;
        color:white;
        float:right;
        line-height:80px;
        margin-right:40px;
        cursor:pointer;
        display:none;
      }
      #check {
        display:none;
      }
      @media (max-width:952px) {
        label.logo {
          font-size:30px;
          padding-left:50px;
        }
        nav ul li a {
          font-size:16px;
        }
      }
      

      @media (max-width:858px) {
          #s1{
            transform: scale(0.7);
          }
        .checkbtn {
          display:block;
        }
        ul {
          position: fixed;
          height:100vh;
          width:100%;
          background: #ff5765;
          top:80px;
          left:-100%;
          text-align:center;
          transition: all .5s;
          z-index:3;
        }
        nav ul li {
          display:block;
          line-height:30px;
          margin:50px 0;
        }
        nav ul li a {
          font-size: 20px;
        }
        a.active,a:hover {
          background:none;
          color: #0082e6;
        }
        #check:checked ~ ul {
          left:0;
          z-index:3;
        }
      }
      #s1 {
        background:#ffdb15;
        height:86vh;
      }
      @media (max-width:570px) {
        #s1{
          transform: scale(0.5);
        }
      #s2{
        flex-direction: column;
        align-content: center;
        display: flex;
        align-items: center;
        justify-content: normal;
        flex-wrap: wrap;
      }
      #o{transform: scale(0.6);
    margin-right: -95px;
        }
      }
        @media (max-width:310px) {
            #s1{
              transform: scale(0.39);
            }}
            section{
            background: #ffdb15;
        height: 86vh;
        display: flex;
        justify-content: center;
          }
          body{
            background: #ffdb15;
          }

      </style>
      <div style="background-color: #ff5765;width: 181px;display: flex;flex-direction: column;justify-content: center;">
        <div style="background: #ff5765;width: 181px;text-align: center;">
          <h3>عنوان الخبر</h3>
          <input type="text" name="" id="ht" placeholder="head name"><br><br>
          <br><br><br>
          
        </div>

        <div style="background: #ff5765;width: 181px;text-align: center;">
          <h3>التاريخ</h3>
          <input type="text" name="" id="dn" placeholder="day"><br><br>
          <input type="text" name="" id="m" placeholder="month like : MAY"><br><br>

        </div>

        <div style="background: #ff5765;width: 181px;text-align: center;">
          <h3>الخبر</h3>
          <textarea id="news" name="" rows="4" cols="20" placeholder="news text"></textarea><br><br>

        </div>

        <div style="background: #ff5765;width: 181px;text-align: center;">
          <h3>الصوره</h3>
          <textarea id="imgc" name="" rows="4" cols="20" placeholder="img src"></textarea><br><br>

        </div>

        <input type="button" value="try" onclick="tst()"><input type="button" value="remove" onclick="re()"><input type="button" value="save" onclick="sv()"><br><br>
      </div>



      <script>
  function tst(){
    var     ht=document.getElementById("ht"),
            dn=document.getElementById("dn"),
            imgc=document.getElementById("imgc"),
            m=document.getElementById("m"),
            news=document.getElementById("news");

        var od =document.createElement("div"),
            figure =document.createElement("figure"),
            imgd =document.createElement("div"),
            img=document.createElement("img"),
            figcaption=document.createElement("figcaption"),
            dated=document.createElement("div"),
            dayd=document.createElement("span"),
            day=document.createTextNode(dn.value),
            monthd=document.createElement("span"),
            month=document.createTextNode(m.value),
            h3=document.createElement("h3"),
            ht=document.createTextNode(ht.value),
            newsp=document.createElement("p"),
            news=document.createTextNode(news.value);

            od.setAttribute("id","o");
            figure.setAttribute("class","snip1527");
            figure.setAttribute("style","height: 200px;");
            imgd.setAttribute("class","image");
            img.setAttribute("src", imgc.value);
            dated.setAttribute("class","date");
            dayd.setAttribute("class","day");
            monthd.setAttribute("class","month");

    
    figure.appendChild(imgd);
    imgd.appendChild(img);
    figure.appendChild(figcaption);
    figcaption.appendChild(dated);
    dated.appendChild(dayd);
    dayd.appendChild(day);
    dated.appendChild(monthd);
    monthd.appendChild(month);

  figcaption.appendChild(h3);
  h3.appendChild(ht);

  figcaption.appendChild(newsp);
  newsp.appendChild(news);

  od.appendChild(figure);
  document.body.appendChild(od);
  }
  function re(){
    var o=document.getElementById("o");
  o.remove();
  }
  function sv(){
  
    var fd =document.createElement("div"),
    f = document.createElement("form"),
    t =document.createElement("textarea"),
    o =document.getElementById("o"),
    c =document.createTextNode(o.innerHTML),
    i = document.createElement("input");
    
    t.setAttribute("id","code");
    t.setAttribute("name","code");
    t.setAttribute("readonly"," ");
  
    i.setAttribute("type","submit");
    i.setAttribute("value","send");
    i.setAttribute("name","send");
  
    f.setAttribute("method","post");
  
    fd.setAttribute("style","margin-top: 500;width: 260px;height: 150px;background: #ff5765;text-align: center;")
    
    t.appendChild(c);
    f.appendChild(i);
    f.appendChild(t);
    fd.appendChild(f);
    document.body.appendChild(fd);}
    </script>
    <?php
require '../php/db.php';
if(isset($_POST['send'])){
  $code = $_POST['code'];
  $qu = "INSERT INTO code VALUES ('&nbsp;','$code','&nbsp;')";
  
  if ($con->query($qu) === TRUE) {

header("Location=https://konmost3ed.000webhostapp.com");

} else {
  echo "Error: " . $qu . "<br>" . $con->error;
}
    
}
?>