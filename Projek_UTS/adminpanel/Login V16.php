<?php
session_start();
require_once "../koneksi.php";
?>

<!DOCTYPE html>
<!-- saved from url=(0048)https://colorlib.com/etc/lf/Login_v16/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login V16</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v16/images/icons/favicon.ico">

<link rel="stylesheet" type="text/css" href="./Login V16_files/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./Login V16_files/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./Login V16_files/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="./Login V16_files/animate.css">

<link rel="stylesheet" type="text/css" href="./Login V16_files/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="./Login V16_files/animsition.min.css">

<link rel="stylesheet" type="text/css" href="./Login V16_files/select2.min.css">

<link rel="stylesheet" type="text/css" href="./Login V16_files/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="./Login V16_files/util.css">
<link rel="stylesheet" type="text/css" href="./Login V16_files/main.css">

<meta name="robots" content="noindex, follow">
<script type="text/javascript" async="" src="./Login V16_files/analytics.js.download" nonce="98017592-a90b-45b6-b785-87a8c6927a38"></script><script defer="" referrerpolicy="origin" src="./Login V16_files/s.js.download"></script><script nonce="98017592-a90b-45b6-b785-87a8c6927a38">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})))))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="limiter">
<div class="container-login100" style="background-image: url(https://www.pixelstalk.net/wp-content/uploads/images5/Road-4K-Black-Wallpaper-scaled.jpg);">
<div class="wrap-login100 p-t-30 p-b-50">
<span class="login100-form-title p-b-41">
Account Login
</span>
<form class="login100-form validate-form p-b-33 p-t-5" method="post">
<div class="wrap-input100 validate-input" data-validate="Enter username">
<input class="input100" type="text" name="username" placeholder="User name">
<span class="focus-input100" data-placeholder=""></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Enter password">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100" data-placeholder=""></span>
</div>
<div class="container-login100-form-btn m-t-32">
<button class="login100-form-btn" name="loginbtn">
Login
</button>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>
<?php
            if (isset($_POST['loginbtn'])) {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

                $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
                $countdata = mysqli_num_rows($query);
                $data = mysqli_fetch_array($query);


                if($countdata>0){
                    if (password_verify($password, $data['password'])){
                        $_SESSION['username'] = $data['username'];
                        $_SESSION['login'] = true;
                        header('location: ../adminpanel/');
                    }else {
                        ?>
                        <div class="alert alert-danger" role="alert">
                        Password salah
                    </div>
                    <?php
                    }
                }else {
                    ?>
                <div class="alert alert-danger" role="alert">
                    Akun Tidak Tersedia
                </div>
                <?php

                }
            }
            ?>

<script src="./Login V16_files/jquery-3.2.1.min.js.download"></script>

<script src="./Login V16_files/animsition.min.js.download"></script>

<script src="./Login V16_files/popper.js.download"></script>
<script src="./Login V16_files/bootstrap.min.js.download"></script>

<script src="./Login V16_files/select2.min.js.download"></script>

<script src="./Login V16_files/moment.min.js.download"></script>
<script src="./Login V16_files/daterangepicker.js.download"></script>

<script src="./Login V16_files/countdowntime.js.download"></script>

<script src="./Login V16_files/main.js.download"></script>

<script async="" src="./Login V16_files/js"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer="" src="./Login V16_files/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7c73df313e7f4adc&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.4.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


</body></html>