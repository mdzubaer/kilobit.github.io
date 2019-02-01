<?php
require_once("libs/ip.php");
require_once("libs/config.php");
       $lnk_lnk = "$db_name/lnk/$userip.xxx"; //link path
       if (file_exists($lnk_lnk)) {
           $check_link = file_get_contents($lnk_lnk); //check status
           if ($check_link == 200) {
               $msg1 = "You have received extra $extra satoshi for visiting short link.";
           }
       }
$lnkmsg = "";
if (isset($_GET["lnkmsg"])) {
   $lnkmsg = $_GET["lnkmsg"];
}

$time_ip = "$db_name/ip/$userip.xxx"; //time of ip

if (file_exists($time_ip)) {
    $t = intval((file_get_contents($time_ip) + ($faucet_timer * 60)) * 1000); $remn = time() - $t ;
    } else {
    $t = 0;
    }

?>
<!-- 
### Alpha Faucet Script - Created By alamin & Themed By aditya016 ###
### Like the Script? Then Get it at https://cointalk.club ### 
### GR8 TEMPLATE ONLY FOR ALPHA FAUCET SCRIPT ###
-->

<!-- HTML START -->
<!doctype html>
<html>
<!-- HEAD START -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=500, initial-scale=1.0">
<!-- FAUCET INFO -->
<title><?php echo $site_name; ?> | Claim <?php echo $amount; ?> Satoshi Every <?php echo $faucet_timer; ?> Minutes.</title>
<!-- Do not remove the credit to support our free work ;) -->
    <meta name="author" content="aditya016,alamin">
<!-- Do not remove the credit to support our free work ;) -->
<meta name="description" content=" Claim <?php echo $amount; ?> Satoshi Every <?php echo $faucet_timer; ?> Minutes. ">
<meta name="keywords" content="gana tu primer bitcoin, get free bitcoins, bitcoin faucet, satoshi, much, many, list litecoin, faucet peercoin, message, earn doge, satoshi faucet, bitgolden, fifa, bitcoin golden, invest bitcoin, extra, earn bitcoins, triple my btc, triple btc, gratis, free satoshi, faucet dogecoin, money, doge, ganar dinero por internet, bitcoin tripler, win free satoshi, make bitcoin, board, free bitcoins, earn litecoin, make money online, faucet bitcoin, earning bitcoin, claim, faucet, investing bitcoin, free xpm, every hour, cash, free doge, grifos, big faucet collection, cryptocurrency, list bitcoin, gana, dice, payout, work, link, win, earn satoshi, soccer, dxg, forex, bitcoin multiplier, bitcoin dice, at, earn free coins, predimania, 2015, collection, drk, increase bitcoins, kraan, bitlucky, messages, satoshis regalados, ref, ltc, list doge, ganar dinero, earnings bitcoins, faucet satoshi, free ppc, btc, btx, all best, bit, list dogecoin, cryptocurrenc, wallet, bucks, ptc, earn, faucet primecoin, free money, earnings, monedas, cryptomonedas, free primecoin, multiply bitcoins, euro, win bitcoin, bitcoin investment, crypto curency, darkcoin, bitkrusty, faucet doge, xbt, reward, litecoin, earn bitcoin, bitcoins, forum, bitcoin get, earning bitcoin free, crypto btc, dogecoin, blabber, free peercoin, faucet litecoin, coin, income, universe, free satoshi bitcoin, what is bitcoin, shoutbox, free satoshi faucet, earn coins, get my faucet, win free bitcoins, referral, dash, free cryptocurrency, dollar, bitcoin faucets, get bitcoin, free bitcoin, free coin, grifo, free, faucets, earn money, triple bitcoins, free btc, links, kran, bitcoin, get free satoshi, bets, satoshis, list, triple my bitcoins, list faucet, freelancer, cada hora, rotator, free litecoin, home">

<!-- FAUCET FAVICON -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- FAUCET BASE CSS -->
<link href = "css/style.css" rel = "stylesheet">


<style>
@font-face {
    font-family: "custom";
    src: url("fonts/Vintage Avalanche.otf");
}

body {
	font-size: 62.5%;
	color: #202022;
	background: #4d4d4d 
			url('background.jpg') fixed center center;
	background-size: cover;
}
a {
	color: #202022;
	text-decoration:none;
	}
a:hover {
	color: #202022;
	text-decoration:underline;
	}

.content{
	width:740px;
	margin: 12px auto 10px;
	text-align: center;
	padding: 6px;
	}
.content, iframe{
	background: rgba(1,200,250,0.8);
	margin-bottom: 2px;
	}
h2{
	margin: -8px auto 8px;	
}
.banner{
	background: rgba(1,200,250,0.8);
	margin-bottom: 2px;
	border: 1px solid rgba(32,32,34,0.5);
}

.nav{
	width: 728px;
	font-size: 14px;
	display: inline-block;
	text-align: center;
	margin: 0 auto 8px;
}

.nav ul {
    list-style-type: none;
    text-align: center;
    padding: 0;
}

.nav li {
    display: inline-block;
    text-align: center;
    margin: 2px auto;
}

.nav li a {
    display: block;
	color: #202022;
	text-decoration:none;
	background: #01c8fa;
	padding: 6px;
	margin-right: 4px;
	font-weight: bold;
	}

.nav li a:hover {
    color: #01c8fa;
	text-decoration: none;
	background: rgba(32,32,34,0.5);
	}

.top_adspace, .bottom_adspace{
	margin: 4px auto;
	padding: 6px 0 2px;
	border-top: 1px solid rgba(32,32,34,0.5);
	border-bottom: 1px solid rgba(32,32,34,0.5);
	}

.footer_txt {
	color: #01c8fa;
	text-shadow: 2px 2px #202022;
}
.footer_txt a {
	color: #01c8fa;
	text-shadow: 1px 1px #202022;
	text-decoration:none;
}
.footer_txt a:hover {
	text-decoration:underline;
}

@media screen and (min-width:1076px){
.wrapper {
	width:1076px;
	margin:0 auto;
	}
.ad_left, .ad_right {
	position:absolute;
	width: 160px;
	height: 600px;
	border:0px;
	overflow:hidden;
	background: transparent;
	top: 168px;
	}
.ad_left {
	margin-left: -10px;
	}
.ad_right {
	margin-left:926px;
	}
}

@media screen and (min-width:0px) and (max-width:1075px) {
.wrapper {
	width:740px;
	margin:0 auto;
	}
.ad_left, .ad_right {
	width: 48%;
	height: 600px;
	border: 0px;
	overflow: hidden;
	background: transparent;
	text-align: center;
	float: left;
	margin: 12px auto;
	}
.ad_left{
	margin-left:0px;
	}
.ad_right{
	margin-left:28px;
	}
	.ad_left iframe, .ad_right iframe{
		max-width:300px;
	}
}

</style>

<!-- FAUCET CUSTOM CSS -->



<!-- FAUCET SCRIPTS -->

 <script src='https://www.google.com/recaptcha/api.js'></script>
 
 <script>

var countDownTime = "<?php echo $t; ?>";

var x = setInterval(function() {

    var now = new Date().getTime();
    
    var distance = countDownTime - now;
    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById("countdown").innerHTML = "<h2 style='color: black'>Remaining time:</h2> " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "<p style='color: rgb(255, 0, 0); font-size: 30px; text-shadow: rgb(255, 255, 255) 0px 0px 5px, rgb(255, 255, 255) 0px 0px 10px, rgb(255, 255, 255) 0px 0px 15px, rgb(255, 45, 149) 0px 0px 20px, rgb(255, 45, 149) 0px 0px 30px, rgb(255, 45, 149) 0px 0px 40px, rgb(255, 45, 149) 0px 0px 50px, rgb(255, 45, 149) 0px 0px 75px;'>Ready to claim</p>";
    }
}, 1000);
</script>
 
</head>
<!--  HEAD END -->

<!-- BODY START -->
<body>

<!-- START PAGE WRAPPER -->
<div class="wrapper">

<!-- START MAIN CONTENT -->
<div class="content">

<!-- FAUCET NAME -->
<h1><a href="<?php echo $site_url; ?>"><?php echo $site_name; ?></a></h1>
<!-- FAUCET DESCRIPTION -->
<h2 id="reward">Claim <?php echo $amount; ?> Satoshi Every <?php echo $faucet_timer; ?> Minutes.</h2>

<div class="nav"><ul><li><a href="<?php echo $site_url; ?>">BTC Faucet</a></li>
<li><a href=" http://www.cropme.ga">Faucet List</a></li>
<li><a href="http://tinyurl.com/consiariat">Consiartiat</a></li>
<li><a href="http://tinyurl.com/Btcsmile">BTCsmile</a></li>
<li><a href="http://tinyurl.com/gobits-io">Gobits</a></li>
</ul></div>
<!-- START TOP AD SPACE -->
<!-- Banner 728x90 -->
<?php echo $ads_top1; ?>    
                
<?php echo $ads_top2; ?>      
                        
<?php echo $ads_top3; ?>
<!--  END TOP AD SPACE -->


<!-- DISPLAY ERRORS -->

<?php

if (isset($_GET["ua"])) {
   $a = $_GET["ua"];
}
if (isset($_GET["s"])) {
   $b = $_GET["s"];
}
if (isset($_GET["a"])) {
   $c = $_GET["a"];
}
if (isset($_GET["o"])) {
   $d = $_GET["o"];
}

if (!empty($a) && !empty($b) && !empty($c) && !empty($d)) {
    if ($d == "fh") {
        $url = "https://faucethub.io/balance";
        $w = "FaucetHUB";
    }
    if ($d == "fs") {
        $url = "https://faucetsystem.com/check";
        $w = "FaucetSystem";
    }
    
    echo " <div class='msg success' role='alert'>$c satoshi sent to your <a href='$url/$a' target='_blank'>$w Wallet.<a></div>";   
} else {
    echo "";
}
$errmsg = "";
if (isset($_GET["errmsg"])) {
   $errmsg = $_GET["errmsg"];
}
echo " <b style='min-width: 468px;
	width: 100%;
	font-size: 18px;
	text-align: center;
	word-wrap: break-word;
	display: inline-block;
	margin: 0 auto; color: #a94442;
	background-color: #f2dede;
	border: 1px solid #ebccd1;
	margin-bottom: 0.6em;
	border-radius: 4px;
	padding: 0.4em;'>$errmsg</b>";
?>

<?php if (isset($_GET["msg"])) {$msg = $_GET["msg"];} if (!empty($msg)) {echo "<b style='min-width: 468px;
	width: 100%;
	font-size: 18px;
	text-align: center;
	word-wrap: break-word;
	display: inline-block;
	margin: 0 auto; color: #a94442;
	background-color: #f2dede;
	border: 1px solid #ebccd1;
	margin-bottom: 0.6em;
	border-radius: 4px;
	padding: 0.4em;'>$msg</b>";} ?>

<!-- PAGE CONTENT -->
<div class="msg warning">A <b><a href="http://faucethub.io/r/5998603" target="_blank">FaucetHub</a></b> account is required to Claim.</div>
<div class="msg"><a href="http://faucethub.io/r/5998603"><img src="http://faucethub.io/assets/img/banners/5.gif"></a></div>
<br><br>
<center>  <h2><div class="warning" role="alert">
<?php if (isset($msg1)) {echo $msg1;} else {echo "Visit this <a href='links/link.php'><button class='success'>Short Link</button></a> and click on <button class='error'>Skip Ad</button> button to get extra $extra satoshi on your next claim.";} echo $lnkmsg ; ?>
</div></h2></center>
<br>
<b id="countdown" style="color: white; font-size: 32px;"></b>
<br>

<div class="msg"><form class="claim_form" method="POST" action="libs/ctrl.php"><input type="text" class="login_input" 
	name="addy" id="email_intro" placeholder="Enter Your BTC Address" 
	maxlength="42" pattern="[a-zA-Z0-9]{25,42}" required>
	<br><br>
	<center>
<label class="radio-inline">
      <input type="radio" name="option" value="fh"><span class="login">FaucetHub</span>
    </label>
    <label class="radio-inline">
      <input type="radio" name="option" value="fs"><span class="login">FaucetSystem</span>
    </label>

<br>
<br>
<div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>" data-theme="light"></div><input type="hidden" name="ref" value="<?php if (isset($_GET["ref"])) {echo $_GET["ref"];} ?>">
	<?php echo $ads_form; ?>
	</center>
	<input type="submit" id="submit_intro" class="login" name="submit" value="Get Your Free Bitcoin" ></form></div>


<!--  REFLINK -->
<div class="msg" style="font-size: 16px;margin-bottom:8px;">
<b>Share this link to get <?php echo $referral; ?> % commission from your referral's direct + extra earnings.</b>  <code><?php if (!empty($a)) {echo "$site_url/?ref=$a";} else {echo "$site_url/?ref=Your_bitcoin_address";} ?></code><br><br></div>

<!-- Don't Remove this if you don't know what you are doing -->
 <?php
    include('libs/send_ref.php');
    ?>
<!-- Don't Remove This -->
<!-- WHAT IS BITCOIN -->
<div class="msg info whatis">
<b>What is Bitcoin?</b><br>
Bitcoin is a type of digital currency in which encryption techniques are used to regulate the generation of units of currency and verify the transfer of funds, operating independently of a central bank.<br>
<iframe src="//www.youtube.com/embed/Gc2en3nHxA4?rel=0&showinfo=0&wmode=opaque" allowfullscreen="" style="width:100%;min-width:454px;height:254px;border: 1px solid #bce8f1;"></iframe><br>
<b>What is a Bitcoin Faucet?</b><br>
A Bitcoin Faucet is a website that dispenses satoshi to visitors in exchange for completing a captcha. All payouts are sent instantly to your <b><a href="http://faucethub.io/r/5998603" target="_blank">FaucetHub</a></b> account and are automatically credited to your wallet address.
</div> <!--  END WHAT IS BITCOIN. -->


<!-- START BOTTOM AD SPACE -->
<div class="bottom_adspace">
<?php echo $ads_bottom1; ?>

<?php echo $ads_bottom2; ?>

<?php echo $ads_bottom3; ?>
</div> <!-- ## END BOTTOM AD SPACE -->

</div> <!-- END PAGE CONTENT -->


<!-- START LEFT 160x600 AD SPACE -->
<div class="ad_left">
<?php echo $ads_left; ?></div> <!-- END LEFT 160x600 AD SPACE -->

<!-- START RIGHT 160x600 AD SPACE -->
<div class="ad_right">
<?php echo $ads_right; ?></div> <!-- END RIGHT 160x600 AD SPACE -->


<!-- START FOOTER DIV -->
<div style="width:480px;margin: 0 auto;padding: 8px;text-align:center;">
</div>

<!-- Please don't remove this credit to support us -->
<center><div class="footer_txt">&copy; 2017 <a href="<?php echo $site_url; ?>"><?php echo $site_name; ?></a>  | Coded by alamin | Themed by: <a href="https://www.themesheet.cf" target="_blank">ThemeSheet.cf</a></div></center>
<!-- Please don't remove this credit to support us -->
 
</div><!-- END FOOTER -->
</div><!-- END PAGE WRAPPER -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
</body> <!-- END BODY -->
</html> <!-- END HTML -->

