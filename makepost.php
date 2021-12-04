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

echo "$BWhite";
echo "#LYKA\n";
echo "Create a post\n\n";

//init dummy array
$dummyarray = []; 
//$passarray=[];

//$NoofDum = readline('No of dummies to use?: ');

//loop to # of dummy account

//for ($x = 0;$x < $NoofDum;$x++) {
   $Dummy = readline('Username to autopost: ');
   array_push($dummyarray, "$Dummy",);
//   $pass = readline('dummy password:' );
//   array_push($passarray,"$pass");
//}

$pass=readline('Enter password: ');

echo "$Yellow\n";

echo "pls. wait ...\n\n";

//Login to account
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
  echo "$user error logging in to your account.\n";
  //echo "program will terminate.\n";  
  //exit; 
}

if ($status == 1) {

   echo "$Cyan\n";
   echo "$user login successful\n";

//loop 11 times
for ($postloop=1; $postloop<12; $postloop++) { 

   $url   ='https://posting.mylykaapps.com/api/v3/posts/addpost';
   $curl = curl_init($url);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_POST, true)   ; 
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);   
   curl_setopt($curl, CURLOPT_ENCODING, '');  
   curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
   curl_setopt($curl, CURLOPT_TIMEOUT,0);
   curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
   curl_setopt($curl,CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
   curl_setopt($curl, CURLOPT_POST, true);
      $Var_Data = <<<DATA
         {  "boundary" :"7e9c11fd-987e-4b4f-bf14-8a04ac8da26e", 
           "title" : "", 
           "content" : "", 
           "url" : "", 
           "titleUrl" : "", 
           "descriptionUrl" : "", 
           "imageUrl" : "https://dh1u1gri6oel1.cloudfront.net/data/images/wishlists/500206482992/2021816/resized/dfe40ad5-c7a4-41a8-9086-d43c43d70f35.jpeg", 
           "hashtags": "" , 
           "device": {
   "deviceId": "fcbe87b62342fbac",
   "deviceImei": "fcbe87b62342fbac",
   "deviceModel": "Tecno Spark 7 Pro",
   "deviceName": "android",
   "deviceOs": "Android O_MR1 ",
   "isEmulator": false,
   "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
   "osVersion": "28" } 
}
 DATA;
       $headers =array("authorization: Bearer $bearer", "user-agent: Lyka/3.6.16 (com.thingsilikeapp; build:816 Android O_MR1 28)");
       curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $var_Data);
   $response = curl_exec($curl);
   curl_close($curl);
   $json = json_decode($response);
   $mess = $json->message;
   echo "$mess";
   echo "";


} //end of for loop


} //end of status==1   

