<html><head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/ico/sc.png">
    <link rel = "icon" type = "image/png" href = "../img/group logo.jpg">
  <title>  كشاف متقدم</title>
</head><body style="
    display: flex;
    flex-direction: column;
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
          <li><a class="active" id="3" href="droos.php">صنع محاضره</a></li>
          <li><a id="4"href="images.php" >وضع صوره </a></li>          
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

<div style="background-color: #ff5765;width: 181px;display: flex;flex-direction: column;">
    <div style="background: #ff5765;width: 181px;text-align: center;">
      <h3>العنوان</h3>
      <input type="text" name="" id="ht" placeholder="head name"><br><br>
      <label>لون العنوان</label><br><input type="color" name="" id="hc">
      <br><br>
      <br><br>
    </div>
    <div style="background: #ff5765;width: 181px;text-align: center;">
      <h3>صور</h3>
      <textarea id="src1" name="" rows="4" cols="20" placeholder="img src"></textarea>
      <textarea id="src2" name="" rows="4" cols="20" placeholder="img src"></textarea>
      <textarea id="src3" name="" rows="4" cols="20" placeholder="img src"></textarea>
      <br><br>

      <br><br>
    </div>
    <div style="background: #ff5765;width: 181px;text-align: center;">
      <h3>خلفيه</h3>
      <label>لون الخلفيه</label><br><br><input type="color" name="" id="bc"><br><br>
    </div>
    <div style="background: #ff5765;width: 181px;text-align: center;">
        <h3>شرح المحاضره</h3>
        <textarea id="pt" name="" rows="5" cols="20" placeholder="paragraph..."></textarea>
        <input type="color" name="" id="pc">
    </div>
    <input type="button" value="try" onclick="test()">
    <input type="button" value="remove" onclick="re()">
    <input type="button" value="save" onclick="sv()"><br><br>
  </div>
  <div id="a4" style="text-align: -webkit-center;"><br><br><br><br><br></div>


  <script>

function test(){
    var bc =document.getElementById("bc"),
        ht =document.getElementById("ht"),
        hc =document.getElementById("hc"),
        src1 =document.getElementById("src1"),
        src2 =document.getElementById("src2"),
        src3 =document.getElementById("src3"),
        pt =document.getElementById("pt"),
        pc =document.getElementById("pc");

    var con=document.createElement("div"),
        h=document.createElement("h2"),
            hn=document.createTextNode(ht.value),
        imgd=document.createElement("div"),
            img1=document.createElement("img"),
            img2=document.createElement("img"),
            img3=document.createElement("img"),
        pd=document.createElement("div"),
            p =document.createElement("p"),
                pn=document.createTextNode(pt.value);
    
    con.setAttribute("id","o");
    con.setAttribute("style","background: " + bc.value + ";width: 550px;height: 600px;padding: 7px;");
        h.setAttribute("style","color:"+ hc.value +"; text-align: center;border-bottom: double;");

    imgd.setAttribute("style","width: 190px;height: 522px;margin: 10px;overflow: hidden;display: flex;flex-flow: column;margin-left: -330px;");
        img1.setAttribute("style","width:190;height:522;");
        img2.setAttribute("style","width:190;height:522;");
        img3.setAttribute("style","width:190;height:522;");

        img1.setAttribute("src",src1.value);
        img2.setAttribute("src",src2.value);
        img3.setAttribute("src",src3.value);
    pd.setAttribute("style","margin-top: -532px;margin-left: 210px;height: 522px;width: 332px;overflow: scroll;border: dashed;overflow-x: hidden;");
        p.setAttribute("style","font-size: 20px;color:"+ pc.value +";");

    p.appendChild(pn);
    pd.appendChild(p);
        imgd.insertBefore(img3,imgd.firstChild);
        imgd.insertBefore(img2,imgd.firstChild);
        imgd.insertBefore(img1,imgd.firstChild);
    h.appendChild(hn);

    con.insertBefore(pd,con.firstChild);
    con.insertBefore(imgd,con.firstChild);
    con.insertBefore(h,con.firstChild);
    var oo =document.getElementById("a4");
    var br = document.createElement("BR");
    oo.appendChild(br);
    oo.appendChild(br);
    oo.appendChild(con);
}
function re(){
  var o=document.getElementById("o");
o.remove();
}
function sv(){
  var oo =document.getElementById("a4");
var fd =document.createElement("div"),
f = document.createElement("form"),
t =document.createElement("textarea"),
o =document.getElementById("o"),
c =document.createTextNode(oo.innerHTML),
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
document.body.appendChild(fd);
}
  </script></body></html>
  
  <?php
require '../php/db.php';
if(isset($_POST['send'])){
  $code = $_POST['code'];
  $qu = "INSERT INTO code VALUES ('&nbsp;','&nbsp;','$code')";
  
  if ($con->query($qu) === TRUE) {

header("Location=https://konmost3ed.000webhostapp.com");

} else {
  echo "Error: " . $qu . "<br>" . $con->error;
}
    
}
?>