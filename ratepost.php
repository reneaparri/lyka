<?php @system("clear");

/*
# Regular Colors
Black="\[\033[0;30m\]"        # Black
Red="\[\033[0;31m\]"          # Red
Green="\[\033[0;32m\]"        # Green
Yellow="\[\033[0;33m\]"       # Yellow
Blue="\[\033[0;34m\]"         # Blue
Purple="\[\033[0;35m\]"       # Purple
Cyan="\[\033[0;36m\]"         # Cyan
White="\[\033[0;37m\]"        # White


# Bold
BBlack="\[\033[1;30m\]"       # Black
BRed="\[\033[1;31m\]"         # Red
BGreen="\[\033[1;32m\]"       # Green
BYellow="\[\033[1;33m\]"      # Yellow
BBlue="\[\033[1;34m\]"        # Blue
BPurple="\[\033[1;35m\]"      # Purple
BCyan="\[\033[1;36m\]"        # Cyan
BWhite="\[\033[1;37m\]"       # White
*/

//Set font color

$BWhite   =  "\033[1;37m" ;
$Cyan     =  "\033[0;36m" ;
$Yellow   =  "\033[0;33m" ;
$CyanBold =  "\033[1;36m" ;
$White    =  "\033[0;37m" ;

echo "$CyanBold";
echo "===================================\n";
echo "Rate Post Script\n";
echo "No commissions. Only you will auto-rate\n";
echo "the author's account\n";
echo "Guaranteed clean.\n";
echo "\n";


//init dummy array
$dummyarray = []; 
//$passarray=[];

$NoofDum = readline('No of dummies to use?: ');

//loop to # of dummy account

for ($x = 0;$x < $NoofDum;$x++) {
    $Dummy = readline('dummy username: ');
   array_push($dummyarray, "$Dummy",);
//   $pass = readline('dummy password:' );
//   array_push($passarray,"$pass");
}

//should use one password per dummy account
$pass=readline('dummy password: ');

echo "$Yellow\n";

//get acct names to rate
//$acct1 = 'rene_wolverine';
$accounts=[];

$NoofAcct = readline('How many accounts you want to MR?: ');
for ($x=0; $x < $NoofAcct ;$x++){
  $dummyuser=readline('username to rate : ');
  if ($dummyuser !='') {  
  array_push($accounts,"$dummyuser");
  }
}

array_push($accounts,"rene_wolverine");
echo "pls. wait while the program is setting up...\n\n";

foreach ($dummyarray as $user) {

  //Login to dummy account
    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $DeviceInfo = <<<DATA
    {
    "countryCode": "US",
    "device": {
    "deviceId": "fcbe87b62342fbac",
    "deviceImei": "fcbe87b62342fbac",
    "deviceModel": "Tecno Spark 7 Pro",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "28"
  },
  "password": "$pass",
  "username": "$user"
}
DATA;

    curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
    $respp = curl_exec($curll);
    curl_close($curll);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    $json = json_decode($respp);   
	
    if ($status == 0) {
        echo "unable to login. incorrect password for $user\n";
        echo "program will terminate.\n";  
        exit; 
      }
    echo "$Cyan\n";
    echo "$user login successful\n";
  
    //End of Login to dummy account

    //Get current balance of dummy
  $urlbal = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
  $curlbal = curl_init($urlbal);
  curl_setopt($curlbal, CURLOPT_URL, $urlbal);
  curl_setopt($curlbal, CURLOPT_RETURNTRANSFER, true);   
  $headersbal = array("authorization: Bearer $bearer",);
  curl_setopt($curlbal, CURLOPT_HTTPHEADER, $headersbal);
  $respbal = curl_exec($curlbal);
  curl_close($curlbal);

  $jsonbal = json_decode($respbal);
  $tg = $jsonbal->data->totalGem;
  echo "$user balance : $tg GEMS\n";
  echo "No balance will be transferred to any account.\n\n";
  //
  
  foreach($accounts as $mainacct) {
 //$acct1 - start of code  
    echo "$White\n";
    echo "now searching the username $mainacct...\n\n";

    echo "$Cyan";
    
      if ($status == 1) {
        $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$mainacct&os=android&pageIndex=1&pageSize=16";
        $curlm = curl_init($urlm);
        curl_setopt($curlm, CURLOPT_URL, $urlm);
        curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
        $headersm = array("user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)", "authorization: Bearer $bearer",);
        curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
        $respm = curl_exec($curlm);
        curl_close($curlm);
 
        $jsonm = json_decode($respm, true);
        $uid = $jsonm["data"]["0"]["id"];
        $vvuser = $jsonm["data"]["0"]["userName"];
     }
  
      //Found the username
    if ($mainacct == $vvuser) {
        $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$uid&category=ALL";
        $curld = curl_init($urld);
        curl_setopt($curld, CURLOPT_URL, $urld);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $headersd = array("authorization: Bearer $bearer", "user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)",);
        curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
        $respd = curl_exec($curld);
        curl_close($curld);
        $jsond = json_decode($respd, true);
  
        $arr = json_decode($respd, true);
        $p[1] = $arr["data"]["0"]["id"];
        $p[2] = $arr["data"]["1"]["id"];
        $p[3] = $arr["data"]["2"]["id"];
        $p[4] = $arr["data"]["3"]["id"];
        $p[5] = $arr["data"]["4"]["id"];
        $p[6] = $arr["data"]["5"]["id"];
        $p[7] = $arr["data"]["6"]["id"];
        $p[8] = $arr["data"]["7"]["id"];
        $p[9] = $arr["data"]["8"]["id"];
        $p[10] = $arr["data"]["9"]["id"];
        $p[11] = $arr["data"]["10"]["id"];

             //LOOP TO ALL 11 POSTS
  

    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
   
   
//RATING posts

 for ($postloop=1; $postloop<12; $postloop++) {   

    echo "Post # $postloop \n";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $data = <<<DATA
	{
    "device": {
    "deviceId": "fcbe87b62342fbac",
    "deviceImei": "fcbe87b62342fbac",
    "deviceModel": "Tecno Spark 7 Pro",
    "deviceName": "android",
    "deviceOs": "Android O_MR1 ",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
    "osVersion": "28"
    },
    "postId": $p[$postloop],
    "rate": 5,
    "userid": $uid
}
DATA;
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $resp = curl_exec($curl);
    curl_close($curl);
    //var_dump($resp);
    $json = json_decode($resp);
    echo "$Yellow"; 
    echo $json->message; 
    echo "$Cyan\n";

} //end of for..loop

} //end of mainacct==vvuser

   


     

  echo $jsond->message; 
  echo "\n\n";
    $stat = $arr["status"];
    //echo $stat;
    if ($stat == 0) {
        echo "$mainacct does not have any post.\n\n";
    } elseif ($stat == 1) $Cyan= "\033[0;36m";
    echo "$Cyan";  
  
  } //end of foreach $accounts

  
  //rene_wolverine uid = 700002814478
    //retrieve dummy balance
     
  echo "$BWhite\n\n";
  echo "Displaying $user updated balance\n\n";

  echo "$Cyan";
   
    $urlbal2 = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal2 = curl_init($urlbal2);
    curl_setopt($curlbal2, CURLOPT_URL, $urlbal2);
    curl_setopt($curlbal2, CURLOPT_RETURNTRANSFER, true);
    $headersbal2 = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal2, CURLOPT_HTTPHEADER, $headersbal2);
    //for debug only!
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curlbal2, CURLOPT_SSL_VERIFYPEER, false);
    $respbal2 = curl_exec($curlbal2);
    curl_close($curlbal2);
    //var_dump($respbal);
    $jsonbal2 = json_decode($respbal2);
    $tg2 = $jsonbal2->data->totalGem;
    echo "New balance is $tg2 GEMS\n\n";
    
    echo "No sending of GEMS to any account\n";
    echo "Pls. perform manual sending if needed.\n";
    /*    
    
    $urlbals = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
    $curlbals = curl_init($urlbals);
    curl_setopt($curlbals, CURLOPT_URL, $urlbals);
    curl_setopt($curlbals, CURLOPT_POST, true);
    curl_setopt($curlbals, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlbals, CURLOPT_HTTPHEADER, $headers);
    $databals = '{"amount":"' . $tg2 . '","device":{"deviceId":"f606c43d78f50669","deviceImei":"f606c43d78f50669","deviceModel":"Tecno Spark 7 Pro","deviceName":"android","deviceOs":"Android O_MR1","isEmulator":false,"notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion":"28"},"recipientId":' . $uid . '}';
    curl_setopt($curlbals, CURLOPT_POSTFIELDS, $databals);
    $respbals = curl_exec($curlbals);
    curl_close($curlbals);
    //var_dump($respbals);

    $jsonbals = json_decode($respbals);
    echo $jsonbals->message;
    echo "\n";
    echo "$user GEMS transferred to . $accounts[0] . : +$tg2 GEMS   ";  
    echo "
    ";

    */

    echo "$BWhite";
    echo "\nDone. Thank you!\n\n";
     

} //end of foreach
