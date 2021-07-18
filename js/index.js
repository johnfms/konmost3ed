

  var con = document.getElementById("con");


  function animate1(){
    var loginform = document.getElementById("loginform");
    con.removeChild(loginform);
    con.innerHTML='<div class="form form2" id="signupform" ><h2>اصنع حساب</h2><form method="post" action="php/signup.php" id="form2"><p class="email"><label for="email">اصنع ايميل<span>*</span></label><input class="input" required="" type="email" id="email" name="signemail"></p><p class="password"><label for="password">اصنع باسورد<span>*</span></label><input class="input" required="" type="password" id="password" name="signpassword"></p><hr><p><label for="user name"><span>*</span>اسمك الثلاثي</label><input class="input" required="" type="textbox" name="fullname"></p><div><label for="date">  <span>*</span>تاريخ ميلادك</label><input class="input" required="" type="date" name="datepirith"><lable for="textbox"><span>*</span>سنك</lable><input class="input year" required="" type="textbox" name="age"></div><div><label for="textbox">مدرستك</label><input class="input" required="" type="textbox" name="school" style="margin :10px;"> <label for="textbox">صفك الدراسي</label><input class="input" required="" type="textbox" name="schoolyear"></div><label for="textarea">*عنوانك</label><textarea class="input" required="" name="adrress"></textarea><div><label for="tel">رقم ولي الامر</label><input type="tel" class="input" required="" name="fphone"><label for="tel">رقمك</label><input type="tel" class="input" required="" name="phone"></div><br><label for="textbox">الهوايات</label><input class="input" required="" type="textbox" name="hoppies"><div><label for="textbox">اب الاعتراف</label><input class="input" required="" type="textbox" name="baba"><label for="textbox">الفيسبوك</label><input class="input" required="" type="textbox" name="face"></div><br><label for="textbox">الشارات</label><input class="input" required="" type="textbox" name="sharat"><label for="textarea">هل تعاني من امراض</label><textarea class="input" required="" name="sick"></textarea><hr><label for="textarea">لماذا تريد الالتحاق بالكشافه</label><textarea class="input" required="" name="why"></textarea><label for="textarea">ملاحظات</label><textarea class="input" name="notes"></textarea><p class="signup"><input type="submit" name="signupbtn" value="اصنع الحساب"></p><p class="signup"><input class="signupbtn" type="button" value="سجل دخول الان" onclick="animate2()"></p></form></div>';  
    var form2 = document.getElementById("form2");
    form2.setAttribute("action", "php/signup.php");
  }

    function animate2(){
      var signupform = document.getElementById("signupform");
      con.removeChild(signupform);
      con.innerHTML='<div class="form" id="loginform"><h2> تسجيل دخول </h2><form method="post" action="php/login.php id="form1"><p class="email"><label for="email">الايميل <span>*</span></label><input class="input" required="" type="email" id="email" name="logemail"></p><p class="password"><label for="password">الباسورد <span>*</span></label><input class="input" required="" type="password" id="password" name="logpassword"></p><p class="login"><input type="submit" name="login" value="سجل دخول"></p><p class="signup"><input class="signupbtn" type="button" value="انشي حساب" onclick="animate1()"></p></form></div>';
    }