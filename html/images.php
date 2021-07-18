<html lang="en"><head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/ico/sc.png">
    
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>make news</title>
      <style>
        .new {
          display: flex;
          align-items: center;
          justify-content: center;
        }
  
        .outer {
          display: flex;
          height: 100px;
          align-items: center;
          position: relative;
        }
  
        * {
          font-family: "Staatliches", sans-serif;
        }
  
        .conco {
          height: 100%;
          perspective: 700px;
          position: relative;
          perspective-origin: 50% 50%;
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 400px;
        }
  
        .item {
          position: absolute;
          animation-duration: 3s;
          animation-fill-mode: backwards;
          animation-timing-function: ease;
          z-index: 100;
          backface-visibility: hidden;
          font-size: 50px;
          white-space: nowrap;
          border-bottom: 2px solid black;
          border-top: 2px solid black;
          transform-style: preserve-3d;
        }
  
        .animate {
          visibility: visible;
          animation-name: animate;
        }
  
        .inner {
          transform: translateZ(-50px);
          transform-style: preserve-3d;
          height: 100%;
          width: 100%;
          display: flex;
          align-items: center;
          justify-content: center;
        }</style>
    </head>
    <body data-gr-c-s-loaded="true" style="
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: #ffdb15;
  "><nav>
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
          <li><a class="active" id="4"href="images.php" >وضع صوره </a></li>          
          <li><a id="4" href="khaber.php" >وضع خبر </a></li>          
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
          <h3>عنوان الصورة</h3>
          <input type="text" name="" id="ht" placeholder="head name"><br><br>
          <label>لون العنوان</label><br><input type="color" name="" id="hc">
          <br><br><br>
          
        </div>
        <div style="background: #ff5765;width: 181px;text-align: center;">
          <h3>الصوره</h3>
          <textarea id="imgc" name="" rows="4" cols="20" placeholder="img src"></textarea><br><br>
          
          
        </div>
        <div style="background: #ff5765;width: 181px;text-align: center;">
          <h3>الخلفيه</h3>
          <br><br><input type="color" name="" id="bc"><br><br>
        </div>
        <input type="button" value="try" onclick="tst()"><input type="button" value="remove" onclick="re()"><input type="button" value="save" onclick="sv()"><br><br>
      </div>
      <script>
  
  function tst(){
    var ht=document.getElementById("ht"),
            hc=document.getElementById("hc"),
            imgc=document.getElementById("imgc"),
            imgw=document.getElementById("imgw"),
            bc=document.getElementById("bc");
  
  
        var  itm =document.createElement("div"),
             od =document.createElement("div"),
             now=document.createElement("div"),
             img=document.createElement("img"),
             h=document.createElement("h6"),
             node=document.createTextNode(ht.value);
  
             od.setAttribute("id","o");
             itm.setAttribute("class","item");
             itm.setAttribute("id","r");
  now.setAttribute("style","display:flex;justify-content: center; align-items: center;width: 821px;height: 410px;background: " + bc.value + " ; ");
  
  img.setAttribute("style","margin:30px;max-width: 660px;");
  
  
  img.setAttribute("src", imgc.value);
  h.setAttribute("style","text-align: center;color:" + hc.value + " ; ");
  h.appendChild(node);
  now.insertBefore(h,now.firstChild);
  now.insertBefore(img,now.firstChild);
  itm.appendChild(now);
  od.appendChild(itm);
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
    <style>
      .item div {
        margin-left: -400px;
      }

      @media (max-width:800px) {
        .item div{
          transform: scale(0.5);
        }}
        @media (max-width:310px) {
          .item div{
              transform: scale(0.39);
            }}
    </style>
  
  </body></html>
  <?php
require '../php/db.php';
if(isset($_POST['send'])){
  $code = $_POST['code'];
  $qu = "INSERT INTO code VALUES ('$code','&nbsp;','&nbsp;')";
  
  if ($con->query($qu) === TRUE) {

header("Location=https://konmost3ed.000webhostapp.com");

} else {
  echo "Error: " . $qu . "<br>" . $con->error;
}
    
}
?>