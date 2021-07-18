<?php
require 'db.php';
// هنا اضفنا دالة الشرط للتحقق من ضغط زر signup
if(isset($_POST['signupbtn'])){
	// عند تحقق الضغط يتم تخزين حقول البيانات فى متغيرات 
	$email = $_POST['signemail'];
	$pass = $_POST['signpassword'];
	$name = $_POST['fullname'];
	$date = $_POST['datepirith'];
	$age = $_POST['age'];
	$school = $_POST['school'];
	$schoolyear = $_POST['schoolyear'];
	$address = $_POST['adrress'];
	$fphone = $_POST['fphone'];
	$phone = $_POST['phone'];
	$hoppies = $_POST['hoppies'];
	$baba = $_POST['baba'];
	$face = $_POST['face'];
	$sharat = $_POST['sharat'];
	$sick = $_POST['sick'];
	$why = $_POST['why'];
	$notes = $_POST['notes'];
	$qu = "INSERT INTO data VALUES (Null,'$email','$pass','$name','$date','$age','$school','$schoolyear','$address','$fphone','$phone','$hoppies','$baba','$face','$sharat','$sick','$why','$notes')";
	if ($con->query($qu) === TRUE) {
	    ob_start();
echo '<div class="container"><div class="text"></div></div><style>html,body {font-family: "Roboto Mono", monospace;background-image: radial-gradient(circle,#a8e10c,#ffdb15);height: 100%;
}
.container {
  height: 100%;
  width: 100%;
  justify-content: center;
  align-items: center;
  display: flex;
}
.text {
  font-weight: 100;
  font-size: 28px;
  color: #ff5765;
}
.dud {
  color: #8a6fdf;
}
</style>
<script>
"use strict";

class TextScramble {
  constructor(el) {
    this.el = el;
    this.chars = "!<>-_\\/[]{}—=+*^?#________";
    this.update = this.update.bind(this);
  }

  setText(newText) {
    const oldText = this.el.innerText;
    const length = Math.max(oldText.length, newText.length);
    const promise = new Promise(resolve => this.resolve = resolve);
    this.queue = [];

    for (let i = 0; i < length; i++) {
      const from = oldText[i] || "";
      const to = newText[i] || "";
      const start = Math.floor(Math.random() * 40);
      const end = start + Math.floor(Math.random() * 40);
      this.queue.push({
        from,
        to,
        start,
        end
      });
    }

    cancelAnimationFrame(this.frameRequest);
    this.frame = 0;
    this.update();
    return promise;
  }

  update() {
    let output = "";
    let complete = 0;

    for (let i = 0, n = this.queue.length; i < n; i++) {
      let {
        from,
        to,
        start,
        end,
        char
      } = this.queue[i];

      if (this.frame >= end) {
        complete++;
        output += to;
      } else if (this.frame >= start) {
        if (!char || Math.random() < 0.28) {
          char = this.randomChar();
          this.queue[i].char = char;
        }

        output += `<span class="dud">${char}</span>`;
      } else {
        output += from;
      }
    }

    this.el.innerHTML = output;

    if (complete === this.queue.length) {
      this.resolve();
    } else {
      this.frameRequest = requestAnimationFrame(this.update);
      this.frame++;
    }
  }

  randomChar() {
    return this.chars[Math.floor(Math.random() * this.chars.length)];
  }

} // ——————————————————————————————————————————————————
// Example
// ——————————————————————————————————————————————————


const phrases = ["تم انشاء الحساب","...انتظر قليلا"];
const el = document.querySelector(".text");
const fx = new TextScramble(el);
let counter = 0;

const next = () => {
  fx.setText(phrases[counter]).then(() => {
    setTimeout(next, 800);
  });
  counter = (counter + 1) % phrases.length;
};

next();
</script>
';

header("refresh:4;url=https://konmost3ed.000webhostapp.com");
  

ob_flush();
} else {
  echo "Error: " . $qu . "<br>" . $con->error;
}}






?>