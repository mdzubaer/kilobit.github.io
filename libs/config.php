<?php

$site_url = "http://example.com"; //Your website link, no slash at ending
                                  //i.e. http://example.com, not http://example.com/
$site_name = "Bitcoin Faucet"; //Your website name

$amount = 100; //satoshi
$faucet_timer = 5; //minutes
$referral = 70; //percent

$api_fh = "xxxxxx"; //FaucetHUB API Key
$api_fs = "xxxxxx"; //FaucetSystem API Key


//short links integration

$extra = 70; //extra satoshi for viewing short link
$btcms_api = "xxxxxx"; //BTC.ms API Token

// Get BTC.MS API HERE                                                      ==> http://tinyurl.com/btcms-api

//reCaptcha integration

$site_key = "xxxxxx"; //reCaptcha site key
$secret_key = "xxxxxx"; //reCaptcha secret key

$db_name = "xxx"; //don't change this

//Adspace management

// Please Don't Add  (((A-ADS))) code here .... This Will Cause 500 : Internal Server Error

// If You Want to place a-ads code then please go to index.php and manually enter code at correct place...

$ads_top1 = '<img src="http://placehold.it/468x60">'; //ad space at top --- 468x60
$ads_top2 = '<img src="http://placehold.it/728x90">'; //ad space at top --- 728x90
$ads_top3 = '<img src="http://placehold.it/728x90">'; //ad space at top --- 728x90
$ads_form = '<img src="http://placehold.it/300x250">'; //ad space above claim button --- 300x250
$ads_bottom1 = '<img src="http://placehold.it/728x90">'; //ad space at bottom --- 728x90
$ads_bottom2 = '<img src="http://placehold.it/728x90">'; //ad space at bottom --- 728x90
$ads_bottom3 = '<img src="http://placehold.it/728x90">'; //ad space at bottom --- 728x90
$ads_left = '<img src="http://placehold.it/160x600">'; //ad space at bottom left --- 160x600
$ads_right = '<img src="http://placehold.it/160x600">'; //ad space at bottom right --- 160x600 

?>