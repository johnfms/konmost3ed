<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" type = "image/png" href = "../img/group logo.jpg">
  <title>صفحه ادمن كشاف متقدم</title>
</head>
<body>
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
          <li><a class="active"id="2" href="hafla.php">حفله الوعد</a></li>
          <li><a id="3" href="droos.php">صنع محاضره</a></li>
          <li><a id="4"href="images.php" >وضع صوره </a></li>          
          <li><a id="4" href="khaber.php" >وضع خبر </a></li>          
        </ul>
      </nav>
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
        flex-direction: column;
        display: flex;
        justify-content: center;
          }
          body{
            background: #ffdb15;
          }

      </style>
<style>/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: sans-serif;
            background: #ffdb15;
          
}

.container {
  margin-top: 20px;
}

/*--------------------------------------------------------------
# Table
--------------------------------------------------------------*/
table {
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05),
    0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);
  font-size: 14px;
  width:100%;
}

th {
  color: #ffffff;
  background: #39a2fb;
  font-weight: 700;
}

tr {
  background: #fff;
}

tr:hover {
  background: #f4f4f4;
}

td {
  word-wrap: break-word;
  border-bottom: 1px solid #ccc;
}

/*--------------------------------------------------------------
  # Small and medium screens
  --------------------------------------------------------------*/

</style>


<section class="container">
  <h2>7gz 7afla</h2>
  <br>
<table>
<tr>
<th>name</th>
<th>phone</th>
<th>krasy</th>
</tr>
<?php
require "../php/db.php";
$sql = "SELECT * FROM `hafla`";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "
<tr>
<td>" . $row["name"]. "</td>
<td>" . $row["phone"] . "</td>
<td>" . $row["krasy"]. "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</section>
</body>
</html>