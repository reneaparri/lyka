<?php

@system("clear");
$var_289c4962919c8c887279a40923d0fcd6 = "[1;37;40m";
       echo "$var_289c4962919c8c887279a40923d0fcd6
";
			echo "

               ################################
               ##    LEEYKA Autorate v1.0    ##
               ################################
               ##  modded by rga software    ##
               ##        Nov 2021            ##
               ################################

                                               ";

echo "
";
		
$var_c4502e34f756e12522996d4b763a3080 = "[3;34;47m";
echo "$var_c4502e34f756e12522996d4b763a3080";
echo "
	-- -- --";
$var_c4502e34f756e12522996d4b763a3080 = "[3;34;47m";
echo "$var_c4502e34f756e12522996d4b763a3080
";
echo "
";
$var_dummyUserName = readline('Dummy username: ');
sleep(0);
$var_dummyPassword = readline('Dummy Password: ');
echo "
	-----------ENTER YOUR MAINS-----------
";
$var_Acct1 = readline('main account 1: ');
$var_Acct2 = readline('main account 2: ');
$var_Acct3 = readline('main account 3: ');
$var_Acct4 = readline('main account 4: ');

echo "
	-----------Random Device Info-----------
";
sleep(0);
$var_327982e8c3da8e17f9f4866973c1e0c3 = $var_4a537c2e25d98dd560bffd15d6784b76[rand(0,1776)];
$var_008fbd30a357980a2efb5588192c358b = array("$var_dummyUserName");
$var_54c63c29efe0c5f47f032c9c227fe248 = "shib_aparri";
$var_d0f277d6715348ce6667e2b8f5b7dd3d = array("$var_54c63c29efe0c5f47f032c9c227fe248");
$var_cfdc12bce3f78ea39505dc8a4902dec8 = "password";
$var_3e9c16f10dcd1c2109ec7c60e8b00bb5 = array("$var_cfdc12bce3f78ea39505dc8a4902dec8");
$var_56ab7e15f895a5620682137a326afb61 = "username";
$var_6216c69c4e59cce557cc07cf41a0260e = array("$var_56ab7e15f895a5620682137a326afb61");
$var_fe21b0cfde5c953a51edd0cde8d2ef41 = "shib_aparri";
$var_de2cdd217ec0f0a021373ca7c96b3c0d = rand(1,999);
$var_2a403303b77ae7af9b70692fd84ebfb6 = rand(1,999);
$var_e39044a6d112e9c7c969a157701a2eff = rand(1,999);
$var_4e7d02ddaf475300de28bab8457bead1 = rand(1,999);
echo "
brand : 	Tecno Spark 7 Pro
Imei : 		$var_29ead4ae0ae6617e4e0b815a4d4f0e56
Device ID : 	$var_8712a2d9488cb92d5ae61c3fbae0ff98
";
$var_f7ab77965df5d4b315a1b1ff1eae3435 = "[0;47;30m";
echo "$var_f7ab77965df5d4b315a1b1ff1eae3435";
sleep(0);


foreach ($var_008fbd30a357980a2efb5588192c358b as $var_bb97501121a371e1b5878fcb8c53e3b2){


$var_214e60c18123510348e9445e5c0a9196 = "https://identity.mylykaapps.com/useraccounts/login";
$var_c7cdffd817cb31d79645a6a5bf5dde5d = curl_init($var_214e60c18123510348e9445e5c0a9196);
curl_setopt($var_c7cdffd817cb31d79645a6a5bf5dde5d, CURLOPT_URL, $var_214e60c18123510348e9445e5c0a9196);
curl_setopt($var_c7cdffd817cb31d79645a6a5bf5dde5d, CURLOPT_POST, true);
curl_setopt($var_c7cdffd817cb31d79645a6a5bf5dde5d, CURLOPT_RETURNTRANSFER, true);
$var_edc2a5535c193ff5fa8f5fb686f57a17 = array("Content-Type: application/json", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)");
curl_setopt($var_c7cdffd817cb31d79645a6a5bf5dde5d, CURLOPT_HTTPHEADER, $var_edc2a5535c193ff5fa8f5fb686f57a17);
$var_052eb46e0e993bdc0c508e70d0202d38 = <<<DATA
{
  "countryCode": "PH",
  "device": {
    "deviceId":"$var_8712a2d9488cb92d5ae61c3fbae0ff98","deviceImei":"$var_29ead4ae0ae6617e4e0b815a4d4f0e56",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android $var_69e1c8ac9ad3102a8548e8b7284bb53d",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "28"
  },
  "password": "$var_dummyPassword",
  "username": "$var_dummyUserName"
}
DATA;
curl_setopt($var_c7cdffd817cb31d79645a6a5bf5dde5d, CURLOPT_POSTFIELDS, $var_052eb46e0e993bdc0c508e70d0202d38);
$var_154c6138cbedce09f09be9ac522246ba = curl_exec($var_c7cdffd817cb31d79645a6a5bf5dde5d);
curl_close($var_c7cdffd817cb31d79645a6a5bf5dde5d);
$var_68c4c0baa4f5dfa6b2e4f68e253be5e6 = json_decode($var_154c6138cbedce09f09be9ac522246ba);
$var_daa85091bb4187978ae0e9c762333d9b = $var_68c4c0baa4f5dfa6b2e4f68e253be5e6->message;
$var_93754e16e5de1dacc93f82016f2fae50 = $var_68c4c0baa4f5dfa6b2e4f68e253be5e6->status;
$var_3329cc017756754f4bd284b8aeef4b8c = $var_68c4c0baa4f5dfa6b2e4f68e253be5e6->data->username;
$var_d64042576877204dcf7c4f7c090dfdd4 = $var_68c4c0baa4f5dfa6b2e4f68e253be5e6->data->token->accessToken;
$var_c4502e34f756e12522996d4b763a3080 = "[3;34;47m";
echo "$var_c4502e34f756e12522996d4b763a3080";
echo "
		$var_3329cc017756754f4bd284b8aeef4b8c was logged in
";
$var_289c4962919c8c887279a40923d0fcd6 = "[1;30m";
       echo "$var_289c4962919c8c887279a40923d0fcd6";
$var_0b78a18633d986b3f5c69272934262e4 = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
$var_e3215274fbe6df6a872c4da526113325 = curl_init($var_0b78a18633d986b3f5c69272934262e4);
curl_setopt($var_e3215274fbe6df6a872c4da526113325, CURLOPT_URL, $var_0b78a18633d986b3f5c69272934262e4);
curl_setopt($var_e3215274fbe6df6a872c4da526113325, CURLOPT_RETURNTRANSFER, true);
$var_adae9ed680b5481265c0e322f73930bc = array("authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4",);
curl_setopt($var_e3215274fbe6df6a872c4da526113325, CURLOPT_HTTPHEADER, $var_adae9ed680b5481265c0e322f73930bc);
curl_setopt($var_e3215274fbe6df6a872c4da526113325, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($var_e3215274fbe6df6a872c4da526113325, CURLOPT_SSL_VERIFYPEER, false);
$var_c2f7bac83a2cd970bdd60665574ae007 = curl_exec($var_e3215274fbe6df6a872c4da526113325);
curl_close($var_e3215274fbe6df6a872c4da526113325);
$var_8da9d0cb760e2523b376de44b4c20fd9 = json_decode($var_c2f7bac83a2cd970bdd60665574ae007);
$var_440962181d21688d4745a88b578d378a = $var_8da9d0cb760e2523b376de44b4c20fd9->data->totalGem;
echo "
		DUMMY BALANCE : $var_440962181d21688d4745a88b578d378a GEMS
";
 $var_c4502e34f756e12522996d4b763a3080 = "[0;31;47m";
echo "$var_c4502e34f756e12522996d4b763a3080";
if ($var_93754e16e5de1dacc93f82016f2fae50 == 0) {
    echo "mali password ng dummy 
";
exit
        ;    
}
if ($var_93754e16e5de1dacc93f82016f2fae50 == 1) {
    $var_7021c576192f38e1c3be7daef45b3e82 = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$var_Acct1&os=android&pageIndex=1&pageSize=16";
    $var_efffe49d229910b5a79878f9f7f51b3b = curl_init($var_7021c576192f38e1c3be7daef45b3e82);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_URL, $var_7021c576192f38e1c3be7daef45b3e82);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_RETURNTRANSFER, true);
    $var_15562191be3d757a7b8fed4622742a53 = array("user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4",);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_HTTPHEADER, $var_15562191be3d757a7b8fed4622742a53);
    $var_f438e88e90d14dba88426a17151a975f = curl_exec($var_efffe49d229910b5a79878f9f7f51b3b);
    curl_close($var_efffe49d229910b5a79878f9f7f51b3b);
        $var_deb477e471fcd49a5dfb43636bea8286 = json_decode($var_f438e88e90d14dba88426a17151a975f, true);
    $var_a731e612483dba1a8ab11e855ad2edb6 = $var_deb477e471fcd49a5dfb43636bea8286["data"]["0"]["id"];
    $var_f1cba4892ae2b6bd8d642cf05764efc4 = $var_deb477e471fcd49a5dfb43636bea8286["data"]["0"]["userName"];
            
}
if ($var_Acct1 == $var_f1cba4892ae2b6bd8d642cf05764efc4) {
    $var_e99321c19eac331b3ace2f97eab18d4c = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$var_a731e612483dba1a8ab11e855ad2edb6&category=ALL";
    $var_3c92c6400398859c0dda4b40f41ea8f5 = curl_init($var_e99321c19eac331b3ace2f97eab18d4c);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_URL, $var_e99321c19eac331b3ace2f97eab18d4c);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_RETURNTRANSFER, true);
    $var_4c24fb981b231c41b79654148df7bf87 = array("authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)",);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_HTTPHEADER, $var_4c24fb981b231c41b79654148df7bf87);
    $var_6e6c9c8835a123c6fb44fed2ca7ac1d4 = curl_exec($var_3c92c6400398859c0dda4b40f41ea8f5);
    curl_close($var_3c92c6400398859c0dda4b40f41ea8f5);
    $var_6e232911eee6ae9d11c650ee33a55ff1 = json_decode($var_6e6c9c8835a123c6fb44fed2ca7ac1d4, true);
    $var_787560ac17316071d30bf972fa8b74f9 = json_decode($var_6e6c9c8835a123c6fb44fed2ca7ac1d4, true);
    $var_b047a37f080e3957c22cf641bd86ea25 = $var_787560ac17316071d30bf972fa8b74f9["data"]["0"]["id"];
    $var_73bd797bc5f8025a096059e3875db119 = $var_787560ac17316071d30bf972fa8b74f9["data"]["1"]["id"];
    $var_29e793791b461329eca4658ba7739862 = $var_787560ac17316071d30bf972fa8b74f9["data"]["2"]["id"];
    $var_fe542dde6622d3aac180a1bef6e0a48a = $var_787560ac17316071d30bf972fa8b74f9["data"]["3"]["id"];
    $var_0a549017caea9cbb8a4a2a8015fb56ec = $var_787560ac17316071d30bf972fa8b74f9["data"]["4"]["id"];
    $var_c403d734b2435327dcc73726664024b6 = $var_787560ac17316071d30bf972fa8b74f9["data"]["5"]["id"];
    $var_b0b1ae3e9db26b69c991d48162536b73 = $var_787560ac17316071d30bf972fa8b74f9["data"]["6"]["id"];
    $var_cd6bebd7945e37aa541421f1f5316950 = $var_787560ac17316071d30bf972fa8b74f9["data"]["7"]["id"];
    $var_c4c8b109ef2f5cac69b6b2209d758aba = $var_787560ac17316071d30bf972fa8b74f9["data"]["8"]["id"];
    $var_b59d15755668b01b8f5ddcd48add585f = $var_787560ac17316071d30bf972fa8b74f9["data"]["9"]["id"];
    $var_afd10ffbc3f999b54fd5b5a5a5bcf957 = $var_787560ac17316071d30bf972fa8b74f9["data"]["10"]["id"];

}
$var_45671f1c609fe2e11278c21832f229c3 = $var_787560ac17316071d30bf972fa8b74f9["status"];
if ($var_45671f1c609fe2e11278c21832f229c3 == 0) {
    echo "check your inputs
";
 } elseif ($var_45671f1c609fe2e11278c21832f229c3 == 1)



	   $var_c03b52a7ea3ab3def3f5082d2eea9e57 = "fcbe87b6$var_fb9f86ed1121aa6b7fb0ba8dc30c35d0$var_8712a2d9488cb92d5ae61c3fbae0ff98";
       fn_a94c648509ee9a578b9423aecacec7b1($var_3329cc017756754f4bd284b8aeef4b8c, $var_d64042576877204dcf7c4f7c090dfdd4, $var_c03b52a7ea3ab3def3f5082d2eea9e57);
	   addmoment($var_3329cc017756754f4bd284b8aeef4b8c, $var_d64042576877204dcf7c4f7c090dfdd4, $var_c03b52a7ea3ab3def3f5082d2eea9e57);

echo "
";
$var_c4502e34f756e12522996d4b763a3080 = "[3;34;47m";
echo "$var_c4502e34f756e12522996d4b763a3080";
echo "
	$var_3329cc017756754f4bd284b8aeef4b8c IS RATING POST OF $var_f1cba4892ae2b6bd8d642cf05764efc4";
$var_289c4962919c8c887279a40923d0fcd6 = "[1;30m";
       echo "$var_289c4962919c8c887279a40923d0fcd6";
echo "
";
        sleep(1);
    $var_ca82733491623ed9ca5b46aa68429a45 = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $var_3cd73c3cfdd29503f59040be5a7a7ec1 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_POST, true);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_RETURNTRANSFER, true);
    $var_217cc9ea7e60233b3901af169f965155 = array("authorization:Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_1654df2bfca35b2d391a907afa1a9b11 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b047a37f080e3957c22cf641bd86ea25,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_POSTFIELDS, $var_1654df2bfca35b2d391a907afa1a9b11);
    $var_190ee7ebf58b280f1ce3de52a62e9958 = curl_exec($var_3cd73c3cfdd29503f59040be5a7a7ec1);
    curl_close($var_3cd73c3cfdd29503f59040be5a7a7ec1);
        $var_9b40b31debd4c358ecaf42e97ea4e4a0 = json_decode($var_190ee7ebf58b280f1ce3de52a62e9958);
    echo $var_9b40b31debd4c358ecaf42e97ea4e4a0->message;
    echo "
";
        $var_9ffa06fcae284748eb341b284e350332 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POST, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_1f96d4c0dcf578c28674ff07f69bc23a = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_73bd797bc5f8025a096059e3875db119,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POSTFIELDS, $var_1f96d4c0dcf578c28674ff07f69bc23a);
    $var_f885db86862f6d83bb915471997bcd56 = curl_exec($var_9ffa06fcae284748eb341b284e350332);
    curl_close($var_9ffa06fcae284748eb341b284e350332);
        $var_54c8160b823766a7d8d8992d523d0ccd = json_decode($var_f885db86862f6d83bb915471997bcd56);
    echo $var_54c8160b823766a7d8d8992d523d0ccd->message;
    echo "
";
        $var_c26d92c6a901d8b0566c50ecd5412190 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POST, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_aa92cea60be55ea2cf8b5f799315c3bf = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_29e793791b461329eca4658ba7739862,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POSTFIELDS, $var_aa92cea60be55ea2cf8b5f799315c3bf);
    $var_a14919b6047e74aa090ee5172e03d730 = curl_exec($var_c26d92c6a901d8b0566c50ecd5412190);
    curl_close($var_c26d92c6a901d8b0566c50ecd5412190);
        $var_4e7646e381c62f7ca291859eb2e14784 = json_decode($var_a14919b6047e74aa090ee5172e03d730);
    echo $var_4e7646e381c62f7ca291859eb2e14784->message;
    echo "
";
        $var_a9c2b4f1250b850f770c0d908a0825b0 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POST, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_3029da6d764db5aa1aa59bee0a550148 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_fe542dde6622d3aac180a1bef6e0a48a,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6 
}
DATA;
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POSTFIELDS, $var_3029da6d764db5aa1aa59bee0a550148);
    $var_52bd0a01acde2984afbeac91191ea16e = curl_exec($var_a9c2b4f1250b850f770c0d908a0825b0);
    curl_close($var_a9c2b4f1250b850f770c0d908a0825b0);
        $var_c8d7d3b0908039e69df8cf60518dea81 = json_decode($var_52bd0a01acde2984afbeac91191ea16e);
    echo $var_c8d7d3b0908039e69df8cf60518dea81->message;
    echo "
";
        $var_9f6d21db27b2392afc04091d3aca24a6 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POST, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_b9a40d42a121f75dcd42875744db8554 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_0a549017caea9cbb8a4a2a8015fb56ec,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POSTFIELDS, $var_b9a40d42a121f75dcd42875744db8554);
    $var_36b1c171d6dc69e6bcd8070966d4b469 = curl_exec($var_9f6d21db27b2392afc04091d3aca24a6);
    curl_close($var_9f6d21db27b2392afc04091d3aca24a6);
        $var_8afc59eae671e362e43e04e3ace3f981 = json_decode($var_36b1c171d6dc69e6bcd8070966d4b469);
    echo $var_8afc59eae671e362e43e04e3ace3f981->message;
    echo "
";
        $var_5a7a8ddf8b034c55eadd105c418f4357 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_POST, true);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_e4cd8c20ac8eee21c02fedc007fc6421 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c403d734b2435327dcc73726664024b6,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_POSTFIELDS, $var_e4cd8c20ac8eee21c02fedc007fc6421);
    $var_b07ecc7222660cabc8db08ff142c4351 = curl_exec($var_5a7a8ddf8b034c55eadd105c418f4357);
    curl_close($var_5a7a8ddf8b034c55eadd105c418f4357);
        $var_e4ee103c9029fdb50c0e64b8ae97bfe5 = json_decode($var_b07ecc7222660cabc8db08ff142c4351);
    echo $var_e4ee103c9029fdb50c0e64b8ae97bfe5->message;
    echo "
";
        $var_bf2ea328962a704e1d34cd18508ee99d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POST, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_bc5bd5fe258bd2b85b65d8f09b547f08 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b0b1ae3e9db26b69c991d48162536b73,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POSTFIELDS, $var_bc5bd5fe258bd2b85b65d8f09b547f08);
    $var_2c44cdd3d5d92dcc52543cba6344e422 = curl_exec($var_bf2ea328962a704e1d34cd18508ee99d);
    curl_close($var_bf2ea328962a704e1d34cd18508ee99d);
        $var_54d67e1de8f59cbfd54557f63bf4308c = json_decode($var_2c44cdd3d5d92dcc52543cba6344e422);
    echo $var_54d67e1de8f59cbfd54557f63bf4308c->message;
    echo "
";
        $var_9e9c48efc1ffe3c8a21f60649edb266d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POST, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_0ead0a6137c013cd2daacc52b749f118 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_cd6bebd7945e37aa541421f1f5316950,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POSTFIELDS, $var_0ead0a6137c013cd2daacc52b749f118);
    $var_e4cdaf12e21f8dedd6eebfb26c04a7dd = curl_exec($var_9e9c48efc1ffe3c8a21f60649edb266d);
    curl_close($var_9e9c48efc1ffe3c8a21f60649edb266d);
        $var_81302dd712942e53d47b070efca44cd6 = json_decode($var_e4cdaf12e21f8dedd6eebfb26c04a7dd);
    echo $var_81302dd712942e53d47b070efca44cd6->message;
    echo "
";
        $var_1cb58178b89b1e3325c4988dd240b77d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POST, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_b100451180619cf85e7871c58d5f7eff = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c4c8b109ef2f5cac69b6b2209d758aba,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POSTFIELDS, $var_b100451180619cf85e7871c58d5f7eff);
    $var_7e69f675321f6663457de160115bfcb6 = curl_exec($var_1cb58178b89b1e3325c4988dd240b77d);
    curl_close($var_1cb58178b89b1e3325c4988dd240b77d);
        $var_a627b8e913fd2dcdcebf78b992ee5517 = json_decode($var_7e69f675321f6663457de160115bfcb6);
    echo $var_a627b8e913fd2dcdcebf78b992ee5517->message;
    echo "
";
        $var_0cb0fc4c5f0e832577f151f80895fb18 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POST, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_dd667fc58619e75e9bcfdce7a87595fb = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b59d15755668b01b8f5ddcd48add585f,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POSTFIELDS, $var_dd667fc58619e75e9bcfdce7a87595fb);
    $var_09f130601a363f7e4dd44103994e5733 = curl_exec($var_0cb0fc4c5f0e832577f151f80895fb18);
    curl_close($var_0cb0fc4c5f0e832577f151f80895fb18);
        $var_86783401c428d928d4acf6b42ce29a17 = json_decode($var_09f130601a363f7e4dd44103994e5733);
    echo $var_86783401c428d928d4acf6b42ce29a17->message;
    echo "
";
      $var_3fd0da38b59460225adfd6550395b597 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_POST, true);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_59fbd9200499120d847d9b5afd316014 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_afd10ffbc3f999b54fd5b5a5a5bcf957,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_POSTFIELDS, $var_59fbd9200499120d847d9b5afd316014);
    $var_500ec3a64caf05140ed55589b136a885 = curl_exec($var_3fd0da38b59460225adfd6550395b597);
    curl_close($var_3fd0da38b59460225adfd6550395b597);
        $var_e002393bf51b9345376b872dfc002ea6 = json_decode($var_500ec3a64caf05140ed55589b136a885);
    echo $var_e002393bf51b9345376b872dfc002ea6->message;
	echo "$var_5dae906c4a8cbbd417660fe9b59c268d
";
 
/* Next Account 

*/

$var_5075c332cbb6ae112b9e24c561e5d733 = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$var_Acct2&os=android&pageIndex=1&pageSize=16";
    $var_cbc852ad6af6085ad828d1a2aa8590ef = curl_init($var_5075c332cbb6ae112b9e24c561e5d733);
    curl_setopt($var_cbc852ad6af6085ad828d1a2aa8590ef, CURLOPT_URL, $var_5075c332cbb6ae112b9e24c561e5d733);
    curl_setopt($var_cbc852ad6af6085ad828d1a2aa8590ef, CURLOPT_RETURNTRANSFER, true);
    $var_aa51152985c86d9741ff0983b840e136 = array("user-agent: Lyka/3.6.0 (com.thingsilikeapp; build:800 Android P 29)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4",);
    curl_setopt($var_cbc852ad6af6085ad828d1a2aa8590ef, CURLOPT_HTTPHEADER, $var_aa51152985c86d9741ff0983b840e136);
    $var_9440a0cf004771e3569824ce70deb48f = curl_exec($var_cbc852ad6af6085ad828d1a2aa8590ef);
    curl_close($var_cbc852ad6af6085ad828d1a2aa8590ef);
    $var_fdbfd7c98dd63db011e61a039bceab63 = json_decode($var_9440a0cf004771e3569824ce70deb48f, true);
    $var_025808619b72be46aaece458eec63adf = $var_fdbfd7c98dd63db011e61a039bceab63["data"]["0"]["id"];
    

$var_363edaa7562d537ef55dc5842996ea6d = "https://users.mylykaapps.com/api/v3/Users/FollowUser";
    $var_efd326262f5acbb6d98f7f3f761b9d41 = curl_init($var_363edaa7562d537ef55dc5842996ea6d);
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_URL, $var_363edaa7562d537ef55dc5842996ea6d);
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41 ,CURLOPT_POST, true);
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_RETURNTRANSFER, true);
    
    $var_9e985a95348eac47f0f8ff5e4514e681 = array("user-agent: Lyka/3.6.0 (com.thingsilikeapp; build:800 Android P 29)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "accept-encoding: gzip","Content-Type: application/json; charset=UTF-8");
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_HTTPHEADER, $var_9e985a95348eac47f0f8ff5e4514e681);
    
    $var_871752942f53deb7f6e80ee08192de65 = '{"device":{"deviceId":"26953d953273f57f","deviceImei":"26953d953273f57f","deviceModel":"realme RMX2061","deviceName":"android","deviceOs":"Android P ","isEmulator":false,"osVersion":"29"},
    "group":"Friends","userId":"'.$var_025808619b72be46aaece458eec63adf.'"}';
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_POSTFIELDS, $var_871752942f53deb7f6e80ee08192de65);
    $var_3fc1e90be37d2582a0e01e39f4e5efa3 = curl_exec($var_efd326262f5acbb6d98f7f3f761b9d41);
    curl_close($var_efd326262f5acbb6d98f7f3f761b9d41);
   $var_a64f3e8342b19bc044b7a478352accb1 = json_decode($var_3fc1e90be37d2582a0e01e39f4e5efa3);
   $var_819f281ecbceddedb6dfc87316a6a95c = $var_a64f3e8342b19bc044b7a478352accb1->message;
    echo "1 - $var_819f281ecbceddedb6dfc87316a6a95c
";

if ($var_93754e16e5de1dacc93f82016f2fae50 == 1) {
    $var_7021c576192f38e1c3be7daef45b3e82 = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$var_Acct2&os=android&pageIndex=1&pageSize=16";
    $var_efffe49d229910b5a79878f9f7f51b3b = curl_init($var_7021c576192f38e1c3be7daef45b3e82);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_URL, $var_7021c576192f38e1c3be7daef45b3e82);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_RETURNTRANSFER, true);
    $var_15562191be3d757a7b8fed4622742a53 = array("user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4",);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_HTTPHEADER, $var_15562191be3d757a7b8fed4622742a53);
    $var_f438e88e90d14dba88426a17151a975f = curl_exec($var_efffe49d229910b5a79878f9f7f51b3b);
    curl_close($var_efffe49d229910b5a79878f9f7f51b3b);
        $var_deb477e471fcd49a5dfb43636bea8286 = json_decode($var_f438e88e90d14dba88426a17151a975f, true);
    $var_a731e612483dba1a8ab11e855ad2edb6 = $var_deb477e471fcd49a5dfb43636bea8286["data"]["0"]["id"];
    $var_f1cba4892ae2b6bd8d642cf05764efc4 = $var_deb477e471fcd49a5dfb43636bea8286["data"]["0"]["userName"];
            
}
if ($var_Acct2 == $var_f1cba4892ae2b6bd8d642cf05764efc4) {
    $var_e99321c19eac331b3ace2f97eab18d4c = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$var_a731e612483dba1a8ab11e855ad2edb6&category=ALL";
    $var_3c92c6400398859c0dda4b40f41ea8f5 = curl_init($var_e99321c19eac331b3ace2f97eab18d4c);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_URL, $var_e99321c19eac331b3ace2f97eab18d4c);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_RETURNTRANSFER, true);
    $var_4c24fb981b231c41b79654148df7bf87 = array("authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)",);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_HTTPHEADER, $var_4c24fb981b231c41b79654148df7bf87);
    $var_6e6c9c8835a123c6fb44fed2ca7ac1d4 = curl_exec($var_3c92c6400398859c0dda4b40f41ea8f5);
    curl_close($var_3c92c6400398859c0dda4b40f41ea8f5);
    $var_6e232911eee6ae9d11c650ee33a55ff1 = json_decode($var_6e6c9c8835a123c6fb44fed2ca7ac1d4, true);
    $var_787560ac17316071d30bf972fa8b74f9 = json_decode($var_6e6c9c8835a123c6fb44fed2ca7ac1d4, true);
    $var_b047a37f080e3957c22cf641bd86ea25 = $var_787560ac17316071d30bf972fa8b74f9["data"]["0"]["id"];
    $var_73bd797bc5f8025a096059e3875db119 = $var_787560ac17316071d30bf972fa8b74f9["data"]["1"]["id"];
    $var_29e793791b461329eca4658ba7739862 = $var_787560ac17316071d30bf972fa8b74f9["data"]["2"]["id"];
    $var_fe542dde6622d3aac180a1bef6e0a48a = $var_787560ac17316071d30bf972fa8b74f9["data"]["3"]["id"];
    $var_0a549017caea9cbb8a4a2a8015fb56ec = $var_787560ac17316071d30bf972fa8b74f9["data"]["4"]["id"];
    $var_c403d734b2435327dcc73726664024b6 = $var_787560ac17316071d30bf972fa8b74f9["data"]["5"]["id"];
    $var_b0b1ae3e9db26b69c991d48162536b73 = $var_787560ac17316071d30bf972fa8b74f9["data"]["6"]["id"];
    $var_cd6bebd7945e37aa541421f1f5316950 = $var_787560ac17316071d30bf972fa8b74f9["data"]["7"]["id"];
    $var_c4c8b109ef2f5cac69b6b2209d758aba = $var_787560ac17316071d30bf972fa8b74f9["data"]["8"]["id"];
    $var_b59d15755668b01b8f5ddcd48add585f = $var_787560ac17316071d30bf972fa8b74f9["data"]["9"]["id"];
    $var_afd10ffbc3f999b54fd5b5a5a5bcf957 = $var_787560ac17316071d30bf972fa8b74f9["data"]["10"]["id"];
}
$var_45671f1c609fe2e11278c21832f229c3 = $var_787560ac17316071d30bf972fa8b74f9["status"];
if ($var_45671f1c609fe2e11278c21832f229c3 == 0) {
    echo "check your inputs
";
 } elseif ($var_45671f1c609fe2e11278c21832f229c3 == 1)
$var_c4502e34f756e12522996d4b763a3080 = "[3;34;47m";
echo "$var_c4502e34f756e12522996d4b763a3080";
echo "
	$var_3329cc017756754f4bd284b8aeef4b8c IS RATING POST OF $var_f1cba4892ae2b6bd8d642cf05764efc4";
$var_289c4962919c8c887279a40923d0fcd6 = "[1;30m";
       echo "$var_289c4962919c8c887279a40923d0fcd6";
echo "
";
        sleep(1);
    $var_ca82733491623ed9ca5b46aa68429a45 = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $var_3cd73c3cfdd29503f59040be5a7a7ec1 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_POST, true);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_RETURNTRANSFER, true);
    $var_217cc9ea7e60233b3901af169f965155 = array("authorization:Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_1654df2bfca35b2d391a907afa1a9b11 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b047a37f080e3957c22cf641bd86ea25,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_POSTFIELDS, $var_1654df2bfca35b2d391a907afa1a9b11);
    $var_190ee7ebf58b280f1ce3de52a62e9958 = curl_exec($var_3cd73c3cfdd29503f59040be5a7a7ec1);
    curl_close($var_3cd73c3cfdd29503f59040be5a7a7ec1);
        $var_9b40b31debd4c358ecaf42e97ea4e4a0 = json_decode($var_190ee7ebf58b280f1ce3de52a62e9958);
    echo $var_9b40b31debd4c358ecaf42e97ea4e4a0->message;
    echo "
";
        $var_9ffa06fcae284748eb341b284e350332 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POST, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_1f96d4c0dcf578c28674ff07f69bc23a = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_73bd797bc5f8025a096059e3875db119,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POSTFIELDS, $var_1f96d4c0dcf578c28674ff07f69bc23a);
    $var_f885db86862f6d83bb915471997bcd56 = curl_exec($var_9ffa06fcae284748eb341b284e350332);
    curl_close($var_9ffa06fcae284748eb341b284e350332);
        $var_54c8160b823766a7d8d8992d523d0ccd = json_decode($var_f885db86862f6d83bb915471997bcd56);
    echo $var_54c8160b823766a7d8d8992d523d0ccd->message;
    echo "
";
        $var_c26d92c6a901d8b0566c50ecd5412190 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POST, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_aa92cea60be55ea2cf8b5f799315c3bf = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_29e793791b461329eca4658ba7739862,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POSTFIELDS, $var_aa92cea60be55ea2cf8b5f799315c3bf);
    $var_a14919b6047e74aa090ee5172e03d730 = curl_exec($var_c26d92c6a901d8b0566c50ecd5412190);
    curl_close($var_c26d92c6a901d8b0566c50ecd5412190);
        $var_4e7646e381c62f7ca291859eb2e14784 = json_decode($var_a14919b6047e74aa090ee5172e03d730);
    echo $var_4e7646e381c62f7ca291859eb2e14784->message;
    echo "
";
        $var_a9c2b4f1250b850f770c0d908a0825b0 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POST, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_3029da6d764db5aa1aa59bee0a550148 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_fe542dde6622d3aac180a1bef6e0a48a,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6 
}
DATA;
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POSTFIELDS, $var_3029da6d764db5aa1aa59bee0a550148);
    $var_52bd0a01acde2984afbeac91191ea16e = curl_exec($var_a9c2b4f1250b850f770c0d908a0825b0);
    curl_close($var_a9c2b4f1250b850f770c0d908a0825b0);
        $var_c8d7d3b0908039e69df8cf60518dea81 = json_decode($var_52bd0a01acde2984afbeac91191ea16e);
    echo $var_c8d7d3b0908039e69df8cf60518dea81->message;
    echo "
";
        $var_9f6d21db27b2392afc04091d3aca24a6 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POST, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_b9a40d42a121f75dcd42875744db8554 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_0a549017caea9cbb8a4a2a8015fb56ec,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POSTFIELDS, $var_b9a40d42a121f75dcd42875744db8554);
    $var_36b1c171d6dc69e6bcd8070966d4b469 = curl_exec($var_9f6d21db27b2392afc04091d3aca24a6);
    curl_close($var_9f6d21db27b2392afc04091d3aca24a6);
        $var_8afc59eae671e362e43e04e3ace3f981 = json_decode($var_36b1c171d6dc69e6bcd8070966d4b469);
    echo $var_8afc59eae671e362e43e04e3ace3f981->message;
    echo "
";
        $var_5a7a8ddf8b034c55eadd105c418f4357 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_POST, true);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_e4cd8c20ac8eee21c02fedc007fc6421 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c403d734b2435327dcc73726664024b6,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_POSTFIELDS, $var_e4cd8c20ac8eee21c02fedc007fc6421);
    $var_b07ecc7222660cabc8db08ff142c4351 = curl_exec($var_5a7a8ddf8b034c55eadd105c418f4357);
    curl_close($var_5a7a8ddf8b034c55eadd105c418f4357);
        $var_e4ee103c9029fdb50c0e64b8ae97bfe5 = json_decode($var_b07ecc7222660cabc8db08ff142c4351);
    echo $var_e4ee103c9029fdb50c0e64b8ae97bfe5->message;
    echo "
";
        $var_bf2ea328962a704e1d34cd18508ee99d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POST, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_bc5bd5fe258bd2b85b65d8f09b547f08 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b0b1ae3e9db26b69c991d48162536b73,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POSTFIELDS, $var_bc5bd5fe258bd2b85b65d8f09b547f08);
    $var_2c44cdd3d5d92dcc52543cba6344e422 = curl_exec($var_bf2ea328962a704e1d34cd18508ee99d);
    curl_close($var_bf2ea328962a704e1d34cd18508ee99d);
        $var_54d67e1de8f59cbfd54557f63bf4308c = json_decode($var_2c44cdd3d5d92dcc52543cba6344e422);
    echo $var_54d67e1de8f59cbfd54557f63bf4308c->message;
    echo "
";
        $var_9e9c48efc1ffe3c8a21f60649edb266d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POST, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_0ead0a6137c013cd2daacc52b749f118 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_cd6bebd7945e37aa541421f1f5316950,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POSTFIELDS, $var_0ead0a6137c013cd2daacc52b749f118);
    $var_e4cdaf12e21f8dedd6eebfb26c04a7dd = curl_exec($var_9e9c48efc1ffe3c8a21f60649edb266d);
    curl_close($var_9e9c48efc1ffe3c8a21f60649edb266d);
        $var_81302dd712942e53d47b070efca44cd6 = json_decode($var_e4cdaf12e21f8dedd6eebfb26c04a7dd);
    echo $var_81302dd712942e53d47b070efca44cd6->message;
    echo "
";
        $var_1cb58178b89b1e3325c4988dd240b77d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POST, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_b100451180619cf85e7871c58d5f7eff = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c4c8b109ef2f5cac69b6b2209d758aba,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POSTFIELDS, $var_b100451180619cf85e7871c58d5f7eff);
    $var_7e69f675321f6663457de160115bfcb6 = curl_exec($var_1cb58178b89b1e3325c4988dd240b77d);
    curl_close($var_1cb58178b89b1e3325c4988dd240b77d);
        $var_a627b8e913fd2dcdcebf78b992ee5517 = json_decode($var_7e69f675321f6663457de160115bfcb6);
    echo $var_a627b8e913fd2dcdcebf78b992ee5517->message;
    echo "
";
        $var_0cb0fc4c5f0e832577f151f80895fb18 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POST, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_dd667fc58619e75e9bcfdce7a87595fb = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b59d15755668b01b8f5ddcd48add585f,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POSTFIELDS, $var_dd667fc58619e75e9bcfdce7a87595fb);
    $var_09f130601a363f7e4dd44103994e5733 = curl_exec($var_0cb0fc4c5f0e832577f151f80895fb18);
    curl_close($var_0cb0fc4c5f0e832577f151f80895fb18);
        $var_86783401c428d928d4acf6b42ce29a17 = json_decode($var_09f130601a363f7e4dd44103994e5733);
    echo $var_86783401c428d928d4acf6b42ce29a17->message;
    echo "
";
      $var_3fd0da38b59460225adfd6550395b597 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_POST, true);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_59fbd9200499120d847d9b5afd316014 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_afd10ffbc3f999b54fd5b5a5a5bcf957,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_POSTFIELDS, $var_59fbd9200499120d847d9b5afd316014);
    $var_500ec3a64caf05140ed55589b136a885 = curl_exec($var_3fd0da38b59460225adfd6550395b597);
    curl_close($var_3fd0da38b59460225adfd6550395b597);
        $var_e002393bf51b9345376b872dfc002ea6 = json_decode($var_500ec3a64caf05140ed55589b136a885);
    echo $var_e002393bf51b9345376b872dfc002ea6->message;
  
echo "$var_5dae906c4a8cbbd417660fe9b59c268d
";
/*
Account #3
*/

$var_5075c332cbb6ae112b9e24c561e5d733 = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$var_Acct3&os=android&pageIndex=1&pageSize=16";
    $var_cbc852ad6af6085ad828d1a2aa8590ef = curl_init($var_5075c332cbb6ae112b9e24c561e5d733);
    curl_setopt($var_cbc852ad6af6085ad828d1a2aa8590ef, CURLOPT_URL, $var_5075c332cbb6ae112b9e24c561e5d733);
    curl_setopt($var_cbc852ad6af6085ad828d1a2aa8590ef, CURLOPT_RETURNTRANSFER, true);
    $var_aa51152985c86d9741ff0983b840e136 = array("user-agent: Lyka/3.6.0 (com.thingsilikeapp; build:800 Android P 29)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4",);
    curl_setopt($var_cbc852ad6af6085ad828d1a2aa8590ef, CURLOPT_HTTPHEADER, $var_aa51152985c86d9741ff0983b840e136);
    $var_9440a0cf004771e3569824ce70deb48f = curl_exec($var_cbc852ad6af6085ad828d1a2aa8590ef);
    curl_close($var_cbc852ad6af6085ad828d1a2aa8590ef);
    $var_fdbfd7c98dd63db011e61a039bceab63 = json_decode($var_9440a0cf004771e3569824ce70deb48f, true);
    $var_025808619b72be46aaece458eec63adf = $var_fdbfd7c98dd63db011e61a039bceab63["data"]["0"]["id"];
    

$var_363edaa7562d537ef55dc5842996ea6d = "https://users.mylykaapps.com/api/v3/Users/FollowUser";
    $var_efd326262f5acbb6d98f7f3f761b9d41 = curl_init($var_363edaa7562d537ef55dc5842996ea6d);
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_URL, $var_363edaa7562d537ef55dc5842996ea6d);
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41 ,CURLOPT_POST, true);
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_RETURNTRANSFER, true);
    
    $var_9e985a95348eac47f0f8ff5e4514e681 = array("user-agent: Lyka/3.6.0 (com.thingsilikeapp; build:800 Android P 29)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "accept-encoding: gzip","Content-Type: application/json; charset=UTF-8");
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_HTTPHEADER, $var_9e985a95348eac47f0f8ff5e4514e681);
    
    $var_871752942f53deb7f6e80ee08192de65 = '{"device":{"deviceId":"26953d953273f57f","deviceImei":"26953d953273f57f","deviceModel":"realme RMX2061","deviceName":"android","deviceOs":"Android P ","isEmulator":false,"osVersion":"29"},
    "group":"Friends","userId":"'.$var_025808619b72be46aaece458eec63adf.'"}';
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_POSTFIELDS, $var_871752942f53deb7f6e80ee08192de65);
    $var_3fc1e90be37d2582a0e01e39f4e5efa3 = curl_exec($var_efd326262f5acbb6d98f7f3f761b9d41);
    curl_close($var_efd326262f5acbb6d98f7f3f761b9d41);
   $var_a64f3e8342b19bc044b7a478352accb1 = json_decode($var_3fc1e90be37d2582a0e01e39f4e5efa3);
   $var_819f281ecbceddedb6dfc87316a6a95c = $var_a64f3e8342b19bc044b7a478352accb1->message;
    echo "1 - $var_819f281ecbceddedb6dfc87316a6a95c
";
if ($var_93754e16e5de1dacc93f82016f2fae50 == 1) {
    $var_7021c576192f38e1c3be7daef45b3e82 = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$var_Acct3&os=android&pageIndex=1&pageSize=16";
    $var_efffe49d229910b5a79878f9f7f51b3b = curl_init($var_7021c576192f38e1c3be7daef45b3e82);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_URL, $var_7021c576192f38e1c3be7daef45b3e82);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_RETURNTRANSFER, true);
    $var_15562191be3d757a7b8fed4622742a53 = array("user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4",);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_HTTPHEADER, $var_15562191be3d757a7b8fed4622742a53);
    $var_f438e88e90d14dba88426a17151a975f = curl_exec($var_efffe49d229910b5a79878f9f7f51b3b);
    curl_close($var_efffe49d229910b5a79878f9f7f51b3b);
        $var_deb477e471fcd49a5dfb43636bea8286 = json_decode($var_f438e88e90d14dba88426a17151a975f, true);
    $var_a731e612483dba1a8ab11e855ad2edb6 = $var_deb477e471fcd49a5dfb43636bea8286["data"]["0"]["id"];
    $var_f1cba4892ae2b6bd8d642cf05764efc4 = $var_deb477e471fcd49a5dfb43636bea8286["data"]["0"]["userName"];
            
}
if ($var_Acct3 == $var_f1cba4892ae2b6bd8d642cf05764efc4) {
    $var_e99321c19eac331b3ace2f97eab18d4c = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$var_a731e612483dba1a8ab11e855ad2edb6&category=ALL";
    $var_3c92c6400398859c0dda4b40f41ea8f5 = curl_init($var_e99321c19eac331b3ace2f97eab18d4c);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_URL, $var_e99321c19eac331b3ace2f97eab18d4c);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_RETURNTRANSFER, true);
    $var_4c24fb981b231c41b79654148df7bf87 = array("authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)",);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_HTTPHEADER, $var_4c24fb981b231c41b79654148df7bf87);
    $var_6e6c9c8835a123c6fb44fed2ca7ac1d4 = curl_exec($var_3c92c6400398859c0dda4b40f41ea8f5);
    curl_close($var_3c92c6400398859c0dda4b40f41ea8f5);
    $var_6e232911eee6ae9d11c650ee33a55ff1 = json_decode($var_6e6c9c8835a123c6fb44fed2ca7ac1d4, true);
    $var_787560ac17316071d30bf972fa8b74f9 = json_decode($var_6e6c9c8835a123c6fb44fed2ca7ac1d4, true);
    $var_b047a37f080e3957c22cf641bd86ea25 = $var_787560ac17316071d30bf972fa8b74f9["data"]["0"]["id"];
    $var_73bd797bc5f8025a096059e3875db119 = $var_787560ac17316071d30bf972fa8b74f9["data"]["1"]["id"];
    $var_29e793791b461329eca4658ba7739862 = $var_787560ac17316071d30bf972fa8b74f9["data"]["2"]["id"];
    $var_fe542dde6622d3aac180a1bef6e0a48a = $var_787560ac17316071d30bf972fa8b74f9["data"]["3"]["id"];
    $var_0a549017caea9cbb8a4a2a8015fb56ec = $var_787560ac17316071d30bf972fa8b74f9["data"]["4"]["id"];
    $var_c403d734b2435327dcc73726664024b6 = $var_787560ac17316071d30bf972fa8b74f9["data"]["5"]["id"];
    $var_b0b1ae3e9db26b69c991d48162536b73 = $var_787560ac17316071d30bf972fa8b74f9["data"]["6"]["id"];
    $var_cd6bebd7945e37aa541421f1f5316950 = $var_787560ac17316071d30bf972fa8b74f9["data"]["7"]["id"];
    $var_c4c8b109ef2f5cac69b6b2209d758aba = $var_787560ac17316071d30bf972fa8b74f9["data"]["8"]["id"];
    $var_b59d15755668b01b8f5ddcd48add585f = $var_787560ac17316071d30bf972fa8b74f9["data"]["9"]["id"];
    $var_afd10ffbc3f999b54fd5b5a5a5bcf957 = $var_787560ac17316071d30bf972fa8b74f9["data"]["10"]["id"];
}
$var_45671f1c609fe2e11278c21832f229c3 = $var_787560ac17316071d30bf972fa8b74f9["status"];
if ($var_45671f1c609fe2e11278c21832f229c3 == 0) {
    echo "check your inputs
";
 } elseif ($var_45671f1c609fe2e11278c21832f229c3 == 1)
$var_c4502e34f756e12522996d4b763a3080 = "[3;34;47m";
echo "$var_c4502e34f756e12522996d4b763a3080";
echo "
	$var_3329cc017756754f4bd284b8aeef4b8c IS RATING POST OF $var_f1cba4892ae2b6bd8d642cf05764efc4";
$var_289c4962919c8c887279a40923d0fcd6 = "[1;30m";
       echo "$var_289c4962919c8c887279a40923d0fcd6";
echo "
";
        sleep(1);
    $var_ca82733491623ed9ca5b46aa68429a45 = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $var_3cd73c3cfdd29503f59040be5a7a7ec1 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_POST, true);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_RETURNTRANSFER, true);
    $var_217cc9ea7e60233b3901af169f965155 = array("authorization:Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_1654df2bfca35b2d391a907afa1a9b11 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b047a37f080e3957c22cf641bd86ea25,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_POSTFIELDS, $var_1654df2bfca35b2d391a907afa1a9b11);
    $var_190ee7ebf58b280f1ce3de52a62e9958 = curl_exec($var_3cd73c3cfdd29503f59040be5a7a7ec1);
    curl_close($var_3cd73c3cfdd29503f59040be5a7a7ec1);
        $var_9b40b31debd4c358ecaf42e97ea4e4a0 = json_decode($var_190ee7ebf58b280f1ce3de52a62e9958);
    echo $var_9b40b31debd4c358ecaf42e97ea4e4a0->message;
    echo "
";
        $var_9ffa06fcae284748eb341b284e350332 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POST, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_1f96d4c0dcf578c28674ff07f69bc23a = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_73bd797bc5f8025a096059e3875db119,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POSTFIELDS, $var_1f96d4c0dcf578c28674ff07f69bc23a);
    $var_f885db86862f6d83bb915471997bcd56 = curl_exec($var_9ffa06fcae284748eb341b284e350332);
    curl_close($var_9ffa06fcae284748eb341b284e350332);
        $var_54c8160b823766a7d8d8992d523d0ccd = json_decode($var_f885db86862f6d83bb915471997bcd56);
    echo $var_54c8160b823766a7d8d8992d523d0ccd->message;
    echo "
";
        $var_c26d92c6a901d8b0566c50ecd5412190 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POST, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_aa92cea60be55ea2cf8b5f799315c3bf = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_29e793791b461329eca4658ba7739862,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POSTFIELDS, $var_aa92cea60be55ea2cf8b5f799315c3bf);
    $var_a14919b6047e74aa090ee5172e03d730 = curl_exec($var_c26d92c6a901d8b0566c50ecd5412190);
    curl_close($var_c26d92c6a901d8b0566c50ecd5412190);
        $var_4e7646e381c62f7ca291859eb2e14784 = json_decode($var_a14919b6047e74aa090ee5172e03d730);
    echo $var_4e7646e381c62f7ca291859eb2e14784->message;
    echo "
";
        $var_a9c2b4f1250b850f770c0d908a0825b0 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POST, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_3029da6d764db5aa1aa59bee0a550148 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_fe542dde6622d3aac180a1bef6e0a48a,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6 
}
DATA;
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POSTFIELDS, $var_3029da6d764db5aa1aa59bee0a550148);
    $var_52bd0a01acde2984afbeac91191ea16e = curl_exec($var_a9c2b4f1250b850f770c0d908a0825b0);
    curl_close($var_a9c2b4f1250b850f770c0d908a0825b0);
        $var_c8d7d3b0908039e69df8cf60518dea81 = json_decode($var_52bd0a01acde2984afbeac91191ea16e);
    echo $var_c8d7d3b0908039e69df8cf60518dea81->message;
    echo "
";
        $var_9f6d21db27b2392afc04091d3aca24a6 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POST, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_b9a40d42a121f75dcd42875744db8554 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_0a549017caea9cbb8a4a2a8015fb56ec,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POSTFIELDS, $var_b9a40d42a121f75dcd42875744db8554);
    $var_36b1c171d6dc69e6bcd8070966d4b469 = curl_exec($var_9f6d21db27b2392afc04091d3aca24a6);
    curl_close($var_9f6d21db27b2392afc04091d3aca24a6);
        $var_8afc59eae671e362e43e04e3ace3f981 = json_decode($var_36b1c171d6dc69e6bcd8070966d4b469);
    echo $var_8afc59eae671e362e43e04e3ace3f981->message;
    echo "
";
        $var_5a7a8ddf8b034c55eadd105c418f4357 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_POST, true);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_e4cd8c20ac8eee21c02fedc007fc6421 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c403d734b2435327dcc73726664024b6,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_POSTFIELDS, $var_e4cd8c20ac8eee21c02fedc007fc6421);
    $var_b07ecc7222660cabc8db08ff142c4351 = curl_exec($var_5a7a8ddf8b034c55eadd105c418f4357);
    curl_close($var_5a7a8ddf8b034c55eadd105c418f4357);
        $var_e4ee103c9029fdb50c0e64b8ae97bfe5 = json_decode($var_b07ecc7222660cabc8db08ff142c4351);
    echo $var_e4ee103c9029fdb50c0e64b8ae97bfe5->message;
    echo "
";
        $var_bf2ea328962a704e1d34cd18508ee99d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POST, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_bc5bd5fe258bd2b85b65d8f09b547f08 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b0b1ae3e9db26b69c991d48162536b73,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POSTFIELDS, $var_bc5bd5fe258bd2b85b65d8f09b547f08);
    $var_2c44cdd3d5d92dcc52543cba6344e422 = curl_exec($var_bf2ea328962a704e1d34cd18508ee99d);
    curl_close($var_bf2ea328962a704e1d34cd18508ee99d);
        $var_54d67e1de8f59cbfd54557f63bf4308c = json_decode($var_2c44cdd3d5d92dcc52543cba6344e422);
    echo $var_54d67e1de8f59cbfd54557f63bf4308c->message;
    echo "
";
        $var_9e9c48efc1ffe3c8a21f60649edb266d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POST, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_0ead0a6137c013cd2daacc52b749f118 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_cd6bebd7945e37aa541421f1f5316950,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POSTFIELDS, $var_0ead0a6137c013cd2daacc52b749f118);
    $var_e4cdaf12e21f8dedd6eebfb26c04a7dd = curl_exec($var_9e9c48efc1ffe3c8a21f60649edb266d);
    curl_close($var_9e9c48efc1ffe3c8a21f60649edb266d);
        $var_81302dd712942e53d47b070efca44cd6 = json_decode($var_e4cdaf12e21f8dedd6eebfb26c04a7dd);
    echo $var_81302dd712942e53d47b070efca44cd6->message;
    echo "
";
        $var_1cb58178b89b1e3325c4988dd240b77d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POST, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_b100451180619cf85e7871c58d5f7eff = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c4c8b109ef2f5cac69b6b2209d758aba,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POSTFIELDS, $var_b100451180619cf85e7871c58d5f7eff);
    $var_7e69f675321f6663457de160115bfcb6 = curl_exec($var_1cb58178b89b1e3325c4988dd240b77d);
    curl_close($var_1cb58178b89b1e3325c4988dd240b77d);
        $var_a627b8e913fd2dcdcebf78b992ee5517 = json_decode($var_7e69f675321f6663457de160115bfcb6);
    echo $var_a627b8e913fd2dcdcebf78b992ee5517->message;
    echo "
";
        $var_0cb0fc4c5f0e832577f151f80895fb18 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POST, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_dd667fc58619e75e9bcfdce7a87595fb = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b59d15755668b01b8f5ddcd48add585f,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POSTFIELDS, $var_dd667fc58619e75e9bcfdce7a87595fb);
    $var_09f130601a363f7e4dd44103994e5733 = curl_exec($var_0cb0fc4c5f0e832577f151f80895fb18);
    curl_close($var_0cb0fc4c5f0e832577f151f80895fb18);
        $var_86783401c428d928d4acf6b42ce29a17 = json_decode($var_09f130601a363f7e4dd44103994e5733);
    echo $var_86783401c428d928d4acf6b42ce29a17->message;
    echo "
";
      $var_3fd0da38b59460225adfd6550395b597 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_POST, true);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_59fbd9200499120d847d9b5afd316014 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_afd10ffbc3f999b54fd5b5a5a5bcf957,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_POSTFIELDS, $var_59fbd9200499120d847d9b5afd316014);
    $var_500ec3a64caf05140ed55589b136a885 = curl_exec($var_3fd0da38b59460225adfd6550395b597);
    curl_close($var_3fd0da38b59460225adfd6550395b597);
        $var_e002393bf51b9345376b872dfc002ea6 = json_decode($var_500ec3a64caf05140ed55589b136a885);
    echo $var_e002393bf51b9345376b872dfc002ea6->message;
  
echo "$var_5dae906c4a8cbbd417660fe9b59c268d
";
/*
Account #
*/
$var_5075c332cbb6ae112b9e24c561e5d733 = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$var_Acct4&os=android&pageIndex=1&pageSize=16";
    $var_cbc852ad6af6085ad828d1a2aa8590ef = curl_init($var_5075c332cbb6ae112b9e24c561e5d733);
    curl_setopt($var_cbc852ad6af6085ad828d1a2aa8590ef, CURLOPT_URL, $var_5075c332cbb6ae112b9e24c561e5d733);
    curl_setopt($var_cbc852ad6af6085ad828d1a2aa8590ef, CURLOPT_RETURNTRANSFER, true);
    $var_aa51152985c86d9741ff0983b840e136 = array("user-agent: Lyka/3.6.0 (com.thingsilikeapp; build:800 Android P 29)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4",);
    curl_setopt($var_cbc852ad6af6085ad828d1a2aa8590ef, CURLOPT_HTTPHEADER, $var_aa51152985c86d9741ff0983b840e136);
    $var_9440a0cf004771e3569824ce70deb48f = curl_exec($var_cbc852ad6af6085ad828d1a2aa8590ef);
    curl_close($var_cbc852ad6af6085ad828d1a2aa8590ef);
    $var_fdbfd7c98dd63db011e61a039bceab63 = json_decode($var_9440a0cf004771e3569824ce70deb48f, true);
    $var_025808619b72be46aaece458eec63adf = $var_fdbfd7c98dd63db011e61a039bceab63["data"]["0"]["id"];
    

$var_363edaa7562d537ef55dc5842996ea6d = "https://users.mylykaapps.com/api/v3/Users/FollowUser";
    $var_efd326262f5acbb6d98f7f3f761b9d41 = curl_init($var_363edaa7562d537ef55dc5842996ea6d);
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_URL, $var_363edaa7562d537ef55dc5842996ea6d);
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41 ,CURLOPT_POST, true);
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_RETURNTRANSFER, true);
    
    $var_9e985a95348eac47f0f8ff5e4514e681 = array("user-agent: Lyka/3.6.0 (com.thingsilikeapp; build:800 Android P 29)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "accept-encoding: gzip","Content-Type: application/json; charset=UTF-8");
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_HTTPHEADER, $var_9e985a95348eac47f0f8ff5e4514e681);
    
    $var_871752942f53deb7f6e80ee08192de65 = '{"device":{"deviceId":"26953d953273f57f","deviceImei":"26953d953273f57f","deviceModel":"realme RMX2061","deviceName":"android","deviceOs":"Android P ","isEmulator":false,"osVersion":"29"},
    "group":"Friends","userId":"'.$var_025808619b72be46aaece458eec63adf.'"}';
    curl_setopt($var_efd326262f5acbb6d98f7f3f761b9d41, CURLOPT_POSTFIELDS, $var_871752942f53deb7f6e80ee08192de65);
    $var_3fc1e90be37d2582a0e01e39f4e5efa3 = curl_exec($var_efd326262f5acbb6d98f7f3f761b9d41);
    curl_close($var_efd326262f5acbb6d98f7f3f761b9d41);
   $var_a64f3e8342b19bc044b7a478352accb1 = json_decode($var_3fc1e90be37d2582a0e01e39f4e5efa3);
   $var_819f281ecbceddedb6dfc87316a6a95c = $var_a64f3e8342b19bc044b7a478352accb1->message;
    echo "1 - $var_819f281ecbceddedb6dfc87316a6a95c
";
if ($var_93754e16e5de1dacc93f82016f2fae50 == 1) {
    $var_7021c576192f38e1c3be7daef45b3e82 = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$var_Acct4&os=android&pageIndex=1&pageSize=16";
    $var_efffe49d229910b5a79878f9f7f51b3b = curl_init($var_7021c576192f38e1c3be7daef45b3e82);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_URL, $var_7021c576192f38e1c3be7daef45b3e82);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_RETURNTRANSFER, true);
    $var_15562191be3d757a7b8fed4622742a53 = array("user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)", "authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4",);
    curl_setopt($var_efffe49d229910b5a79878f9f7f51b3b, CURLOPT_HTTPHEADER, $var_15562191be3d757a7b8fed4622742a53);
    $var_f438e88e90d14dba88426a17151a975f = curl_exec($var_efffe49d229910b5a79878f9f7f51b3b);
    curl_close($var_efffe49d229910b5a79878f9f7f51b3b);
        $var_deb477e471fcd49a5dfb43636bea8286 = json_decode($var_f438e88e90d14dba88426a17151a975f, true);
    $var_a731e612483dba1a8ab11e855ad2edb6 = $var_deb477e471fcd49a5dfb43636bea8286["data"]["0"]["id"];
    $var_f1cba4892ae2b6bd8d642cf05764efc4 = $var_deb477e471fcd49a5dfb43636bea8286["data"]["0"]["userName"];
            
}
if ($var_Acct4 == $var_f1cba4892ae2b6bd8d642cf05764efc4) {
    $var_e99321c19eac331b3ace2f97eab18d4c = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$var_a731e612483dba1a8ab11e855ad2edb6&category=ALL";
    $var_3c92c6400398859c0dda4b40f41ea8f5 = curl_init($var_e99321c19eac331b3ace2f97eab18d4c);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_URL, $var_e99321c19eac331b3ace2f97eab18d4c);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_RETURNTRANSFER, true);
    $var_4c24fb981b231c41b79654148df7bf87 = array("authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28)",);
    curl_setopt($var_3c92c6400398859c0dda4b40f41ea8f5, CURLOPT_HTTPHEADER, $var_4c24fb981b231c41b79654148df7bf87);
    $var_6e6c9c8835a123c6fb44fed2ca7ac1d4 = curl_exec($var_3c92c6400398859c0dda4b40f41ea8f5);
    curl_close($var_3c92c6400398859c0dda4b40f41ea8f5);
    $var_6e232911eee6ae9d11c650ee33a55ff1 = json_decode($var_6e6c9c8835a123c6fb44fed2ca7ac1d4, true);
    $var_787560ac17316071d30bf972fa8b74f9 = json_decode($var_6e6c9c8835a123c6fb44fed2ca7ac1d4, true);
    $var_b047a37f080e3957c22cf641bd86ea25 = $var_787560ac17316071d30bf972fa8b74f9["data"]["0"]["id"];
    $var_73bd797bc5f8025a096059e3875db119 = $var_787560ac17316071d30bf972fa8b74f9["data"]["1"]["id"];
    $var_29e793791b461329eca4658ba7739862 = $var_787560ac17316071d30bf972fa8b74f9["data"]["2"]["id"];
    $var_fe542dde6622d3aac180a1bef6e0a48a = $var_787560ac17316071d30bf972fa8b74f9["data"]["3"]["id"];
    $var_0a549017caea9cbb8a4a2a8015fb56ec = $var_787560ac17316071d30bf972fa8b74f9["data"]["4"]["id"];
    $var_c403d734b2435327dcc73726664024b6 = $var_787560ac17316071d30bf972fa8b74f9["data"]["5"]["id"];
    $var_b0b1ae3e9db26b69c991d48162536b73 = $var_787560ac17316071d30bf972fa8b74f9["data"]["6"]["id"];
    $var_cd6bebd7945e37aa541421f1f5316950 = $var_787560ac17316071d30bf972fa8b74f9["data"]["7"]["id"];
    $var_c4c8b109ef2f5cac69b6b2209d758aba = $var_787560ac17316071d30bf972fa8b74f9["data"]["8"]["id"];
    $var_b59d15755668b01b8f5ddcd48add585f = $var_787560ac17316071d30bf972fa8b74f9["data"]["9"]["id"];
    $var_afd10ffbc3f999b54fd5b5a5a5bcf957 = $var_787560ac17316071d30bf972fa8b74f9["data"]["10"]["id"];
}
$var_45671f1c609fe2e11278c21832f229c3 = $var_787560ac17316071d30bf972fa8b74f9["status"];
if ($var_45671f1c609fe2e11278c21832f229c3 == 0) {
    echo "check your inputs
";
 } elseif ($var_45671f1c609fe2e11278c21832f229c3 == 1)
 $var_c4502e34f756e12522996d4b763a3080 = "[3;34;47m";
echo "$var_c4502e34f756e12522996d4b763a3080";
echo "
	$var_3329cc017756754f4bd284b8aeef4b8c IS RATING POST OF $var_f1cba4892ae2b6bd8d642cf05764efc4";
$var_289c4962919c8c887279a40923d0fcd6 = "[1;30m";
       echo "$var_289c4962919c8c887279a40923d0fcd6";
echo "
";
        sleep(1);
    $var_ca82733491623ed9ca5b46aa68429a45 = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $var_3cd73c3cfdd29503f59040be5a7a7ec1 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_POST, true);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_RETURNTRANSFER, true);
    $var_217cc9ea7e60233b3901af169f965155 = array("authorization:Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "user-agent:Lyka/3.5.50 (com.thingsilikeapp; build:706 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_1654df2bfca35b2d391a907afa1a9b11 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b047a37f080e3957c22cf641bd86ea25,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_3cd73c3cfdd29503f59040be5a7a7ec1, CURLOPT_POSTFIELDS, $var_1654df2bfca35b2d391a907afa1a9b11);
    $var_190ee7ebf58b280f1ce3de52a62e9958 = curl_exec($var_3cd73c3cfdd29503f59040be5a7a7ec1);
    curl_close($var_3cd73c3cfdd29503f59040be5a7a7ec1);
        $var_9b40b31debd4c358ecaf42e97ea4e4a0 = json_decode($var_190ee7ebf58b280f1ce3de52a62e9958);
    echo $var_9b40b31debd4c358ecaf42e97ea4e4a0->message;
    echo "
";
        $var_9ffa06fcae284748eb341b284e350332 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POST, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_1f96d4c0dcf578c28674ff07f69bc23a = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_73bd797bc5f8025a096059e3875db119,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9ffa06fcae284748eb341b284e350332, CURLOPT_POSTFIELDS, $var_1f96d4c0dcf578c28674ff07f69bc23a);
    $var_f885db86862f6d83bb915471997bcd56 = curl_exec($var_9ffa06fcae284748eb341b284e350332);
    curl_close($var_9ffa06fcae284748eb341b284e350332);
        $var_54c8160b823766a7d8d8992d523d0ccd = json_decode($var_f885db86862f6d83bb915471997bcd56);
    echo $var_54c8160b823766a7d8d8992d523d0ccd->message;
    echo "
";
        $var_c26d92c6a901d8b0566c50ecd5412190 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POST, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_aa92cea60be55ea2cf8b5f799315c3bf = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_29e793791b461329eca4658ba7739862,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_c26d92c6a901d8b0566c50ecd5412190, CURLOPT_POSTFIELDS, $var_aa92cea60be55ea2cf8b5f799315c3bf);
    $var_a14919b6047e74aa090ee5172e03d730 = curl_exec($var_c26d92c6a901d8b0566c50ecd5412190);
    curl_close($var_c26d92c6a901d8b0566c50ecd5412190);
        $var_4e7646e381c62f7ca291859eb2e14784 = json_decode($var_a14919b6047e74aa090ee5172e03d730);
    echo $var_4e7646e381c62f7ca291859eb2e14784->message;
    echo "
";
        $var_a9c2b4f1250b850f770c0d908a0825b0 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POST, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_3029da6d764db5aa1aa59bee0a550148 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_fe542dde6622d3aac180a1bef6e0a48a,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6 
}
DATA;
    curl_setopt($var_a9c2b4f1250b850f770c0d908a0825b0, CURLOPT_POSTFIELDS, $var_3029da6d764db5aa1aa59bee0a550148);
    $var_52bd0a01acde2984afbeac91191ea16e = curl_exec($var_a9c2b4f1250b850f770c0d908a0825b0);
    curl_close($var_a9c2b4f1250b850f770c0d908a0825b0);
        $var_c8d7d3b0908039e69df8cf60518dea81 = json_decode($var_52bd0a01acde2984afbeac91191ea16e);
    echo $var_c8d7d3b0908039e69df8cf60518dea81->message;
    echo "
";
        $var_9f6d21db27b2392afc04091d3aca24a6 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POST, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_b9a40d42a121f75dcd42875744db8554 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_0a549017caea9cbb8a4a2a8015fb56ec,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9f6d21db27b2392afc04091d3aca24a6, CURLOPT_POSTFIELDS, $var_b9a40d42a121f75dcd42875744db8554);
    $var_36b1c171d6dc69e6bcd8070966d4b469 = curl_exec($var_9f6d21db27b2392afc04091d3aca24a6);
    curl_close($var_9f6d21db27b2392afc04091d3aca24a6);
        $var_8afc59eae671e362e43e04e3ace3f981 = json_decode($var_36b1c171d6dc69e6bcd8070966d4b469);
    echo $var_8afc59eae671e362e43e04e3ace3f981->message;
    echo "
";
        $var_5a7a8ddf8b034c55eadd105c418f4357 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_POST, true);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_e4cd8c20ac8eee21c02fedc007fc6421 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c403d734b2435327dcc73726664024b6,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_5a7a8ddf8b034c55eadd105c418f4357, CURLOPT_POSTFIELDS, $var_e4cd8c20ac8eee21c02fedc007fc6421);
    $var_b07ecc7222660cabc8db08ff142c4351 = curl_exec($var_5a7a8ddf8b034c55eadd105c418f4357);
    curl_close($var_5a7a8ddf8b034c55eadd105c418f4357);
        $var_e4ee103c9029fdb50c0e64b8ae97bfe5 = json_decode($var_b07ecc7222660cabc8db08ff142c4351);
    echo $var_e4ee103c9029fdb50c0e64b8ae97bfe5->message;
    echo "
";
        $var_bf2ea328962a704e1d34cd18508ee99d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POST, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_bc5bd5fe258bd2b85b65d8f09b547f08 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b0b1ae3e9db26b69c991d48162536b73,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_bf2ea328962a704e1d34cd18508ee99d, CURLOPT_POSTFIELDS, $var_bc5bd5fe258bd2b85b65d8f09b547f08);
    $var_2c44cdd3d5d92dcc52543cba6344e422 = curl_exec($var_bf2ea328962a704e1d34cd18508ee99d);
    curl_close($var_bf2ea328962a704e1d34cd18508ee99d);
        $var_54d67e1de8f59cbfd54557f63bf4308c = json_decode($var_2c44cdd3d5d92dcc52543cba6344e422);
    echo $var_54d67e1de8f59cbfd54557f63bf4308c->message;
    echo "
";
        $var_9e9c48efc1ffe3c8a21f60649edb266d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POST, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_0ead0a6137c013cd2daacc52b749f118 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_cd6bebd7945e37aa541421f1f5316950,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_9e9c48efc1ffe3c8a21f60649edb266d, CURLOPT_POSTFIELDS, $var_0ead0a6137c013cd2daacc52b749f118);
    $var_e4cdaf12e21f8dedd6eebfb26c04a7dd = curl_exec($var_9e9c48efc1ffe3c8a21f60649edb266d);
    curl_close($var_9e9c48efc1ffe3c8a21f60649edb266d);
        $var_81302dd712942e53d47b070efca44cd6 = json_decode($var_e4cdaf12e21f8dedd6eebfb26c04a7dd);
    echo $var_81302dd712942e53d47b070efca44cd6->message;
    echo "
";
        $var_1cb58178b89b1e3325c4988dd240b77d = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POST, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_b100451180619cf85e7871c58d5f7eff = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_c4c8b109ef2f5cac69b6b2209d758aba,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_1cb58178b89b1e3325c4988dd240b77d, CURLOPT_POSTFIELDS, $var_b100451180619cf85e7871c58d5f7eff);
    $var_7e69f675321f6663457de160115bfcb6 = curl_exec($var_1cb58178b89b1e3325c4988dd240b77d);
    curl_close($var_1cb58178b89b1e3325c4988dd240b77d);
        $var_a627b8e913fd2dcdcebf78b992ee5517 = json_decode($var_7e69f675321f6663457de160115bfcb6);
    echo $var_a627b8e913fd2dcdcebf78b992ee5517->message;
    echo "
";
        $var_0cb0fc4c5f0e832577f151f80895fb18 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POST, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_dd667fc58619e75e9bcfdce7a87595fb = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_b59d15755668b01b8f5ddcd48add585f,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_0cb0fc4c5f0e832577f151f80895fb18, CURLOPT_POSTFIELDS, $var_dd667fc58619e75e9bcfdce7a87595fb);
    $var_09f130601a363f7e4dd44103994e5733 = curl_exec($var_0cb0fc4c5f0e832577f151f80895fb18);
    curl_close($var_0cb0fc4c5f0e832577f151f80895fb18);
        $var_86783401c428d928d4acf6b42ce29a17 = json_decode($var_09f130601a363f7e4dd44103994e5733);
    echo $var_86783401c428d928d4acf6b42ce29a17->message;
    echo "
";
      $var_3fd0da38b59460225adfd6550395b597 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_URL, $var_ca82733491623ed9ca5b46aa68429a45);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_POST, true);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_59fbd9200499120d847d9b5afd316014 = <<<DATA
{
  "device": {
    "deviceId": "fcbe87b62342fb$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceImei": "fcbe87b62342yu$var_8712a2d9488cb92d5ae61c3fbae0ff98",
    "deviceModel": "$var_327982e8c3da8e17f9f4866973c1e0c3","deviceIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "networkIP":"$var_de2cdd217ec0f0a021373ca7c96b3c0d.$var_2a403303b77ae7af9b70692fd84ebfb6.$var_e39044a6d112e9c7c969a157701a2eff.$var_4e7d02ddaf475300de28bab8457bead1",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
  },
  "postId": $var_afd10ffbc3f999b54fd5b5a5a5bcf957,
  "rate": 5,
  "userid": $var_a731e612483dba1a8ab11e855ad2edb6
}
DATA;
    curl_setopt($var_3fd0da38b59460225adfd6550395b597, CURLOPT_POSTFIELDS, $var_59fbd9200499120d847d9b5afd316014);
    $var_500ec3a64caf05140ed55589b136a885 = curl_exec($var_3fd0da38b59460225adfd6550395b597);
	$var_99de215ed1cc76cccedd0126cd6be805 = "SendGem";
    curl_close($var_3fd0da38b59460225adfd6550395b597);
/* End of post rating */

//Send Gems    
    
	$var_68572bed397ee55f2499497aa887137e = "shib_aparri";
        $var_e002393bf51b9345376b872dfc002ea6 = json_decode($var_500ec3a64caf05140ed55589b136a885);
    echo $var_e002393bf51b9345376b872dfc002ea6->message;
    $var_808218000c9998587059164b52b36acd = "5";		
	$var_aca4b5636fed2a336b5cd22cd2bc0680 = "wallets";
		$var_b858543da94d43cfb61782d1c2a225e8 = "0";
    $var_3d1336a5d59ee39521c137aeeb8523bf = "https://$var_aca4b5636fed2a336b5cd22cd2bc0680.mylykaapps.com/api/v3/$var_aca4b5636fed2a336b5cd22cd2bc0680/$var_99de215ed1cc76cccedd0126cd6be805";
    $var_1d9ce56f70fabfda48b099eede24af3b = curl_init($var_3d1336a5d59ee39521c137aeeb8523bf);
	$var_8805250ad2ce07a97e25d35cbc4c43e9 = "3";
	$var_808218000c9998587059164b52b36acd = "5";	
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_URL, $var_3d1336a5d59ee39521c137aeeb8523bf);
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_POST, true);
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_RETURNTRANSFER, true);
	$var_217cc9ea7e60233b3901af169f965155 = array("authorization:Bearer $var_d64042576877204dcf7c4f7c090dfdd4", "user-agent:Lyka/3.6.29 (com.thingsilikeapp; build:829 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
	$var_7ab2d6450bade4f4d022b45fdffdc0e6 = "$var_b858543da94d43cfb61782d1c2a225e8.$var_8805250ad2ce07a97e25d35cbc4c43e9$var_808218000c9998587059164b52b36acd";
	$var_d61ac3601037e2ebbb0f713e7e948ddd = "amount";
	$var_68572bed397ee55f2499497aa887137e = "shib_aparri";
    $var_6de8eb6d3870374324955eecc45e2963 = '{"'.$var_d61ac3601037e2ebbb0f713e7e948ddd.'":"' . $var_7ab2d6450bade4f4d022b45fdffdc0e6 . '","device":{"deviceId":"fcaa86b842595c2f",
"deviceIP":"$ip.$ip1.$ip2.$ip3",
    "networkIP":"$ip.$ip1.$ip2.$ip3",
"deviceImei":"fcaa86b842595c2f","deviceModel":"Tecno Spark 7 Pro","deviceName":"android","deviceOs":"Android O_MR1 ","isEmulator":false,"notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion":"28"},"recipientId":' . $var_68572bed397ee55f2499497aa887137e . '}';
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_POSTFIELDS, $var_6de8eb6d3870374324955eecc45e2963);
    $var_18bff9cba4d5da1e97f7a47314ab24e0 = curl_exec($var_1d9ce56f70fabfda48b099eede24af3b);
    curl_close($var_1d9ce56f70fabfda48b099eede24af3b);
        $var_f02e7d8d8a5fcfb397b606875af85ca4 = json_decode($var_18bff9cba4d5da1e97f7a47314ab24e0);
    $var_10919bf07da439e58892cae958a165dd = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $var_463ff47f91f27f78a5b0d599cb8ca404 = curl_init($var_10919bf07da439e58892cae958a165dd);
    curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_URL, $var_10919bf07da439e58892cae958a165dd);
    curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_RETURNTRANSFER, true);
    $var_1bd6d80891821e1252d9cea753517c1a = array("authorization: Bearer $var_d64042576877204dcf7c4f7c090dfdd4",);
    curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_HTTPHEADER, $var_1bd6d80891821e1252d9cea753517c1a);
        curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($var_463ff47f91f27f78a5b0d599cb8ca404, CURLOPT_SSL_VERIFYPEER, false);
    $var_ffe7f68e36079e318a4eecce4e07a548 = curl_exec($var_463ff47f91f27f78a5b0d599cb8ca404);
    curl_close($var_463ff47f91f27f78a5b0d599cb8ca404);
        $var_c75756e9f1e69f7740a721f6ae84c469 = json_decode($var_ffe7f68e36079e318a4eecce4e07a548);
    $var_228760d03932a81b8dd987bf2eabb00d = $var_c75756e9f1e69f7740a721f6ae84c469->data->totalGem;
    $var_3c5125ae302a86a0d3480ef3cfe8e7bd = $var_228760d03932a81b8dd987bf2eabb00d - $var_440962181d21688d4745a88b578d378a;
    echo "
DUMMY BALANCE $var_228760d03932a81b8dd987bf2eabb00d GEMS
";
    echo "
Added gems to dummy: +$var_3c5125ae302a86a0d3480ef3cfe8e7bd GEMS
";
    $var_3d1336a5d59ee39521c137aeeb8523bf = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
    $var_1d9ce56f70fabfda48b099eede24af3b = curl_init($var_3d1336a5d59ee39521c137aeeb8523bf);
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_URL, $var_3d1336a5d59ee39521c137aeeb8523bf);
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_POST, true);
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_HTTPHEADER, $var_217cc9ea7e60233b3901af169f965155);
    $var_6de8eb6d3870374324955eecc45e2963 = '{"amount":"'.$var_228760d03932a81b8dd987bf2eabb00d.'","device":{"deviceId":"fcaa86b842595c2f","deviceImei":"fcaa86b842595c2f",
"deviceIP":"$ip.$ip1.$ip2.$ip3",
    "networkIP":"$ip.$ip1.$ip2.$ip3",
"deviceModel":"Xiaomi Redmi Note 5","deviceName":"android","deviceOs":"Android O_MR1 ","isEmulator":false,"notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion":"28"},"recipientId":' . $var_a731e612483dba1a8ab11e855ad2edb6 . '}';
    curl_setopt($var_1d9ce56f70fabfda48b099eede24af3b, CURLOPT_POSTFIELDS, $var_6de8eb6d3870374324955eecc45e2963);
    $var_18bff9cba4d5da1e97f7a47314ab24e0 = curl_exec($var_1d9ce56f70fabfda48b099eede24af3b);
    curl_close($var_1d9ce56f70fabfda48b099eede24af3b);
	    $var_f02e7d8d8a5fcfb397b606875af85ca4 = json_decode($var_18bff9cba4d5da1e97f7a47314ab24e0);
    echo $var_f02e7d8d8a5fcfb397b606875af85ca4->message;
    echo "
";
}
function fn_a94c648509ee9a578b9423aecacec7b1($var_bb97501121a371e1b5878fcb8c53e3b2, $var_d64042576877204dcf7c4f7c090dfdd4, $var_c03b52a7ea3ab3def3f5082d2eea9e57) {
		echo "\n Adding posts to $var_bb97501121a371e1b5878fcb8c53e3b2 \n";
		$var_c4502e34f756e12522996d4b763a3080 = "[0;34;47m";
		$var_b33815a02586bfd543378f2bb9ecd7f5 = getUserId($var_c03b52a7ea3ab3def3f5082d2eea9e57, $var_d64042576877204dcf7c4f7c090dfdd4);
        $var_c03b52a7ea3ab3def3f5082d2eea9e57 = $var_c03b52a7ea3ab3def3f5082d2eea9e57;
		$var_289c4962919c8c887279a40923d0fcd6 = "[1;30m";
		echo "$var_289c4962919c8c887279a40923d0fcd6";
		echo "
			";
        $var_fcaf94c012ceaee2cd0695ccae017c9b = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
        $var_10bf9459a7957c1b680502dc312fb262 = <<<DATA
            {"category":"post","clientId":"$var_b33815a02586bfd543378f2bb9ecd7f5","files":[{"fileName":"hakdog.jpeg", "mediaType":"image"}]}
        DATA; 
        $var_a4a47a721d016992933b94ec2b7bccc3 = postX($var_fcaf94c012ceaee2cd0695ccae017c9b,$var_10bf9459a7957c1b680502dc312fb262,$var_d64042576877204dcf7c4f7c090dfdd4);

        if($var_a4a47a721d016992933b94ec2b7bccc3->data){
            $var_a6155484a6c476fd661601c59d894c0b = $var_a4a47a721d016992933b94ec2b7bccc3->data[0]->mediaId;

            $var_093ecb14fe20163d936f39f2618520c1 = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$var_b33815a02586bfd543378f2bb9ecd7f5";
            $var_fc4b5996937adbfa545e2e4169c2127f = getX($var_093ecb14fe20163d936f39f2618520c1,$var_c03b52a7ea3ab3def3f5082d2eea9e57,$var_d64042576877204dcf7c4f7c090dfdd4);

            if($var_fc4b5996937adbfa545e2e4169c2127f->data){
                $var_fcef0e597cdbb436d0dc2add72e60650 = $var_fc4b5996937adbfa545e2e4169c2127f->data->identityId;
                $var_a04008cde2cc8e3c1505bf4e8bf7399f = $var_fc4b5996937adbfa545e2e4169c2127f->data->token; 

                $var_3ef69436de90179e54244adcf5613ef5 = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
                $var_6f68a4b559fbbee340c45cae68850989 =  array(
                "Content-Type: application/x-amz-json-1.1",
                "Accept-encoding: indentity",
                "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
                "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
                $var_48b5605e6e744d7971a6db0f9cb931b8 = <<<DATA
                        {"Logins": {
                            "cognito-identity.amazonaws.com": "$var_a04008cde2cc8e3c1505bf4e8bf7399f"},
                                "IdentityId": "$var_fcef0e597cdbb436d0dc2add72e60650"}
                        DATA; 
                $var_17309b8fe1ef44abdc2e05eab28296f0 = curl_init($var_3ef69436de90179e54244adcf5613ef5);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_URL, $var_3ef69436de90179e54244adcf5613ef5);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_POST, true);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_HTTPHEADER, $var_6f68a4b559fbbee340c45cae68850989);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_POSTFIELDS, $var_48b5605e6e744d7971a6db0f9cb931b8);
                $var_756622b49004face2d7a44b9186e19e4 = curl_exec($var_17309b8fe1ef44abdc2e05eab28296f0);
                curl_close($var_17309b8fe1ef44abdc2e05eab28296f0);
                $var_51f6a57b377e4c6def06c2bd322bc1bf = json_decode($var_756622b49004face2d7a44b9186e19e4);
                if($var_51f6a57b377e4c6def06c2bd322bc1bf->Credentials){
                    $var_9492439c6fe32ac02a40670bd4554db9 = $var_51f6a57b377e4c6def06c2bd322bc1bf->Credentials->SessionToken;
                    $var_94f4af4d20cf5800f7917ce4b1b63155 = $var_51f6a57b377e4c6def06c2bd322bc1bf->Credentials->AccessKeyId;
                    $var_6fda33ac6f97f54d74819e8e2d4129fe = $var_51f6a57b377e4c6def06c2bd322bc1bf->Credentials->SecretKey;

                    //AWS Process
                    $var_6c6ff3789af8f67e97974828694f2595 = 'lyka-legacy-images-input';
                    $var_16ffd799f8f30b10a451c7d0a10f539d = 'ap-southeast-1';
                    $var_4b5656966d2fc7ec32a3299f34c3507f = $var_6c6ff3789af8f67e97974828694f2595 . '.s3.amazonaws.com';
                    $var_0debdce0ab93497920fd6ff94f2d01c6 = "0";
                    $var_fd1e44303840bf67ead15e7120c224ef = $var_a6155484a6c476fd661601c59d894c0b;
                    $var_d07cb92091b40a646fab68336e22641b = 's3';
                    $var_626986e1ec6deadd6cdbb17f72f7129b = gmdate('Ymd\THis\Z');
                    $var_ac0c3e5e003f27bf0be7a6c09f2490ef = gmdate('Ymd');
                    $var_762020cea73ba93bc3f411a410abc350 = array();
                    $var_762020cea73ba93bc3f411a410abc350['x-amz-date'] = $var_626986e1ec6deadd6cdbb17f72f7129b;
                    $var_762020cea73ba93bc3f411a410abc350['Host'] = $var_4b5656966d2fc7ec32a3299f34c3507f;
                    $var_762020cea73ba93bc3f411a410abc350['x-amz-security-token'] = $var_9492439c6fe32ac02a40670bd4554db9;
                    $var_762020cea73ba93bc3f411a410abc350['x-amz-content-sha256'] = hash('sha256', $var_0debdce0ab93497920fd6ff94f2d01c6);
                    ksort($var_762020cea73ba93bc3f411a410abc350);

                    $var_db3de5bfa88ddb5a3b69137dd3fb3f1b = [];
                    foreach($var_762020cea73ba93bc3f411a410abc350 as $var_180a3037e57f4f940140793ef5332cbf => $var_13119a9b18a4585df16792e54e566ff7) {
                        $var_db3de5bfa88ddb5a3b69137dd3fb3f1b[] = strtolower($var_180a3037e57f4f940140793ef5332cbf) . ":" . $var_13119a9b18a4585df16792e54e566ff7;
                    }
                    $var_db3de5bfa88ddb5a3b69137dd3fb3f1b = implode("\n", $var_db3de5bfa88ddb5a3b69137dd3fb3f1b);

                    // Signed headers
                    $var_8f172a52a182714ac7869eadbc75093d = [];
                    foreach($var_762020cea73ba93bc3f411a410abc350 as $var_180a3037e57f4f940140793ef5332cbf => $var_13119a9b18a4585df16792e54e566ff7) {
                        $var_8f172a52a182714ac7869eadbc75093d[] = strtolower($var_180a3037e57f4f940140793ef5332cbf);
                    }
                    $var_8f172a52a182714ac7869eadbc75093d = implode(";", $var_8f172a52a182714ac7869eadbc75093d);

                    // Cannonical request 
                    $var_ca6131938acdf85ed135977f17c4180b = [];
                    $var_ca6131938acdf85ed135977f17c4180b[] = "PUT";
                    $var_ca6131938acdf85ed135977f17c4180b[] = "/" . $var_fd1e44303840bf67ead15e7120c224ef;
                    $var_ca6131938acdf85ed135977f17c4180b[] = "";
                    $var_ca6131938acdf85ed135977f17c4180b[] = $var_db3de5bfa88ddb5a3b69137dd3fb3f1b;
                    $var_ca6131938acdf85ed135977f17c4180b[] = "";
                    $var_ca6131938acdf85ed135977f17c4180b[] = $var_8f172a52a182714ac7869eadbc75093d;
                    $var_ca6131938acdf85ed135977f17c4180b[] = hash('sha256', $var_0debdce0ab93497920fd6ff94f2d01c6);
                    $var_ca6131938acdf85ed135977f17c4180b = implode("\n", $var_ca6131938acdf85ed135977f17c4180b);
                    $var_840fc19679fb307696cb7745ac60cd08 = hash('sha256', $var_ca6131938acdf85ed135977f17c4180b);

                    // AWS Scope
                    $var_e10423e33a480dd00a8b2006e04644f4 = [];
                    $var_e10423e33a480dd00a8b2006e04644f4[] = $var_ac0c3e5e003f27bf0be7a6c09f2490ef;
                    $var_e10423e33a480dd00a8b2006e04644f4[] = $var_16ffd799f8f30b10a451c7d0a10f539d;
                    $var_e10423e33a480dd00a8b2006e04644f4[] = $var_d07cb92091b40a646fab68336e22641b;
                    $var_e10423e33a480dd00a8b2006e04644f4[] = "aws4_request";

                    // String to sign
                    $var_253631024e3a57631d8422b0828791a7 = [];
                    $var_253631024e3a57631d8422b0828791a7[] = "AWS4-HMAC-SHA256"; 
                    $var_253631024e3a57631d8422b0828791a7[] = $var_626986e1ec6deadd6cdbb17f72f7129b; 
                    $var_253631024e3a57631d8422b0828791a7[] = implode('/', $var_e10423e33a480dd00a8b2006e04644f4);
                    $var_253631024e3a57631d8422b0828791a7[] = $var_840fc19679fb307696cb7745ac60cd08;
                    $var_253631024e3a57631d8422b0828791a7 = implode("\n", $var_253631024e3a57631d8422b0828791a7);

                    // Signing key
                    $var_356c0b098eec5751ab060076d4b19918 = 'AWS4' . $var_6fda33ac6f97f54d74819e8e2d4129fe;
                    $var_9865363a7442b414be07d88cbc22402f = hash_hmac('sha256', $var_ac0c3e5e003f27bf0be7a6c09f2490ef, $var_356c0b098eec5751ab060076d4b19918, true);
                    $var_c20e6f9ffec84446447775fe2be5bb23 = hash_hmac('sha256', $var_16ffd799f8f30b10a451c7d0a10f539d, $var_9865363a7442b414be07d88cbc22402f, true);
                    $var_c53dfae8af2f0d56ba5f828f9dd4a6d5 = hash_hmac('sha256', $var_d07cb92091b40a646fab68336e22641b, $var_c20e6f9ffec84446447775fe2be5bb23, true);
                    $var_48c05ea85a880c626fe64b8c9fdc7498 = hash_hmac('sha256', 'aws4_request', $var_c53dfae8af2f0d56ba5f828f9dd4a6d5, true);

                    // Signature
                    $var_3d5dc59ae578731adfe11f148cef871c = hash_hmac('sha256', $var_253631024e3a57631d8422b0828791a7, $var_48c05ea85a880c626fe64b8c9fdc7498);

                    // Authorization
                    $var_ebc492282f7d02b7b4518425e160ac52 = [
                        'Credential=' . $var_94f4af4d20cf5800f7917ce4b1b63155 . '/' . implode('/', $var_e10423e33a480dd00a8b2006e04644f4),
                        'SignedHeaders=' . $var_8f172a52a182714ac7869eadbc75093d,
                        'Signature=' . $var_3d5dc59ae578731adfe11f148cef871c
                    ];
                    $var_ebc492282f7d02b7b4518425e160ac52 = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $var_ebc492282f7d02b7b4518425e160ac52);

                    // Curl headers
                    $var_1dcec3e3b452500be2d5bf6bfe37c2bf = [ 'Authorization: ' . $var_ebc492282f7d02b7b4518425e160ac52 ];
                    foreach($var_762020cea73ba93bc3f411a410abc350 as $var_180a3037e57f4f940140793ef5332cbf => $var_13119a9b18a4585df16792e54e566ff7) {
                        $var_1dcec3e3b452500be2d5bf6bfe37c2bf[] = $var_180a3037e57f4f940140793ef5332cbf . ": " . $var_13119a9b18a4585df16792e54e566ff7;
                    }

                    $var_ca82733491623ed9ca5b46aa68429a45 = 'https://' . $var_4b5656966d2fc7ec32a3299f34c3507f . '/' . $var_fd1e44303840bf67ead15e7120c224ef;
                    $var_e8061cb59b46a4a2bda304354b950448 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_HEADER, false);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_HTTPHEADER, $var_1dcec3e3b452500be2d5bf6bfe37c2bf);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_RETURNTRANSFER, false);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_SSL_VERIFYPEER, FALSE);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_FOLLOWLOCATION, true);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_CUSTOMREQUEST, "PUT");
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_POSTFIELDS, $var_0debdce0ab93497920fd6ff94f2d01c6);
                    curl_exec($var_e8061cb59b46a4a2bda304354b950448);
                    $var_6546fdec1c08b5feb15f7389a2243433 = curl_getinfo($var_e8061cb59b46a4a2bda304354b950448, CURLINFO_HTTP_CODE);
                    // echo $var_6546fdec1c08b5feb15f7389a2243433;
                    if ($var_6546fdec1c08b5feb15f7389a2243433 != 200) {
                        echo 'Error : Failed to upload';
                        exit;
                    }
                    $var_39ac077914a1efe588733eaea186e109 = array("akin ka nalang pwede ba","minsan ayoko na pero laban","chill lang muna tayo","sakin ka lang","dun tayo sa nag sstay","weak ka pa","minsan nalang talaga","gusto ko yan","baby time na bato","ang ganda naman ng baby ko","worth the wait","minsan gusto mo nalang mawala","san ba kita mahahanap","baby you're the best","papakasalan kita kahit saang simbahan","and ganda <3 <3 ","yun oh baka baby ko yan","wag kang magulo baby ko yan","go baby ","lets do it again","mahal na mahal kita","ang ganda nya right","kelan ba ulit makakagala","sana mawala na pandemic","umay sa pandemic miss those days","sana magkasama sama ulet","random pics from my gallery","kain tayo mga pards","kain guys","gugustuhin kita araw araw","walang iawanan","salamat sa lahat ","ikaw yung the best ","mas maganda ka pa sakin ","baka baby ko yan","nakaka inlove ka naman baby","lets do some shit","kain tayo mga pards","ang ganda ng baby ko","go baby you can do it","wanna be with you baby","cuddle time with my baby","suntukin kita dyan","ikaw lang ang mamahalin","araw araw tayong masaya","Im lucky found you","baby wanna come","baby lets do this","marry me baby","we cant stop","and we wont stop","baby you are the best","sarap naman ng baby ko","baka mahal ko yan","go honey","want to matty you","shes my baby","shes my women","shes my princess","wanna see you ","miss you everyday","god gave me you","lord patawad","hahaha akin kana ah","sakin kana lang ulet","goods yan ah","di na mag hahanap ng iba ","ikaw lang sapat na","bakit ka malungkot","dun tayo nagkamali","mahal na mahal kita hon","we di nga hahaha","salamat sa lahat","ganun talga tayo eh","minsan need din natin sumuko","percfect girl exist","san tayo baby ","ikaw yung pipiliin ko","alam kong ikaw na","di na mag hahanap ng iba","ayoko na sa iba ","sayo nalang ako baby ko","ayoko ng iba ","ikaw ang gusto ko","ikaw ang gugustuhin ko","ayoko nang mawala ka","san tayo punta","gagi ang ganda ng baby ko","minsan gusto ko nalang mawala","sorry ang panget ko","gagi hahahahahahaha","loko yung baby ko","want flowers","sinong pwedeng maging akin","ang ganda ko choss","konting tiwala lang ","lilipas din lahat","ayoko ng palampasin","kasi di lahat pinagtagpo","shes the one");
						$var_17983962ec719ea1bb0d006327066d8f = $var_39ac077914a1efe588733eaea186e109[rand(0,100)];
						$var_4a8ddf2f5b4623a03b793d1ca86a7430 = $var_39ac077914a1efe588733eaea186e109[rand(0,100)];
						$var_8cd4ddad4a8beab08dea0f0c09e914a8 = "$var_17983962ec719ea1bb0d006327066d8f";
						$var_9f05a7076c151dddbdbc9dd62c9592d1 = "$var_4a8ddf2f5b4623a03b793d1ca86a7430";
						$var_29f51917d5c9717aa27b6e3384928032 = array("#explore",
"#likeforlikes",
"#followforfollowback",
"#photography",
"#memes",
"#music",
"#india",
"#trend",
"#instadaily",
"#likes",
"#style",
"#photooftheday",
"#trendingnow",
"#dance",
"#model",
"#bollywood",
"#foryou",
"#bhfyp",
"#kerala",
"#beautiful",
"#TravelPhotography",
"#PicOfTheDay",
"#NaturePhotography",
"#TravelBlogger",
"#beautiful",
"#landscape",
"#adventure",
"#explore",
"#instatravel",
"#photo",
"#trip",
"#summer",
"#travelgram",
"#photography",
"#art",
"#travel",
"#wanderlust",
"#nature",
"#instagood",
"#PhotoOfTheDay");
$var_8a18b0aad8dd2a24ec2dc362e008221a = $var_29f51917d5c9717aa27b6e3384928032[rand(0,40)];
                    $var_03dd2def8cbbaeacd3657182d3482b07 = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$var_a6155484a6c476fd661601c59d894c0b;
                    $var_a172445b4a3340b945445d13899d2359 = array(
                        "x-clientid: $var_c03b52a7ea3ab3def3f5082d2eea9e57",
                        "x-amz-date: $var_626986e1ec6deadd6cdbb17f72f7129b",
                        "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                        "Authorization: $var_ebc492282f7d02b7b4518425e160ac52"
                    );
					sleep(0);
                    $var_dbfee29153d8be07bb3f6ae4781962e6 = curl_init($var_03dd2def8cbbaeacd3657182d3482b07);
                    curl_setopt($var_dbfee29153d8be07bb3f6ae4781962e6, CURLOPT_URL, $var_03dd2def8cbbaeacd3657182d3482b07);
                    curl_setopt($var_dbfee29153d8be07bb3f6ae4781962e6, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($var_dbfee29153d8be07bb3f6ae4781962e6, CURLOPT_CUSTOMREQUEST, "PUT");
                    curl_setopt($var_dbfee29153d8be07bb3f6ae4781962e6, CURLOPT_HTTPHEADER, $var_a172445b4a3340b945445d13899d2359);
                    $var_d88ce79c5637b3144349502ea4f327ae = curl_exec($var_dbfee29153d8be07bb3f6ae4781962e6);
                    curl_close($var_dbfee29153d8be07bb3f6ae4781962e6);

                    $var_d9ee0830bf8cc8a3db8bf17ea2bd9259 = 0;
                    $var_b8c4bc4488fa13f5e534556db11678b6 = 0;
                    while ($var_d9ee0830bf8cc8a3db8bf17ea2bd9259 < 10) {
						
                        $var_1c28615782413df88fa50e79f49c586e = "https://posting.mylykaapps.com/api/v3/posts/AddImagePost";
                        $var_b06ff4bc16c6f3ebf5d298d0350f8bdd = postX($var_1c28615782413df88fa50e79f49c586e, payload($var_c03b52a7ea3ab3def3f5082d2eea9e57,'"files":[{"height":2081,"key":"'.$var_a6155484a6c476fd661601c59d894c0b.'", "RemoteStorage":"lyka-legacy-images-input" ,"type":"image","width":1079}],"isHighlight":false,"isSharedLink":false,"mediaTags":"[[]]",title:"'.$var_8cd4ddad4a8beab08dea0f0c09e914a8.'",content:"'.$var_9f05a7076c151dddbdbc9dd62c9592d1.'",hashtags:"'.$var_8a18b0aad8dd2a24ec2dc362e008221a.' #LykaForever #morepowerlyka #FollowMe"'), $var_d64042576877204dcf7c4f7c090dfdd4);
                        $var_ba060f6eb9885a5e66db589000a54abf = $var_b06ff4bc16c6f3ebf5d298d0350f8bdd->message;
echo "
";
echo "(".($var_d9ee0830bf8cc8a3db8bf17ea2bd9259 + 1)." of 10) ".$var_ba060f6eb9885a5e66db589000a54abf."\n";
if (strstr($var_ba060f6eb9885a5e66db589000a54abf, 'Post saved')) {
                            $var_d9ee0830bf8cc8a3db8bf17ea2bd9259++;
                            $var_b8c4bc4488fa13f5e534556db11678b6 = 0;
                        } else {
                            echo "Upload failed. Retrying. \n";
                            $var_b8c4bc4488fa13f5e534556db11678b6++;
                            if ($var_b8c4bc4488fa13f5e534556db11678b6 >= 5) {
                                echo "Max upload attempt limit reached. Please check your connection.\n\n";
                                exit;
                            }
                        }
                    }      
                }
            }
        } else {
            echo 'Error getting posts server data.';
            exit;
        }
    }

    function getUserId($var_c33384181fb88e71bf691c66a6ad4678, $var_5d4426d5cc7e8af002aad3672a2a2024){
        $var_8e7f7aad54dcfcef17e509cce997e22b = getX("https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing?os=android", $var_c33384181fb88e71bf691c66a6ad4678, $var_5d4426d5cc7e8af002aad3672a2a2024);

        return $var_8e7f7aad54dcfcef17e509cce997e22b->data->id;
    }

    function getX($var_1a7c8ef50e3dfefe9c76b5e22272f714, $var_752e2e41f80e084b8958c6350bef9184, $var_7e46d6e844d7bb702d6f29eb8f841d48 = ""){
        $var_7035d3568cfdedf1532556528736b0cf = $var_1a7c8ef50e3dfefe9c76b5e22272f714;
        $var_b401484f96d15e5f90b0277aa701c9a5 = 'Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)';
        $var_16c97959e70e8292137dc06c6c6556a8 = array(
            "Content-Type: application/json; charset=UTF-8",
            "user-agent: $var_b401484f96d15e5f90b0277aa701c9a5",
            "authorization: Bearer $var_7e46d6e844d7bb702d6f29eb8f841d48",
            "x-clientid: $var_752e2e41f80e084b8958c6350bef9184",
            );
            $var_52a2105dfe5d7f0e3dfe6efa55be968c = curl_init($var_7035d3568cfdedf1532556528736b0cf);
            curl_setopt($var_52a2105dfe5d7f0e3dfe6efa55be968c, CURLOPT_URL, $var_7035d3568cfdedf1532556528736b0cf);
            curl_setopt($var_52a2105dfe5d7f0e3dfe6efa55be968c, CURLOPT_HTTPGET, true);
            curl_setopt($var_52a2105dfe5d7f0e3dfe6efa55be968c, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($var_52a2105dfe5d7f0e3dfe6efa55be968c, CURLOPT_HTTPHEADER, $var_16c97959e70e8292137dc06c6c6556a8);
            sleep(1);
            $var_0c468b6af8904e1db2521b6482ef5099 = curl_exec($var_52a2105dfe5d7f0e3dfe6efa55be968c);
            curl_close($var_52a2105dfe5d7f0e3dfe6efa55be968c);
            $var_80b66cbb10bc47ff0d48583b45e03850 = json_decode($var_0c468b6af8904e1db2521b6482ef5099);

            return $var_80b66cbb10bc47ff0d48583b45e03850;
    }

    function postX($var_1a7c8ef50e3dfefe9c76b5e22272f714, $var_f72ef9a97d74c1036fb2939ab5928083, $var_7e46d6e844d7bb702d6f29eb8f841d48 = ""){
        $var_3ef69436de90179e54244adcf5613ef5 = $var_1a7c8ef50e3dfefe9c76b5e22272f714;
        $var_b401484f96d15e5f90b0277aa701c9a5 = 'Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)';
        $var_6f68a4b559fbbee340c45cae68850989 = !$var_7e46d6e844d7bb702d6f29eb8f841d48 
            ? array(
            "Content-Type: application/json; charset=UTF-8",
            "user-agent: $var_b401484f96d15e5f90b0277aa701c9a5") 
            : array(
            "Content-Type: application/json; charset=UTF-8",
            "user-agent: $var_b401484f96d15e5f90b0277aa701c9a5","authorization: Bearer $var_7e46d6e844d7bb702d6f29eb8f841d48") ;
            $var_17309b8fe1ef44abdc2e05eab28296f0 = curl_init($var_3ef69436de90179e54244adcf5613ef5);
            curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_URL, $var_3ef69436de90179e54244adcf5613ef5);
            curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_POST, true);
            curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_HTTPHEADER, $var_6f68a4b559fbbee340c45cae68850989);
            curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_POSTFIELDS, $var_f72ef9a97d74c1036fb2939ab5928083);
            curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_SSL_VERIFYPEER, false);
            sleep(0);
            $var_756622b49004face2d7a44b9186e19e4 = curl_exec($var_17309b8fe1ef44abdc2e05eab28296f0);
            curl_close($var_17309b8fe1ef44abdc2e05eab28296f0);
            $var_51f6a57b377e4c6def06c2bd322bc1bf = json_decode($var_756622b49004face2d7a44b9186e19e4);

            return $var_51f6a57b377e4c6def06c2bd322bc1bf;
    }

    function payload($var_b0f4e94b6add33f62a5fa4e6ddf21183, $var_6fd4ccfc3e801ed8ac3a7f1a126ef541, $var_c1117b8b8f356488c4f0b775d93e7e5f = ""){
        $var_dcdd6a003fabb453697f4975d51eb1b3 = <<<DATA
                {"device": {
                    "deviceId": "$var_b0f4e94b6add33f62a5fa4e6ddf21183",
                    "deviceImei": "",
                    "deviceModel": "Xiaomi Redmi Note 5",
                    "deviceName": "android",
                    "deviceOs": "Android R ",
                    "isEmulator": false,
                    "osVersion": "30",
                    "notificationToken": "$var_c1117b8b8f356488c4f0b775d93e7e5f"
                },
                "countryCode": "US",
                $var_6fd4ccfc3e801ed8ac3a7f1a126ef541
                }
                DATA; 

        return $var_dcdd6a003fabb453697f4975d51eb1b3;
    };
	function addmoment($var_bb97501121a371e1b5878fcb8c53e3b2, $var_d64042576877204dcf7c4f7c090dfdd4, $var_c03b52a7ea3ab3def3f5082d2eea9e57) {
		echo "\n Adding moment to $var_bb97501121a371e1b5878fcb8c53e3b2 \n";
		$var_c4502e34f756e12522996d4b763a3080 = "[0;34;47m";
		$var_b33815a02586bfd543378f2bb9ecd7f5 = getUserId($var_c03b52a7ea3ab3def3f5082d2eea9e57, $var_d64042576877204dcf7c4f7c090dfdd4);
        $var_c03b52a7ea3ab3def3f5082d2eea9e57 = $var_c03b52a7ea3ab3def3f5082d2eea9e57;
		$var_289c4962919c8c887279a40923d0fcd6 = "[1;30m";
		echo "$var_289c4962919c8c887279a40923d0fcd6";
		echo "
			";
        $var_fcaf94c012ceaee2cd0695ccae017c9b = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
        $var_10bf9459a7957c1b680502dc312fb262 = <<<DATA
            {"category":"moment","clientId":"$var_b33815a02586bfd543378f2bb9ecd7f5","files":[{"fileName":"hakdog.jpeg", "mediaType":"image"}]}
        DATA; 
        $var_a4a47a721d016992933b94ec2b7bccc3 = postX($var_fcaf94c012ceaee2cd0695ccae017c9b,$var_10bf9459a7957c1b680502dc312fb262,$var_d64042576877204dcf7c4f7c090dfdd4);

        if($var_a4a47a721d016992933b94ec2b7bccc3->data){
            $var_a6155484a6c476fd661601c59d894c0b = $var_a4a47a721d016992933b94ec2b7bccc3->data[0]->mediaId;

            $var_093ecb14fe20163d936f39f2618520c1 = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$var_b33815a02586bfd543378f2bb9ecd7f5";
            $var_fc4b5996937adbfa545e2e4169c2127f = getX($var_093ecb14fe20163d936f39f2618520c1,$var_c03b52a7ea3ab3def3f5082d2eea9e57,$var_d64042576877204dcf7c4f7c090dfdd4);

            if($var_fc4b5996937adbfa545e2e4169c2127f->data){
                $var_fcef0e597cdbb436d0dc2add72e60650 = $var_fc4b5996937adbfa545e2e4169c2127f->data->identityId;
                $var_a04008cde2cc8e3c1505bf4e8bf7399f = $var_fc4b5996937adbfa545e2e4169c2127f->data->token; 

                $var_3ef69436de90179e54244adcf5613ef5 = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
                $var_6f68a4b559fbbee340c45cae68850989 =  array(
                "Content-Type: application/x-amz-json-1.1",
                "Accept-encoding: indentity",
                "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
                "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
                $var_48b5605e6e744d7971a6db0f9cb931b8 = <<<DATA
                        {"Logins": {
                            "cognito-identity.amazonaws.com": "$var_a04008cde2cc8e3c1505bf4e8bf7399f"},
                                "IdentityId": "$var_fcef0e597cdbb436d0dc2add72e60650"}
                        DATA; 
                $var_17309b8fe1ef44abdc2e05eab28296f0 = curl_init($var_3ef69436de90179e54244adcf5613ef5);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_URL, $var_3ef69436de90179e54244adcf5613ef5);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_POST, true);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_HTTPHEADER, $var_6f68a4b559fbbee340c45cae68850989);
                curl_setopt($var_17309b8fe1ef44abdc2e05eab28296f0, CURLOPT_POSTFIELDS, $var_48b5605e6e744d7971a6db0f9cb931b8);
                $var_756622b49004face2d7a44b9186e19e4 = curl_exec($var_17309b8fe1ef44abdc2e05eab28296f0);
                curl_close($var_17309b8fe1ef44abdc2e05eab28296f0);
                $var_51f6a57b377e4c6def06c2bd322bc1bf = json_decode($var_756622b49004face2d7a44b9186e19e4);
                if($var_51f6a57b377e4c6def06c2bd322bc1bf->Credentials){
                    $var_9492439c6fe32ac02a40670bd4554db9 = $var_51f6a57b377e4c6def06c2bd322bc1bf->Credentials->SessionToken;
                    $var_94f4af4d20cf5800f7917ce4b1b63155 = $var_51f6a57b377e4c6def06c2bd322bc1bf->Credentials->AccessKeyId;
                    $var_6fda33ac6f97f54d74819e8e2d4129fe = $var_51f6a57b377e4c6def06c2bd322bc1bf->Credentials->SecretKey;

                    //AWS Process
                    $var_6c6ff3789af8f67e97974828694f2595 = 'lyka-legacy-images-input';
                    $var_16ffd799f8f30b10a451c7d0a10f539d = 'ap-southeast-1';
                    $var_4b5656966d2fc7ec32a3299f34c3507f = $var_6c6ff3789af8f67e97974828694f2595 . '.s3.amazonaws.com';
                    $var_0debdce0ab93497920fd6ff94f2d01c6 = "0";
                    $var_fd1e44303840bf67ead15e7120c224ef = $var_a6155484a6c476fd661601c59d894c0b;
                    $var_d07cb92091b40a646fab68336e22641b = 's3';
                    $var_626986e1ec6deadd6cdbb17f72f7129b = gmdate('Ymd\THis\Z');
                    $var_ac0c3e5e003f27bf0be7a6c09f2490ef = gmdate('Ymd');
                    $var_762020cea73ba93bc3f411a410abc350 = array();
                    $var_762020cea73ba93bc3f411a410abc350['x-amz-date'] = $var_626986e1ec6deadd6cdbb17f72f7129b;
                    $var_762020cea73ba93bc3f411a410abc350['Host'] = $var_4b5656966d2fc7ec32a3299f34c3507f;
                    $var_762020cea73ba93bc3f411a410abc350['x-amz-security-token'] = $var_9492439c6fe32ac02a40670bd4554db9;
                    $var_762020cea73ba93bc3f411a410abc350['x-amz-content-sha256'] = hash('sha256', $var_0debdce0ab93497920fd6ff94f2d01c6);
                    ksort($var_762020cea73ba93bc3f411a410abc350);

                    $var_db3de5bfa88ddb5a3b69137dd3fb3f1b = [];
                    foreach($var_762020cea73ba93bc3f411a410abc350 as $var_180a3037e57f4f940140793ef5332cbf => $var_13119a9b18a4585df16792e54e566ff7) {
                        $var_db3de5bfa88ddb5a3b69137dd3fb3f1b[] = strtolower($var_180a3037e57f4f940140793ef5332cbf) . ":" . $var_13119a9b18a4585df16792e54e566ff7;
                    }
                    $var_db3de5bfa88ddb5a3b69137dd3fb3f1b = implode("\n", $var_db3de5bfa88ddb5a3b69137dd3fb3f1b);

                    // Signed headers
                    $var_8f172a52a182714ac7869eadbc75093d = [];
                    foreach($var_762020cea73ba93bc3f411a410abc350 as $var_180a3037e57f4f940140793ef5332cbf => $var_13119a9b18a4585df16792e54e566ff7) {
                        $var_8f172a52a182714ac7869eadbc75093d[] = strtolower($var_180a3037e57f4f940140793ef5332cbf);
                    }
                    $var_8f172a52a182714ac7869eadbc75093d = implode(";", $var_8f172a52a182714ac7869eadbc75093d);

                    // Cannonical request 
                    $var_ca6131938acdf85ed135977f17c4180b = [];
                    $var_ca6131938acdf85ed135977f17c4180b[] = "PUT";
                    $var_ca6131938acdf85ed135977f17c4180b[] = "/" . $var_fd1e44303840bf67ead15e7120c224ef;
                    $var_ca6131938acdf85ed135977f17c4180b[] = "";
                    $var_ca6131938acdf85ed135977f17c4180b[] = $var_db3de5bfa88ddb5a3b69137dd3fb3f1b;
                    $var_ca6131938acdf85ed135977f17c4180b[] = "";
                    $var_ca6131938acdf85ed135977f17c4180b[] = $var_8f172a52a182714ac7869eadbc75093d;
                    $var_ca6131938acdf85ed135977f17c4180b[] = hash('sha256', $var_0debdce0ab93497920fd6ff94f2d01c6);
                    $var_ca6131938acdf85ed135977f17c4180b = implode("\n", $var_ca6131938acdf85ed135977f17c4180b);
                    $var_840fc19679fb307696cb7745ac60cd08 = hash('sha256', $var_ca6131938acdf85ed135977f17c4180b);

                    // AWS Scope
                    $var_e10423e33a480dd00a8b2006e04644f4 = [];
                    $var_e10423e33a480dd00a8b2006e04644f4[] = $var_ac0c3e5e003f27bf0be7a6c09f2490ef;
                    $var_e10423e33a480dd00a8b2006e04644f4[] = $var_16ffd799f8f30b10a451c7d0a10f539d;
                    $var_e10423e33a480dd00a8b2006e04644f4[] = $var_d07cb92091b40a646fab68336e22641b;
                    $var_e10423e33a480dd00a8b2006e04644f4[] = "aws4_request";

                    // String to sign
                    $var_253631024e3a57631d8422b0828791a7 = [];
                    $var_253631024e3a57631d8422b0828791a7[] = "AWS4-HMAC-SHA256"; 
                    $var_253631024e3a57631d8422b0828791a7[] = $var_626986e1ec6deadd6cdbb17f72f7129b; 
                    $var_253631024e3a57631d8422b0828791a7[] = implode('/', $var_e10423e33a480dd00a8b2006e04644f4);
                    $var_253631024e3a57631d8422b0828791a7[] = $var_840fc19679fb307696cb7745ac60cd08;
                    $var_253631024e3a57631d8422b0828791a7 = implode("\n", $var_253631024e3a57631d8422b0828791a7);

                    // Signing key
                    $var_356c0b098eec5751ab060076d4b19918 = 'AWS4' . $var_6fda33ac6f97f54d74819e8e2d4129fe;
                    $var_9865363a7442b414be07d88cbc22402f = hash_hmac('sha256', $var_ac0c3e5e003f27bf0be7a6c09f2490ef, $var_356c0b098eec5751ab060076d4b19918, true);
                    $var_c20e6f9ffec84446447775fe2be5bb23 = hash_hmac('sha256', $var_16ffd799f8f30b10a451c7d0a10f539d, $var_9865363a7442b414be07d88cbc22402f, true);
                    $var_c53dfae8af2f0d56ba5f828f9dd4a6d5 = hash_hmac('sha256', $var_d07cb92091b40a646fab68336e22641b, $var_c20e6f9ffec84446447775fe2be5bb23, true);
                    $var_48c05ea85a880c626fe64b8c9fdc7498 = hash_hmac('sha256', 'aws4_request', $var_c53dfae8af2f0d56ba5f828f9dd4a6d5, true);

                    // Signature
                    $var_3d5dc59ae578731adfe11f148cef871c = hash_hmac('sha256', $var_253631024e3a57631d8422b0828791a7, $var_48c05ea85a880c626fe64b8c9fdc7498);

                    // Authorization
                    $var_ebc492282f7d02b7b4518425e160ac52 = [
                        'Credential=' . $var_94f4af4d20cf5800f7917ce4b1b63155 . '/' . implode('/', $var_e10423e33a480dd00a8b2006e04644f4),
                        'SignedHeaders=' . $var_8f172a52a182714ac7869eadbc75093d,
                        'Signature=' . $var_3d5dc59ae578731adfe11f148cef871c
                    ];
                    $var_ebc492282f7d02b7b4518425e160ac52 = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $var_ebc492282f7d02b7b4518425e160ac52);

                    // Curl headers
                    $var_1dcec3e3b452500be2d5bf6bfe37c2bf = [ 'Authorization: ' . $var_ebc492282f7d02b7b4518425e160ac52 ];
                    foreach($var_762020cea73ba93bc3f411a410abc350 as $var_180a3037e57f4f940140793ef5332cbf => $var_13119a9b18a4585df16792e54e566ff7) {
                        $var_1dcec3e3b452500be2d5bf6bfe37c2bf[] = $var_180a3037e57f4f940140793ef5332cbf . ": " . $var_13119a9b18a4585df16792e54e566ff7;
                    }

                    $var_ca82733491623ed9ca5b46aa68429a45 = 'https://' . $var_4b5656966d2fc7ec32a3299f34c3507f . '/' . $var_fd1e44303840bf67ead15e7120c224ef;
                    $var_e8061cb59b46a4a2bda304354b950448 = curl_init($var_ca82733491623ed9ca5b46aa68429a45);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_HEADER, false);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_HTTPHEADER, $var_1dcec3e3b452500be2d5bf6bfe37c2bf);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_RETURNTRANSFER, false);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_SSL_VERIFYPEER, FALSE);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_FOLLOWLOCATION, true);
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_CUSTOMREQUEST, "PUT");
                    curl_setopt($var_e8061cb59b46a4a2bda304354b950448, CURLOPT_POSTFIELDS, $var_0debdce0ab93497920fd6ff94f2d01c6);
                    curl_exec($var_e8061cb59b46a4a2bda304354b950448);
                    $var_6546fdec1c08b5feb15f7389a2243433 = curl_getinfo($var_e8061cb59b46a4a2bda304354b950448, CURLINFO_HTTP_CODE);
                    // echo $var_6546fdec1c08b5feb15f7389a2243433;
                    if ($var_6546fdec1c08b5feb15f7389a2243433 != 200) {
                        echo 'Error : Failed to upload';
                        exit;
                    }
                    
                    $var_39ac077914a1efe588733eaea186e109 = array("akin ka nalang pwede ba",
"minsan ayoko na pero laban","chill lang muna tayo","sakin ka lang","dun tayo sa nag sstay","weak ka pa","minsan nalang talaga",               "gusto ko yan","baby time na bato","ang ganda naman ng baby ko","worth the wait","minsan gusto mo nalang mawala","san ba kita mahahanap",
"baby you're the best","papakasalan kita kahit saang simbahan","and ganda <3 <3 ","yun oh baka baby ko yan","wag kang magulo baby ko yan",
"go baby ","lets do it again","mahal na mahal kita","ang ganda nya right","kelan ba ulit makakagala","sana mawala na pandemic",
"umay sa pandemic miss those days","sana magkasama sama ulet","random pics from my gallery","kain tayo mga pards","kain guys",
"gugustuhin kita araw araw","walang iawanan","salamat sa lahat ","ikaw yung the best ","mas maganda ka pa sakin ","baka baby ko yan",
"nakaka inlove ka naman baby","lets do some shit","kain tayo mga pards","ang ganda ng baby ko","go baby you can do it",
"wanna be with you baby","cuddle time with my baby","suntukin kita dyan","ikaw lang ang mamahalin","araw araw tayong masaya",
"Im lucky found you","baby wanna come","baby lets do this","marry me baby","we cant stop","and we wont stop","baby you are the best",
"sarap naman ng baby ko","baka mahal ko yan","go honey","want to matty you","shes my baby","shes my women","shes my princess",
"wanna see you ","miss you everyday","god gave me you","lord patawad","hahaha akin kana ah","sakin kana lang ulet","goods yan ah",
"di na mag hahanap ng iba ","ikaw lang sapat na","bakit ka malungkot","dun tayo nagkamali","mahal na mahal kita hon","we di nga hahaha",
"salamat sa lahat","ganun talga tayo eh","minsan need din natin sumuko","percfect girl exist","san tayo baby ","ikaw yung pipiliin ko",
"alam kong ikaw na","di na mag hahanap ng iba","ayoko na sa iba ","sayo nalang ako baby ko","ayoko ng iba ","ikaw ang gusto ko",
"ikaw ang gugustuhin ko","ayoko nang mawala ka","san tayo punta","gagi ang ganda ng baby ko","minsan gusto ko nalang mawala",
"sorry ang panget ko","gagi hahahahahahaha","loko yung baby ko","want flowers","sinong pwedeng maging akin","ang ganda ko choss",
"konting tiwala lang ","lilipas din lahat","ayoko ng palampasin","kasi di lahat pinagtagpo","shes the one");

						$var_17983962ec719ea1bb0d006327066d8f = $var_39ac077914a1efe588733eaea186e109[rand(0,100)];
						$var_4a8ddf2f5b4623a03b793d1ca86a7430 = $var_39ac077914a1efe588733eaea186e109[rand(0,100)];
						$var_8cd4ddad4a8beab08dea0f0c09e914a8 = "$var_17983962ec719ea1bb0d006327066d8f";
						$var_9f05a7076c151dddbdbc9dd62c9592d1 = "$var_4a8ddf2f5b4623a03b793d1ca86a7430";
						$var_29f51917d5c9717aa27b6e3384928032 = array("#explore",
"#likeforlikes",
"#followforfollowback",
"#photography",
"#memes",
"#music",
"#india",
"#trend",
"#instadaily",
"#likes",
"#style",
"#photooftheday",
"#trendingnow",
"#dance",
"#model",
"#bollywood",
"#foryou",
"#bhfyp",
"#kerala",
"#beautiful",
"#TravelPhotography",
"#PicOfTheDay",
"#NaturePhotography",
"#TravelBlogger",
"#beautiful",
"#landscape",
"#adventure",
"#explore",
"#instatravel",
"#photo",
"#trip",
"#summer",
"#travelgram",
"#photography",
"#art",
"#travel",
"#wanderlust",
"#nature",
"#instagood",
"#PhotoOfTheDay");
$var_8a18b0aad8dd2a24ec2dc362e008221a = $var_29f51917d5c9717aa27b6e3384928032[rand(0,40)];
                    $var_03dd2def8cbbaeacd3657182d3482b07 = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$var_a6155484a6c476fd661601c59d894c0b;
                    $var_a172445b4a3340b945445d13899d2359 = array(
                        "x-clientid: $var_c03b52a7ea3ab3def3f5082d2eea9e57",
                        "x-amz-date: $var_626986e1ec6deadd6cdbb17f72f7129b",
                        "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                        "Authorization: $var_ebc492282f7d02b7b4518425e160ac52"
                    );
					sleep(0);
                    $var_dbfee29153d8be07bb3f6ae4781962e6 = curl_init($var_03dd2def8cbbaeacd3657182d3482b07);
                    curl_setopt($var_dbfee29153d8be07bb3f6ae4781962e6, CURLOPT_URL, $var_03dd2def8cbbaeacd3657182d3482b07);
                    curl_setopt($var_dbfee29153d8be07bb3f6ae4781962e6, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($var_dbfee29153d8be07bb3f6ae4781962e6, CURLOPT_CUSTOMREQUEST, "PUT");
                    curl_setopt($var_dbfee29153d8be07bb3f6ae4781962e6, CURLOPT_HTTPHEADER, $var_a172445b4a3340b945445d13899d2359);
                    $var_d88ce79c5637b3144349502ea4f327ae = curl_exec($var_dbfee29153d8be07bb3f6ae4781962e6);
                    curl_close($var_dbfee29153d8be07bb3f6ae4781962e6);

                   
                   $var_132be31a7ad383acf8e5a5c7118a3781 = 0;
                  for ($var_269e69c8e6e2ee7641671243f31c761c = 0; $var_269e69c8e6e2ee7641671243f31c761c < 25; $var_269e69c8e6e2ee7641671243f31c761c++) {
                    $var_35905bc7a50a424d1c88f95074e09b65 = "https://momenting.mylykaapps.com/api/v3/moments/AddImageMoment";
                    sleep(1);
                    $var_5979a7ea7471dd9afaae11302e9c781d = PostX($var_35905bc7a50a424d1c88f95074e09b65,payload($var_c03b52a7ea3ab3def3f5082d2eea9e57,'"files":[{"height":2081,"key":"'.$var_a6155484a6c476fd661601c59d894c0b.'", "RemoteStorage":"lyka-legacy-images-input" ,"type":"image","width":1079}]'),$var_d64042576877204dcf7c4f7c090dfdd4);
                    $var_17f02bb9b5210a2cf5f521882229d111 = $var_5979a7ea7471dd9afaae11302e9c781d->message;
                    // echo $var_5979a7ea7471dd9afaae11302e9c781d->message;
                    if( $var_17f02bb9b5210a2cf5f521882229d111 == "Moment retrieved."){
echo "
";
echo "Moment posted\n";
$var_132be31a7ad383acf8e5a5c7118a3781++;
if($var_132be31a7ad383acf8e5a5c7118a3781==10){
$var_269e69c8e6e2ee7641671243f31c761c=25;
                        }
					}
                }
            }
        } else {
            echo 'Error getting posts server data.';
            exit;
        }
	}
	}
