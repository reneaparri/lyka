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
echo "Add post/moment\n\n";

//init dummy array
$dummyarray = []; 
//$passarray=[];

//$NoofDum = readline('No of dummies to use?: ');

//loop to # of dummy account
echo "$Cyan";
//for ($x = 0;$x < $NoofDum;$x++) {
do {
   $Dummy = readline('Input Username (or blank): ');
   array_push($dummyarray, "$Dummy",);
//   $pass = readline('dummy password:' );
//   array_push($passarray,"$pass");
//}
} while ($Dummy !='');

$pass=readline('Enter password: ');

echo "$Yellow\n";

echo "pls. wait ...\n\n";

foreach ($dummyarray as $user) {

echo "$White\n";
echo "logging in [$user]...\n";

echo "$Cyan";


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
   echo "$White";
   echo "Adding post #$postloop to $vuser\n"; 
   //sleep(1);
   $device_id = 'fcbe87b62342fbac';
   echo "$Cyan";
   addPosts($vuser, $bearer, $device_id);
   echo "$Yellow";
   echo "Adding moment #$postloop to $vuser\n"; 
   addMoments($vuser, $bearer, $device_id);

} //end of for loop
echo "$White";
echo "\n\nAdd Post/Moments done.\n";
echo "Thank you\n\n";

} //end of status==1   

} //end of loop for x username


function addPosts($user, $bearer, $device_id) {
 //  echo "\nAdding posts to $user \n";

   $user_id = getUserId($device_id, $bearer);
   $device_id = $device_id;

   echo "\nUploading Posts\n\n";
   $uploadLegacy = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
   $uploadPay = <<<DATA
       {"category":"post","clientId":"$user_id","files":[{"fileName":"https://www.w3schools.com/Css/img_lights.jpg", "mediaType":"image"}]}
   DATA; 
   $uploadLegPost = postX($uploadLegacy,$uploadPay,$bearer);

   if($uploadLegPost->data){
       $mediaID = $uploadLegPost->data[0]->mediaId;

       $amznToken = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$user_id";
       $firstGet = getX($amznToken,$device_id,$bearer);

       if($firstGet->data){
           $amzIDid = $firstGet->data->identityId;
           $amzIDtoken = $firstGet->data->token; 

           $postURL = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
           $postHeader =  array(
           "Content-Type: application/x-amz-json-1.1",
           "Accept-encoding: indentity",
           "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
           "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
           $amndata = <<<DATA
                   {"Logins": {
                       "cognito-identity.amazonaws.com": "$amzIDtoken"},
                           "IdentityId": "$amzIDid"}
                   DATA; 
           $postCurl = curl_init($postURL);
           curl_setopt($postCurl, CURLOPT_URL, $postURL);
           curl_setopt($postCurl, CURLOPT_POST, true);
           curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
           curl_setopt($postCurl, CURLOPT_POSTFIELDS, $amndata);
           $postResp = curl_exec($postCurl);
           curl_close($postCurl);
           $postjson = json_decode($postResp);
           if($postjson->Credentials){
               $sessToken = $postjson->Credentials->SessionToken;
               $aws_access_key_id = $postjson->Credentials->AccessKeyId;
               $aws_secret_access_key = $postjson->Credentials->SecretKey;

               //AWS Process
               $bucket_name = 'lyka-legacy-images-input';
               $aws_region = 'ap-southeast-1';
               $host_name = $bucket_name . '.s3.amazonaws.com';
               $content = "0";
               $content_title = $mediaID;
               $aws_service_name = 's3';
               $timestamp = gmdate('Ymd\THis\Z');
               $date = gmdate('Ymd');
               $request_headers = array();
               $request_headers['x-amz-date'] = $timestamp;
               $request_headers['Host'] = $host_name;
               $request_headers['x-amz-security-token'] = $sessToken;
               $request_headers['x-amz-content-sha256'] = hash('sha256', $content);
               ksort($request_headers);

               $canonical_headers = [];
               foreach($request_headers as $key => $value) {
                   $canonical_headers[] = strtolower($key) . ":" . $value;
               }
               $canonical_headers = implode("\n", $canonical_headers);

               // Signed headers
               $signed_headers = [];
               foreach($request_headers as $key => $value) {
                   $signed_headers[] = strtolower($key);
               }
               $signed_headers = implode(";", $signed_headers);

               // Cannonical request 
               $canonical_request = [];
               $canonical_request[] = "PUT";
               $canonical_request[] = "/" . $content_title;
               $canonical_request[] = "";
               $canonical_request[] = $canonical_headers;
               $canonical_request[] = "";
               $canonical_request[] = $signed_headers;
               $canonical_request[] = hash('sha256', $content);
               $canonical_request = implode("\n", $canonical_request);
               $hashed_canonical_request = hash('sha256', $canonical_request);

               // AWS Scope
               $scope = [];
               $scope[] = $date;
               $scope[] = $aws_region;
               $scope[] = $aws_service_name;
               $scope[] = "aws4_request";

               // String to sign
               $string_to_sign = [];
               $string_to_sign[] = "AWS4-HMAC-SHA256"; 
               $string_to_sign[] = $timestamp; 
               $string_to_sign[] = implode('/', $scope);
               $string_to_sign[] = $hashed_canonical_request;
               $string_to_sign = implode("\n", $string_to_sign);

               // Signing key
               $kSecret = 'AWS4' . $aws_secret_access_key;
               $kDate = hash_hmac('sha256', $date, $kSecret, true);
               $kRegion = hash_hmac('sha256', $aws_region, $kDate, true);
               $kService = hash_hmac('sha256', $aws_service_name, $kRegion, true);
               $kSigning = hash_hmac('sha256', 'aws4_request', $kService, true);

               // Signature
               $signature = hash_hmac('sha256', $string_to_sign, $kSigning);

               // Authorization
               $authorization = [
                   'Credential=' . $aws_access_key_id . '/' . implode('/', $scope),
                   'SignedHeaders=' . $signed_headers,
                   'Signature=' . $signature
               ];
               $authorization = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $authorization);

               // Curl headers
               $curl_headers = [ 'Authorization: ' . $authorization ];
               foreach($request_headers as $key => $value) {
                   $curl_headers[] = $key . ": " . $value;
               }

               $url = 'https://' . $host_name . '/' . $content_title;
               $ch = curl_init($url);
               curl_setopt($ch, CURLOPT_HEADER, false);
               curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_headers);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
               curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
               curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
               curl_exec($ch);
               $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
               // echo $http_code;
               if ($http_code != 200) {
                   echo 'Error : Failed to upload';
               }
               
               $delURL = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$mediaID;
               $delHeader = array(
                   "x-clientid: $device_id",
                   "x-amz-date: $timestamp",
                   "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                   "Authorization: $authorization"
               );
               $deleteCurlx = curl_init($delURL);
               curl_setopt($deleteCurlx, CURLOPT_URL, $delURL);
               curl_setopt($deleteCurlx, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($deleteCurlx, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($deleteCurlx, CURLOPT_HTTPHEADER, $delHeader);
               $deleteResp = curl_exec($deleteCurlx);
               curl_close($deleteCurlx);

               $uploaded_count = 0;
               $upload_attempt = 0;
               while ($uploaded_count < 1) {
                   sleep(2);
                   $uploadPost = "https://posting.mylykaapps.com/api/v3/posts/AddImagePost";
                   $post = postX($uploadPost, payload($device_id,'"files":[{"height":2081,"key":"'.$mediaID.'", "RemoteStorage":"lyka-legacy-images-input" ,"type":"image","width":1079}],"isHighlight":false,"isSharedLink":false,"mediaTags":"[[]]",title:""'), $bearer);
                   $response_message = $post->message;
                   echo "$response_message.";
                   if (strstr($response_message, 'Post saved')) {
                       $uploaded_count++;
                       $upload_attempt = 0;
                   } else {
                       echo "Upload failed. Retrying. \n";
                       $upload_attempt++;
                       if ($upload_attempt >= 5) {
                           break;
                       }
                   }
               }      
           }
       }
   } else {
   }
}

function addMoments($user, $bearer, $device_id) {
   

   $user_id = getUserId($device_id, $bearer);

//   echo "\nAdding moments\n";

   $uploadLegacy = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
   $uploadPay = <<<DATA
       {"category":"moment","clientId":"$user_id","files":[{"fileName":"https://www.w3schools.com/Css/img_lights.jpg", "mediaType":"image"}]}
   DATA; 
   $uploadLegPost = postX($uploadLegacy,$uploadPay,$bearer);

   if($uploadLegPost->data){
       $mediaID = $uploadLegPost->data[0]->mediaId;

       $amznToken = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$user_id";
       $firstGet = getX($amznToken,$device_id,$bearer);

       if($firstGet->data){
           $amzIDid = $firstGet->data->identityId;
           $amzIDtoken = $firstGet->data->token; 

           $postURL = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
           $postHeader =  array(
           "Content-Type: application/x-amz-json-1.1",
           "Accept-encoding: indentity",
           "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
           "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
           $amndata = <<<DATA
                   {"Logins": {
                       "cognito-identity.amazonaws.com": "$amzIDtoken"},
                           "IdentityId": "$amzIDid"}
                   DATA; 
           $postCurl = curl_init($postURL);
           curl_setopt($postCurl, CURLOPT_URL, $postURL);
           curl_setopt($postCurl, CURLOPT_POST, true);
           curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
           curl_setopt($postCurl, CURLOPT_POSTFIELDS, $amndata);
           $postResp = curl_exec($postCurl);
           curl_close($postCurl);
           $postjson = json_decode($postResp);
           if($postjson->Credentials){
               $sessToken = $postjson->Credentials->SessionToken;
               $aws_access_key_id = $postjson->Credentials->AccessKeyId;
               $aws_secret_access_key = $postjson->Credentials->SecretKey;

               //AWS Process
               $bucket_name = 'lyka-legacy-images-input';
               $aws_region = 'ap-southeast-1';
               $host_name = $bucket_name . '.s3.amazonaws.com';
               $content = "0";
               $content_title = $mediaID;
               $aws_service_name = 's3';
               $timestamp = gmdate('Ymd\THis\Z');
               $date = gmdate('Ymd');
               $request_headers = array();
               $request_headers['x-amz-date'] = $timestamp;
               $request_headers['Host'] = $host_name;
               $request_headers['x-amz-security-token'] = $sessToken;
               $request_headers['x-amz-content-sha256'] = hash('sha256', $content);
               ksort($request_headers);

               $canonical_headers = [];
               foreach($request_headers as $key => $value) {
                   $canonical_headers[] = strtolower($key) . ":" . $value;
               }
               $canonical_headers = implode("\n", $canonical_headers);

               // Signed headers
               $signed_headers = [];
               foreach($request_headers as $key => $value) {
                   $signed_headers[] = strtolower($key);
               }
               $signed_headers = implode(";", $signed_headers);

               // Cannonical request 
               $canonical_request = [];
               $canonical_request[] = "PUT";
               $canonical_request[] = "/" . $content_title;
               $canonical_request[] = "";
               $canonical_request[] = $canonical_headers;
               $canonical_request[] = "";
               $canonical_request[] = $signed_headers;
               $canonical_request[] = hash('sha256', $content);
               $canonical_request = implode("\n", $canonical_request);
               $hashed_canonical_request = hash('sha256', $canonical_request);

               // AWS Scope
               $scope = [];
               $scope[] = $date;
               $scope[] = $aws_region;
               $scope[] = $aws_service_name;
               $scope[] = "aws4_request";

               // String to sign
               $string_to_sign = [];
               $string_to_sign[] = "AWS4-HMAC-SHA256"; 
               $string_to_sign[] = $timestamp; 
               $string_to_sign[] = implode('/', $scope);
               $string_to_sign[] = $hashed_canonical_request;
               $string_to_sign = implode("\n", $string_to_sign);

               // Signing key
               $kSecret = 'AWS4' . $aws_secret_access_key;
               $kDate = hash_hmac('sha256', $date, $kSecret, true);
               $kRegion = hash_hmac('sha256', $aws_region, $kDate, true);
               $kService = hash_hmac('sha256', $aws_service_name, $kRegion, true);
               $kSigning = hash_hmac('sha256', 'aws4_request', $kService, true);

               // Signature
               $signature = hash_hmac('sha256', $string_to_sign, $kSigning);

               // Authorization
               $authorization = [
                   'Credential=' . $aws_access_key_id . '/' . implode('/', $scope),
                   'SignedHeaders=' . $signed_headers,
                   'Signature=' . $signature
               ];
               $authorization = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $authorization);

               // Curl headers
               $curl_headers = [ 'Authorization: ' . $authorization ];
               foreach($request_headers as $key => $value) {
                   $curl_headers[] = $key . ": " . $value;
               }

               $url = 'https://' . $host_name . '/' . $content_title;
               $ch = curl_init($url);
               curl_setopt($ch, CURLOPT_HEADER, false);
               curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_headers);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
               curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
               curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
               curl_exec($ch);
               $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
               // echo $http_code;
               if ($http_code != 200) {
                   echo 'Error : Failed to upload';
               }
               
               $delURL = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$mediaID;
               $delHeader = array(
                   "x-clientid: $device_id",
                   "x-amz-date: $timestamp",
                   "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                   "Authorization: $authorization"
               );
               $deleteCurlx = curl_init($delURL);
               curl_setopt($deleteCurlx, CURLOPT_URL, $delURL);
               curl_setopt($deleteCurlx, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($deleteCurlx, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($deleteCurlx, CURLOPT_HTTPHEADER, $delHeader);
               $deleteResp = curl_exec($deleteCurlx);
               curl_close($deleteCurlx);

               $uploaded_count = 0;
               $upload_attempt = 0;
               while ($uploaded_count < 1) {
                   sleep(2);
                   $uploadMoment = "https://momenting.mylykaapps.com/api/v3/moments/AddImageMoment";
                   $momnts = postX($uploadMoment, payload($device_id,'"files":[{"height":2081,"key":"'.$mediaID.'", "RemoteStorage":"lyka-legacy-images-input" ,"type":"image","width":1079}]'), $bearer);
                   $response_message = $momnts->message;
                   if( $response_message == "Moment retrieved."){
                       echo "
.$response_message.";
                       $uploaded_count++;
                       $upload_attempt = 0;
                   } else {
                       echo "Upload failed. Retrying. \n";
                       $upload_attempt++;
                       if ($upload_attempt >= 5) {
                           echo "Max upload attempt limit reached. Please check your connection.\n\n";
                           break;
                       }
                   }
               }      
           }
       }
   } else {
       echo 'Error getting moments server data.';
   }
}

function getUserId($rDevID, $mcCookie){
   $getUID = getX("https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing?os=android", $rDevID, $mcCookie);

   return $getUID->data->id;
}

function getX($urlx, $gdevID, $cooks = ""){
   $getURL = $urlx;
   $uAgent = 'Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)';
   $getHeader = array(
       "Content-Type: application/json; charset=UTF-8",
       "user-agent: $uAgent",
       "authorization: Bearer $cooks",
       "x-clientid: $gdevID",
       );
       $getCurl = curl_init($getURL);
       curl_setopt($getCurl, CURLOPT_URL, $getURL);
       curl_setopt($getCurl, CURLOPT_HTTPGET, true);
       curl_setopt($getCurl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($getCurl, CURLOPT_HTTPHEADER, $getHeader);
       sleep(1);
       $getResp = curl_exec($getCurl);
       curl_close($getCurl);
       $getjson = json_decode($getResp);

       return $getjson;
}

function postX($urlx, $payloader, $cooks = ""){
   $postURL = $urlx;
   $uAgent = 'Lyka/3.6.21 (com.thingsilikeapp; build:821 Android O_MR1 28)';
   $postHeader = !$cooks 
       ? array(
       "Content-Type: application/json; charset=UTF-8",
       "user-agent: $uAgent") 
       : array(
       "Content-Type: application/json; charset=UTF-8",
       "user-agent: $uAgent","authorization: Bearer $cooks") ;
       $postCurl = curl_init($postURL);
       curl_setopt($postCurl, CURLOPT_URL, $postURL);
       curl_setopt($postCurl, CURLOPT_POST, true);
       curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
       curl_setopt($postCurl, CURLOPT_POSTFIELDS, $payloader);
       curl_setopt($postCurl, CURLOPT_SSL_VERIFYHOST, false);
       curl_setopt($postCurl, CURLOPT_SSL_VERIFYPEER, false);
       sleep(1);
       $postResp = curl_exec($postCurl);
       curl_close($postCurl);
       $postjson = json_decode($postResp);

       return $postjson;
}

function payload($devIDx, $xtraPay, $rTokenx = ""){
   $valdata = <<<DATA
           {"device": {
               "deviceId": "$devIDx",
               "deviceImei": "",
               "deviceModel": "Xiaomi Redmi Note 5",
               "deviceName": "android",
               "deviceOs": "Android R ",
               "isEmulator": false,
               "osVersion": "30",
               "notificationToken": "$rTokenx"
           },
           "countryCode": "US",
           $xtraPay
           }
           DATA; 

   return $valdata;
}
