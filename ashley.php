<?PHP
$Webs = "https://github.com/reneaparri/lyka\n\n";
$Script = "LYKA {add post/moment, rate post, etc.}\n© 2022 Rene Aparri. 2.10.2022\n";

@system("clear");

{

mainmenu();

}

function mainmenu(){

    @system("clear");

    // Regular Colors
$Black    = "\033[0;30m" ;     //  # Black
$CRed     = "\033[0;31m" ;     //  # Red
$Blue     = "\033[0;34m" ;         # Blue
$Cyan     = "\033[0;36m" ;         # Cyan
$White    = "\033[0;37m" ;         # White
$Green    = "\033[0;32m" ;         # Green
$Yellow   = "\033[0;33m" ;         # Yellow

$mainaccounts=[];
$ratersaccount=[];

#my accounts
array_push($mainaccounts,"jadeashley01");
array_push($mainaccounts,"jade_ashley01");
array_push($mainaccounts,"joegie01");
array_push($mainaccounts,"radrian2005");

//these are the raters account
array_push($ratersaccount,"liela0520");
array_push($ratersaccount,"gem5299");
array_push($ratersaccount,"marj8619");
array_push($ratersaccount,"kitt5121");
array_push($ratersaccount,"cel8578");
array_push($ratersaccount,"george8692");

array_push($ratersaccount,"joegie02");
array_push($ratersaccount,"jo0101");
array_push($ratersaccount,"joe0102");
array_push($ratersaccount,"joe0103");
array_push($ratersaccount,"joe0104");

array_push($ratersaccount,"joe0105");
array_push($ratersaccount,"joe0107");
array_push($ratersaccount,"jashley06");
array_push($ratersaccount,"dada2010");
array_push($ratersaccount,"dada2111");

array_push($ratersaccount,"dada2112");
array_push($ratersaccount,"dada2113");
array_push($ratersaccount,"max1980");
array_push($ratersaccount,"max1981");
array_push($ratersaccount,"max1982");

array_push($ratersaccount,"xelle2000");
array_push($ratersaccount,"palin0195");
array_push($ratersaccount,"hil9765");
array_push($ratersaccount,"yes564");
array_push($ratersaccount,"tif897");

array_push($ratersaccount,"rey5489");
array_push($ratersaccount,"rhea765");
array_push($ratersaccount,"yesu3452");
array_push($ratersaccount,"gorry7653");
array_push($ratersaccount,"val9087");

array_push($ratersaccount,"neare3388");
array_push($ratersaccount,"claude4476");
array_push($ratersaccount,"terry2543");

array_push($ratersaccount,"bill9764");
array_push($ratersaccount,"tina3675");

array_push($ratersaccount,"jen5537");
array_push($ratersaccount,"frank4566");
array_push($ratersaccount,"benn2121");
array_push($ratersaccount,"vic2019");
array_push($ratersaccount,"filis2020");

array_push($ratersaccount,"rob3535");
array_push($ratersaccount,"diane4488");
array_push($ratersaccount,"mhae8976");
array_push($ratersaccount,"jeni5567");
array_push($ratersaccount,"bens3377");

array_push($ratersaccount,"girly7754");
array_push($ratersaccount,"mary6565");
array_push($ratersaccount,"dave3789");
array_push($ratersaccount,"frnz2011");
array_push($ratersaccount,"van5567");

array_push($ratersaccount,"bill2656");
array_push($ratersaccount,"cheer5240");
array_push($ratersaccount,"zen8560");
array_push($ratersaccount,"renz8807");
array_push($ratersaccount,"vinice5233");

array_push($ratersaccount,"vee8571");
array_push($ratersaccount,"nell3143");
array_push($ratersaccount,"may8783");
array_push($ratersaccount,"bert8818");
array_push($ratersaccount,"girl8813");    

array_push($ratersaccount,"bianca0353");    
array_push($ratersaccount,"jenny3176");    
array_push($ratersaccount,"nica3162");    
array_push($ratersaccount,"hanny8881");    
array_push($ratersaccount,"germ2951");    
array_push($ratersaccount,"benz5318");    
array_push($ratersaccount,"myla7001");    

array_push($ratersaccount,"tedd5067");
array_push($ratersaccount,"xette5325");
array_push($ratersaccount,"zen5245");
    


print "$White";
//print "$ScriptName\n";
print $GLOBALS['Script'];
print $GLOBALS['Webs'];
    
print "$White\nMAIN MENU";
print "$White\n-----------------------------";

print "$White\na )$Green add posts";
print "$White\nb )$Green add moments";
print "$White\nc )$Green posts rating";
print "$White\nd )$Green check accounts";
print "$White\ne )$Green harvest gems";
print "$White\nf )$Green exit menu";
print "$White\n-----------------------------\n$Yellow";

   print "Your selection > ";
   fscanf(STDIN, "%c",$inputtask);
   
   switch($inputtask) {

       
    case "a" : //add posts
       
        addpostmomentMenu("post",$ratersaccount,$mainaccounts);
        print "\n\n";
        mainmenu();
               
    case "b" : //add moments
        
        addpostmomentMenu("moment",$ratersaccount,$mainaccounts);
        print "\n\n";
        mainmenu();

    case "c" : //raters to main
        
        ratepostmenu($ratersaccount,$mainaccounts);
        print "\n\n";
        mainmenu();

    case "d" :     
        checkgemsmenu($ratersaccount, $mainaccounts);
        print "\n\n";
        mainmenu();
    case "e" :
        
        harvestgemsmenu($ratersaccount, $mainaccounts);
        print "\n\n";
        mainmenu();
    case "f" :
        print "\nthank you";
        print "\nscript exits\n$White\n";
        exit;  
    default :

        @system("clear");
        mainmenu();

   } //end of switch..case

} //mainmenu

  # ///////////////////////////////////////////
  # // checkgems
  # //
  # //////////////////////////////////////////

// THIS IS THE MENU FOR CHECKGEMS  
function checkgemsmenu($ratersaccount, $mainaccounts)
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;      # Cyan
    $White    = "\033[0;37m" ;      # White
    $Green    = "\033[0;32m" ;      # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="CHECK ACCOUNTS\n© 2022 Rene Aparri";

print "$White";
print "$ScriptName\n";
print $GLOBALS['Webs'];
print "\nMenu\n";
print "-----------------------------";
print "$White\na )$Green main accounts";
print "$White\nb )$Green raters accounts";
print "$White\nc )$Green friends account";
print "$White\nd )$Green back to main";
print "$White\n-----------------------------\n$Yellow";

   print "Your selection > ";
   fscanf(STDIN, "%c",$inputtask);

   switch($inputtask) {
      case "a" : //main
        
        checkmaxgems($mainaccounts, "main"); 
        print "\n\n";
        mainmenu();      
      case "b" : //raters
       
        checkmaxgems($ratersaccount, "raters"); 
        print "\n\n";
        mainmenu();      
    case "c" : //friends accounts
       
        checkmaxgems($ratersaccount, "friends"); 
        print "\n\n";
        mainmenu();      
          
    case "d" :
       @system("clear");
       mainmenu();   

    default :
       @system("clear");
       mainmenu();   
   }     
return;

}

  # ///////////////////////////////////////////
  # // checkgems
  # //
  # //////////////////////////////////////////

  //SUB ROUTINE
  function checkmaxgems($accounts, $accounttype)
  {
   @system("clear");
   $Cyan     = "\033[0;36m" ;       # Cyan
   $White    = "\033[0;37m" ;       # White
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;       # Yellow
   
   $ScriptName ="CHECK ACCOUNTS\n© 2022 Rene Aparri";
  

   print "$White";
   print "$ScriptName\n";
   print $GLOBALS['Webs'];
   print "How many GEMS do you have?\n";
  
      $maxaccounts=[];
         
   if($accounttype == "friends")
   {
    $acct=0;
    print "$Yellow\n";
    print "Account username to check\n";
    print "press enter when done\n$Green\n";
    do {
        $inputusername = readline("Username : ");
        if ($inputusername !='') {
        array_push($maxaccounts, "$inputusername",);
        $acct=1;
        }
    } while ($inputusername !='');
    
    if ($acct == 0)
    {
        print "$Yellow";
        print "> pls. enter atleast one (1) username\n\n";
            mainmenu(); 
    } else {
        $start=0;
        $end=count($maxaccounts)-1;
    }

   } else
   {
        printf("$Green\nYou have %s $accounttype account\n$Yellow",count($accounts));
        $start = readline("Start with account no.  : ");
        if ($start == '') { $start=0;} else {$start--;}
        $end =   readline("End with account no.    : ");
        if ($end == '') { $end=count($accounts)-1;} else {$end--;}
        print "$Cyan\nStart [$accounts[$start]]";
        print "$Cyan\nEnd   [$accounts[$end]]\n";

    $maxaccounts=$accounts;     

   }

   print "$Yellow\n";
   print "Input $accounttype account password\n$Green\n";
   $mainpassword=readline('Password : ');
   if ($mainpassword == '')
   {
       print "$Yellow\n**empty password**\n";
       mainmenu();    
   }

   @system("clear");
   print "$White\n";
   print "$ScriptName\n";
   print $GLOBALS['Webs'];
   print "$Yellow\nlet's check your accounts...\n\n";
   sleep(1);

   checkgems($maxaccounts, $start, $end, $mainpassword);
   return;
}
// AN OOP we can use anywhere

function checkgems($maxaccounts, $start, $end, $mainpassword)
{
   $Cyan     = "\033[0;36m" ;      # Cyan
   $White    = "\033[0;37m" ;      # White
   $Green    = "\033[0;32m" ;      # Green
   $Yellow   = "\033[0;33m" ;      # Yellow

   $total=0;
   
   printf("%-2s. %-20s GEMS\n","No","Account Name");
   printf("$White%'-40s\n","");

   $xcount=$start;
   
   do {
   
       $activeaccount=$maxaccounts[$xcount];
       #Login to each account

       $jsonn=logintoaccount($activeaccount,$mainpassword);       
       
       $xcount++;
               
       if ($jsonn != NULL) {

       $msgn = $jsonn->message;

       if ($msgn=="User logged in")
       {
       $status = $jsonn->status;
       $vuser = $jsonn->data->username;
       $bearer = $jsonn->data->token->accessToken;

       $TotalGEMS = getgembalance($bearer);
       
       print "$White";  
       printf("%2s) %-19s $Green %.2f\n",$xcount,$activeaccount,$TotalGEMS);
       $total=$total + $TotalGEMS;
   
       } else { 
        print "$White";  
        printf("%2s) %-15s >$Green $-25s\n",$xcount,$activeaccount,$msgn);
        } 
     
       } else { print "\nLYKA server down\n";}
      //end of user logged in

   } while ($xcount != $end+1);
  //  } //end of loop for each account
  
  
     printf("$White%'-40s\n","");
     printf("%17s GEMS >$Yellow %.2f\n","Total",$total);

     print("$White\n\n");
     $blank=readline("press enter to continue"); 
    
     mainmenu();
   } //end checkgems


#   ///////////////////////////////////////////
#   //harvestmaxgems
#   //
#   //////////////////////////////////////////

//////////////////////////////////////////////
function harvestgemsmenu($accounts, $mainaccounts)
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;      # Cyan
    $White    = "\033[0;37m" ;      # White
    $Green    = "\033[0;32m" ;      # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="HARVEST GEMS\n© 2022 Rene Aparri";


print "$White";
print "$ScriptName\n";
print $GLOBALS['Webs'];
print "\nMenu\n";
print "-----------------------------";
print "$White\na )$Green raters accounts";
print "$White\nb )$Green friends accounts";
print "$White\nc )$Green back to main";
print "$White\n-----------------------------\n";

   print "Your selection > ";
   fscanf(STDIN, "%c",$inputtask);

   switch($inputtask) {
      case "a" : //raters
        
        harvestmaxgems($accounts, $mainaccounts, "raters"); 
        print "\n\n";
        mainmenu();      
      case "b" : //friends
        harvestmaxgems("", $mainaccounts, "friends"); 
        print "\n\n";
        mainmenu();      
      
      case "c" :
       @system("clear");
       mainmenu();   

     // default :
     //  @system("clear");
     //  mainmenu();   
   }     
return;

}

function harvestmaxgems($accounts, $mainaccounts, $accounttype)
  {
   @system("clear");
   $Cyan     = "\033[0;36m" ;      # Cyan
   $White    = "\033[0;37m" ;      # White
   $Green    = "\033[0;32m" ;      # Green
   $Yellow   = "\033[0;33m" ;      # Yellow

       $ScriptName ="HARVEST LYKA GEMs\n© 2022 Rene Aparri";
       

       print "$White";
       print "$ScriptName\n";
       print $GLOBALS['Webs'];
       print "Let's harvest your GEMS\n";

              $maxaccounts=[];

       if($accounttype == "friends")
       {
        $acct=0;
        print "$Yellow\n";
        print "Input friends account to harvest GEMS from\n";
        print "press enter when done\n$Green\n";
        do {
            $inputusername = readline("Username : ");
            if ($inputusername !='') {
            array_push($maxaccounts, "$inputusername",);
            $acct=1;
            }
        } while ($inputusername !='');
        
        if ($acct == 0)
        {
            print "$Yellow";
            print "*pls. enter atleast one (1) username\n\n";
                mainmenu(); 
        }
    
       } else
       {
        printf("$Green\nYou have %s $accounttype accounts\n$Yellow",count($accounts));

        $start = readline("Start with account no. : ");
        if ($start == '') { $start=0;} else {$start--;}

        $end =   readline("End with account no.   : ");
        if ($end == '') { $end=count($accounts)-1;} else {$end--;}

        print "$Cyan\nStart [$accounts[$start]]";
        print "$Cyan\nEnd   [$accounts[$end]]\n";

         $maxaccounts=$accounts;
       }
   
       print "$Yellow\n";
       print "Input $accounttype account password\n$Green";
       $mainpassword=readline('Password : ');
       if ($mainpassword == '')
       {
           print "$Yellow\n*empty password\n\n";
           mainmenu();    
       }
       
       //get the account where the harvested gems will be sent

       print "\nInput GEMs recipient\n";
             
       print "[Default = $mainaccounts[0]]\n$White\n";
    
       $GEMReceiver=readline('Username : ');
       
       if ($GEMReceiver == '')
       {
           $GEMReceiver=$mainaccounts[0];
       }

       @system("clear");
       print "$White\n";
       print "$ScriptName\n";
       print $GLOBALS['Webs'];
       print "$Yellow\nwe are good to go,\n";
       print "let's harvest your GEMS...\n$White\n";
       usleep(200000);
       
       $harvestedgems=0;

       print "Recipient >$Yellow [$GEMReceiver]\n\n$White";


       printf("%-2s. %-20s GEMS   Status\n","No","Account Name");
       printf("$White%'-40s\n","");
				
       $xcount=$start;
       
       
       do {
			
       $activeaccount=$maxaccounts[$xcount];	
               
       $xcount++; 

           //Login to each account

       $jsonn =logintoaccount($activeaccount, $mainpassword);
       
       
       if ($jsonn->message != "Invalid username/password")
       	{ 
				
          $status = $jsonn->status;
          $verifiedAcct = $jsonn->data->username;
          $bearer = $jsonn->data->token->accessToken;
					
          $TotalGEMS=getgembalance($bearer);
          
            //verify if recipient is valid 
           $urlx = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$GEMReceiver&os=android&pageIndex=1&pageSize=16";
           $curlx = curl_init($urlx);
           curl_setopt($curlx, CURLOPT_URL, $urlx);
           curl_setopt($curlx, CURLOPT_RETURNTRANSFER, true);
           $headersx = array("user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11)", "authorization: Bearer $bearer",);
           curl_setopt($curlx, CURLOPT_HTTPHEADER, $headersx);
           $respx = curl_exec($curlx);
           curl_close($curlx);
				
           $jsonx = json_decode($respx, true);
           
           if ($jsonx['message'] != "No users were found.")
           {
           
           $recID = $jsonx["data"]["0"]["id"];
           $validatedUname = $jsonx["data"]["0"]["userName"];          					
 
           $SendGEMURL = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
           $curlGEMS = curl_init($SendGEMURL);
           $headerGEMS = 
           array("authorization:Bearer $bearer","user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11))", 
               	"deviceos: android", "Content-Type: application/json",);
               				
           curl_setopt($curlGEMS, CURLOPT_URL, $SendGEMURL);
           curl_setopt($curlGEMS, CURLOPT_POST, true);
           curl_setopt($curlGEMS, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($curlGEMS, CURLOPT_HTTPHEADER, $headerGEMS);
           	$balanceGEM = '{
           	"amount":"' . $TotalGEMS . '",
           	"device":{
           	"deviceId":"$devID",
           	"deviceImei":"$devID",
           	"deviceModel":"$devicenamemodel",
           	"deviceName":"$devicenamemodel",
           	"deviceOs":"Android",
           	"isEmulator":false,          						       
            "notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR",
			"osVersion":"11"
         				},
			"recipientId":' . $recID . '}';
				
			curl_setopt($curlGEMS, CURLOPT_POSTFIELDS, $balanceGEM);
			$response_GEMbalance = curl_exec($curlGEMS);
     		curl_close($curlGEMS);

			$jsonGEM = json_decode($response_GEMbalance);
               
            print "$White";
            printf("%2s) %-19s $Green %.2f >$Cyan sent\n",$xcount,$activeaccount,$TotalGEMS);
            $harvestedgems =$harvestedgems+$TotalGEMS;

            } else {
                print "$Yellow\nrecipient not valid\n";
                print "transfer of GEMS is canceled\n$White\n"; 
				break;
                }				
				              
			} else {
           	print "$Yellow";
           	printf("%2s) %-19s >$Green %s\n",$xcount,$activeaccount,$jsonn->message);
       	    
       	    } //!="Invalid username

       		usleep(100000);
       			
       		} while ($xcount != $end +1); //end of loop for each acct
       				
       printf("\n$White%'-40s\n","");
       printf ("%17s GEMS >$Yellow %.2f\n","Total harvested",$harvestedgems);
       print "$White\n\n";

       $blank=readline("press enter to continue"); 
       
       mainmenu();

  } //end harverstmaxgems

///////////////////////////////////////////////////////


function logintoaccount($acctname, $password) 
{
    $devID=uniqid('eee');
    $devmodel=uniqid('REN');
    $devname=uniqid('SAM');

    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $DeviceInfo = <<<DATA
    {
    "countryCode": "PH",
    "device": {
    "deviceId": "$devID",
    "deviceImei": "$devID",
    "deviceModel": "$devmodel",
    "deviceName": "$devname",
    "deviceOs": "Android",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "11"
    },
    "username": "$acctname",
    "password": "$password"
    }
    DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
    $respp = curl_exec($curll);
    curl_close($curll);
    $loginstatus = json_decode($respp);

   // var_dump($loginstatus);
   // exit;

    return $loginstatus; 
} //end login to account

# 

// THIS IS THE MENU FOR RATEPOST  
function ratepostmenu($ratersaccount, $mainaccounts)
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;      # Cyan
    $White    = "\033[0;37m" ;      # White
    $Green    = "\033[0;32m" ;      # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="POSTS RATING\n© 2022 Rene Aparri";

print "$White";
print "$ScriptName\n";
print $GLOBALS['Webs'];
print "\nMenu\n";
print "-----------------------------";

print "$White\na )$Cyan raters > main accounts";
print "$White\nb )$Cyan raters > friends account";
print "$White\nc )$Cyan main > raters accounts";
print "$White\nd )$Cyan main > friends account";
print "$White\ne )$Cyan friends > friends account";
print "$White\nf )$Cyan back to main";
print "$White\n-----------------------------\n";

   print "Your selection > ";
   fscanf(STDIN, "%c",$inputtask);

   switch($inputtask) {


    case "a" : //raters to main
        max2max($ratersaccount,$mainaccounts);
        print "\n\n";
        mainmenu();        

    case "b" : //raters to friends
        max2u($ratersaccount,"Raters");     
        print "\n\n";
        mainmenu();    
        
    case "c" : //main to main
        main2raters($mainaccounts,$ratersaccount);
        print "\n\n";
        mainmenu();     
    
    case "d" : //main to main
        max2u($mainaccounts,"Main");
        print "\n\n";
        mainmenu();     

    case "e" : //friends to friends
        friendsaccount();     
        print "\n\n";
        mainmenu();        
    
    case "f" : //friends
        @system("clear");
        mainmenu();        
            
    default :
       @system("clear");
       mainmenu();   
   }     
return;

}

 /*///////////////////////////////////////////
   // max2max
   //
   ////////////////////////////////////////// */


function max2max($raters,$acct2rate)
{
    
    @system("clear");

    $Cyan     = "\033[0;36m" ;       # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;       # Yellow
    
    $ScriptName ="raters > main";
    

    print "$White";
    print "$ScriptName\n";
    print $GLOBALS['Webs'];
    print "max-rate posts\n";
    
    //should use one password per raters account
    printf("$White\nYou have %s raters account\n$Green",count($raters));
    $start = readline("Start with account no.  : ");
    if ($start == '') { $start=0;} else {$start--;}
    $end =   readline("End with account no.    : ");
    if ($end == '') { $end=count($raters)-1;} else {$end--;}
    print "$Green\nStart [$raters[$start]]";
    print "$Green\nEnd   [$raters[$end]]\n";

    print "$Yellow\n";
    print "Input RATERS password\n$Green\n";
  
    $mainpassword=readline('Password : ');
    if ($mainpassword == '')
    {
        print "$Yellow\n**empty password**\n\n";
        mainmenu();    }
    
    ratemypost($ScriptName,$Web,$raters,$mainpassword, $start, $end, $acct2rate);
    return;

}   //end of max2max

#   ///////////////////////////////////////////
#   // main2raters
#   //
#   //////////////////////////////////////////

function main2raters($raters, $acct2rate)
{
    
    @system("clear");

    $Cyan     = "\033[0;36m" ;       # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;       # Yellow
    
    $ScriptName ="main > raters";
    

    print "$White";
    print "$ScriptName\n";
    print $GLOBALS['Webs'];
    print "you are about to rate posts using your main accounts\n";
    
    print "\nMAIN accounts\n";
    $start=0;
    $end=3;
    print "$Green\n1) [$raters[0]]";
    print "$Green\n2) [$raters[1]]";
    print "$Green\n3) [$raters[2]]";
    print "$Green\n3) [$raters[3]]\n";

    $acct2rate2=[];
    array_push($acct2rate2,"$acct2rate[0]"); 
    array_push($acct2rate2,"$acct2rate[1]"); 
    array_push($acct2rate2,"$acct2rate[2]"); 
    array_push($acct2rate2,"$acct2rate[3]"); 

    print "$White\nAccounts to RATE\n";
  
    print "$Green\n1) [$acct2rate2[0]]";
    print "$Green\n2) [$acct2rate2[1]]";
    print "$Green\n3) [$acct2rate2[2]]";
    print "$Green\n4) [$acct2rate2[3]]\n";


    print "$Yellow\n";
    print "Input MAIN account password\n$Green\n";
  
    $mainpassword=readline('Password : ');
    if ($mainpassword == '')
    {
        print "$Yellow\n**empty password**\n\n";
        mainmenu();    }

    ratemypost($ScriptName,$Web,$raters,$mainpassword, $start, $end, $acct2rate2);
    return;

}   //end of main2raters



function max2u($raters,$raterstype)
{
    
    @system("clear");

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

    $ScriptName ="$raterstype account to max-rate friends account\n© 2022 Rene Aparri";
  

    print "$White";
    print "$ScriptName\n";
    print $GLOBALS['Webs'];
    print "Needed: usernames to RATE\n";
    
         #get acct names to rate
        $acct2rate=[];
        $acct=0;
        
        print "$Yellow\n";
        print "Friends account to RATE [max of 4]\n";
        print "press enter when done\n$Green\n";
        do {
            $inputusername = readline("Username : ");
            if ($inputusername !='') {
                array_push($acct2rate, "$inputusername",);
                $acct++;
            } else { break;}
        } while ($acct != 4);
         
         if ($acct == 0)  {
             print "$Yellow";
             print "> no username to RATE entered\n\n";
                mainmenu(); 
                }

    //should use one password per raters account
    printf("$Green\nYou have %s $raterstype account\n$Yellow",count($raters));
    $start = readline("Start with account no.  : ");
    if ($start == '') { $start=0;} else {$start--;}
    $end =   readline("End with account no.    : ");
    if ($end == '') { $end=count($raters)-1;} else {$end--;}
    print "$Cyan\nStart [$raters[$start]]";
    print "$Cyan\nEnd   [$raters[$end]]\n";

    print "$Green\n";
    print "$raterstype account password\n$Green";
    $mainpassword=readline('Password : ');
    if ($mainpassword == '')
    {
        print "$Yellow\n**empty password**\n\n";
        mainmenu();    }

    ratemypost($ScriptName,$Web,$raters, $mainpassword, $start, $end, $acct2rate);
    return;
          

} //end of max2u


function friendsaccount()
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;        # White
    $Green    = "\033[0;32m" ;        # Green
    $Yellow   = "\033[0;33m" ;        # Yellow
    
    $ScriptName ="Rate Friends Account \n© 2022 Rene Aparri";
  

print "$White";
print "$ScriptName\n";
print $GLOBALS['Webs'];
print "this routine will help you rate the post of your friend\n";

$acct2rate=[];
$acct=0;

print "$Green\n";
print "Friends account to RATE$Yellow [max of 4]$Green\n";
print "press enter when done\n$Yellow\n";
do {
    $inputusername = readline("Username : ");
    if ($inputusername !='') {
        array_push($acct2rate, "$inputusername",);
        $acct++;
    } else { break;}
} while ($acct != 4);
 
 if ($acct == 0)  {
     print "$Yellow";
     print "**no account entered\n\n";
        mainmenu(); 
        }

$raters = [];
$usr=0;
print "$Cyan\n";
print "Raters account username\n";
print "enter blank when done\n$Green\n";
do {
   $username = readline('Username : ');
  if ($username !='') {
   array_push($raters, "$username",);
   $usr=1;
   }
} while ($username !='');

if ($usr != 1)
{
    print "$Yellow\n";
    print "no RATERS account entered\n";
    print "pls. enter atleast one (1) account\n\n";
    mainmenu();
}

#should use one password for all accounts
print "$Yellow\n";
print "Raters account password\n$Green\n";
$mainpassword=readline('Password : ');
if ($mainpassword == '')
{
    print "$Yellow";
    print "\n**empty password**\n\n";
        mainmenu();
}
$start=0;
$end = count($raters);

ratemypost($ScriptName, $Web, $raters, $mainpassword, $start, $end, $acct2rate);
return;

} //end of friends2friends


   #///////////////////////////////////////////
   #// ratemypost
   #//
   #//////////////////////////////////////////

function ratemypost($ScriptName, $Web, $raters, $mainpassword, $start, $end, $acct2rate)
{

// Regular Colors
$Cyan     = "\033[0;36m" ;        # Cyan
$White    = "\033[0;37m" ;        # White
$Green    = "\033[0;32m" ;        # Green
$Yellow   = "\033[0;33m" ;        # Yellow


@system("clear");
print "$White\n";
print "$ScriptName\n";
print $GLOBALS['Webs'];
print "$Yellow\nwe have enough data needed to proceed\n";
print "posts rating is starting ...\n\n";
usleep(100000);

#/////////////////// start rating ////////////////////

$noofraters=$end+1; //count($raters);

$rated=$start;

do {
   $currentrater = $raters[$rated];

	$rated++;

    //#login to raters
    $jsonn = logintoaccount($currentrater,$mainpassword);

    if ($jsonn->message == "User logged in") :

    $msgn = $jsonn->message;

    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    
    print "$Cyan\n";
    print "Raters status | $msgn\n";
    
    // loop to each account to rate

    $toratecount=count($acct2rate);
    $donerating=0;
    
    foreach ($acct2rate as $beingrated) : 
    
        $donerating++;
        if ($currentrater != $beingrated) : #avoid rating own post
              
        $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$beingrated&os=android&pageIndex=1&pageSize=16";
        $curlm = curl_init($urlm);
        curl_setopt($curlm, CURLOPT_URL, $urlm);
        curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
        $headersm = array("user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11)", "authorization: Bearer $bearer",);
        curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
        $respm = curl_exec($curlm);
        curl_close($curlm);
    
        $jsonm = json_decode($respm, true);
        
        if ($jsonm['message'] != "No users were found.") :         
        
        $verifiedaccountID = $jsonm["data"]["0"]["id"];
        $verifiedaccount = $jsonm["data"]["0"]["userName"];
    
            print "$White\n";
            printf("%-5s (%2s/%2s) | %-15s\n","Rater",$rated,$noofraters,$currentrater);
            printf("%-5s (%2s/%2s) | %-15s\n","Rated",$donerating,$toratecount,$beingrated);
  
            usleep(200000);  
            $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$verifiedaccountID&category=ALL";
            $curld = curl_init($urld);
            curl_setopt($curld, CURLOPT_URL, $urld);
            curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
            $headersd = array("authorization: Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11)",);
            curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
            $respd = curl_exec($curld);
            curl_close($curld);

            $arr = json_decode($respd, true);
       
                   $x=0;
                   do {
                       $pid[$x] = $arr["data"]["$x"]["id"];
                       $x++;
                   } while ($x !=10);
    
                  // #actual rating of posts
                  // #loop 10 times
                   
                    $PostNum=0;
                    $xcount=1;
                    $timetosleep=1;

                    $devID=uniqid('eab');
                    $devIMEI=uniqid('zac');
                    $devicenamemodelmodel=uniqid('eea');

                    do {

                    
                        print "$White"; 
                        printf("%-5s$Green #%2s > ",".mr.","$xcount");

                        $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
                        $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11))",
                                        "deviceos: android", "Content-Type: application/json",);
                        $curl = curl_init($url);
                        curl_setopt($curl, CURLOPT_URL, $url);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                        $data = <<<DATA
                    {
                        "device": {
                        "deviceId"         : "$devID",
                        "deviceImei"       : "$devIMEI",
                        "deviceModel"      : "$devicenamemodelmodel",
                        "deviceName"       : "$devicenamemodelmodel",
                        "deviceOs"         : "Android",
                        "isEmulator"       : false,
                        "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
                        "osVersion"        : "11"
                        },
                        "postId": $pid[$PostNum],
                        "rate": 5,
                        "userid": $verifiedaccountID
                    }
                    DATA;
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                        $resp = curl_exec($curl);
                        curl_close($curl);
             
             
                        $json = json_decode($resp);
        
                    
                        if ($json != NULL)
                        {    
                        print "$Green";
                    	    $postmessage=$json->message;
                        
                            $timetosleep=1;
                        if (strstr($postmessage,'Congratulations')) {
                            print "rated over 10 posts \n";
                            $devID=uniqid('ccc');
                            $devIMEI=uniqid('zgc');
                           // var_dump($json);
                        } elseif ($postmessage=="You already have rated this post.")
                        {
                         print "post already rated\n";
                         $devID=uniqid('xyz');
                         $devIMEI=uniqid('yzx');
                         //var_dump($json);   
                        } elseif (strstr($postmessage,'Too many')) {
                            print "$Yellow";
			                print "failed, retrying\n";
                            $devID=uniqid('rrr');
                            $devIMEI=uniqid('sss');
                            $PostNum--;
                            $xcount--;
                            $timetosleep=10;
                           // var_dump($json);

                        } elseif (strstr($postmessage,'Forbidden')) {
                            print "$Yellow";
                            print "forbidden, retrying\n";
                            $devID=uniqid('veb');
                            $devIMEI=uniqid('erl');
                            $PostNum--;
                            $xcount--;
                            $timetosleep=10;
                        } elseif (strstr($postmessage,"Post rating")) {
                           print "earnings saved\n";
                           $devID=uniqid('qrs');
                           $devIMEI=uniqid('339');
                           //var_dump($json);    
                        } else {
                           print "$postmessage\n";
                           $devID=uniqid('421');
                           $devIMEI=uniqid('rga');    
                        }
                        } else { 
                            print "LYKA server error\n";  
                            $timetosleep=10;
                        }
                            
                        $PostNum++;
                        $xcount++;

                        if ($timetosleep != 10)
                        { usleep(100000);}
                        else { sleep($timetosleep); }
    
                    } while ($PostNum !=10);

                    print "$White\n[$beingrated] >>> ratings done\n";
                    print "-------------\n";   
   #                 //// end of do...while /////////
                else :
                    print "\n$Yellow >> error connecting to [$beingrated]\n"  ; 
                          endif;
                  
                else:
                    print "\n$Yellow >> skip rating [$beingrated]\n";
    
            endif; //raters!=rated
                usleep(100000);
           endforeach;
      
         
  #  ///////////// end of loop to each account to rate /////////////
  
    
    else : //jsonn !=null
        print "$Yellow\n";
        print "failed to login to RATERS account";
        print "\n$White";

    endif;    

    usleep(200000);
      
       } while ($rated != $end + 1);    
    //endforeach;
    
     print "$White\n";
     print "Summary of Posts Rating\n";
     checkgems($raters, $start, $end, $mainpassword);


    print "$White\n";
    
    return;
 #   ///////////////// end of foreach loop to raters account //////////////////

   } // end of ratemypost


function addpostmomentMenu($posttype, $ratersaccount, $mainaccounts)
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;       # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;       # Yellow

$ScriptName ="ADD POSTS/MOMENTS ROUTINE\n© 2022 Rene Aparri";


print "$White";
print "$ScriptName\n";
print $GLOBALS['Webs'];
print "\nadd $posttype menu\n";
print "-----------------------------";
print "$White\na )$Green add to main accounts";
print "$White\nb )$Green add to raters accounts";
print "$White\nc )$Green add to friends account";
print "$White\nd )$Green back to main";
print "$White\n-----------------------------\n";

   print "Your selection > ";
   fscanf(STDIN, "%c",$inputtask);

   switch($inputtask) {
      case "a" : //post to main
       
        addpost2account($mainaccounts,"$posttype","main"); 
        print "\n\n";
        exit;
      
      case "b" : //post to raters
     
        addpost2account($ratersaccount,"$posttype","raters");
        print "\n\n";
        exit;
      
      case "c" : //post to friends 
    
       addpost2account($ratersaccount,"$posttype","friends");
       print "\n\n";
       exit;

      case "d" :
       @system("clear");
       mainmenu();   

      default :
       @system("clear");
       mainmenu();   
   }     
return;
}

function addpost2account($newaccounts, $posttype, $accounttype)
{
   @system("clear");

   //Set font color
   
   // Regular Colors
   $Black    = "\033[0;30m" ;     //Black
   $CRed     = "\033[0;31m" ;     //Red
   $Green    = "\033[0;32m" ;     //Green
   $Yellow   = "\033[0;33m" ;     //Yellow
   $Blue     = "\033[0;34m" ;     //Blue
   $Cyan     = "\033[0;36m" ;     //Cyan
   $White    = "\033[0;37m" ;     //White
   
   $ScriptName ="ADD POSTS/MOMENT ROUTINE\n© 2022 Rene Aparri";
   
   
   $acct=0;
   
   print "$White";
   print "$ScriptName\n";
   print $GLOBALS['Webs'];
   print "add $posttype(s) to $accounttype account\n";
   
   $acct2post = []; 

   if ($accounttype == 'friends')
   {
   $acct=0;
   $start=0; 
   print "$Yellow\n";
   print "Input username to add $posttype(s)\n";
   print "press enter when done\n$Green\n";

   do {
       $inputusername = readline("Username : ");
   if ($inputusername !='') {
       array_push($acct2post, "$inputusername",);
       $acct=1;
       }
   } while ($inputusername !='');
   
   if ($acct == 0)  {
       print "$Yellow";
       print " > pls. enter atleast one (1) username\n\n";
           mainmenu(); 
           }
    $end=count($acct2post)-1;

   } elseif ($accounttype == 'main')
   {
    print "\nMAIN accounts\n";
    $start=0;
    $end=3;
    print "$Green\n1) [$newaccounts[0]]";
    print "$Green\n2) [$newaccounts[1]]";
    print "$Green\n3) [$newaccounts[2]]";
    print "$Green\n3) [$newaccounts[3]]\n";
 
    $acct2post=$newaccounts; 

   } else {

    printf("$Green\nYou have %s $accounttype accounts\n$Yellow",count($newaccounts));
    $start = readline("Start with account no.  : ");
    if ($start == '') { $start=0;} else {$start--;}
    $end =   readline("End with account no.    : ");
    if ($end == '') { $end=count($newaccounts)-1;} else {$end--;}
    print "$Cyan\nStart [$newaccounts[$start]]";
    print "$Cyan\nEnd   [$newaccounts[$end]]\n";
  
     $acct2post=$newaccounts; 
    }

   print "$White";
   print "\nHow many $posttype(s) to add [default=10]\n";
   $postcount=readline("Count : ");
   
   if ($postcount =='') {
       $postcount=10;
   }

   print "$Green\n";
   print "Lastly, enter account password\n";
   print "\n";
   
   print "$White";
   $mainpassword=readline("Password : ");
   if ($mainpassword == '')
   {
       print "$Yellow";
       print "\n*no password was entered\n\n";
       mainmenu();  
   }
      
   @system("clear");
   print "$White\n";
   print "$ScriptName\n";
   print $GLOBALS['Webs'];
   print "$Yellow\nlet's now add $posttype to $accounttype account\n";
   print "pls. wait ...\n";
   usleep(50000);
   
   loop2accounts($acct2post, $mainpassword, $posttype, $postcount, $accounttype, $start, $end);

} //end of postit
//////////////////////////////////////////////////////////////////////////////////


function loop2accounts($acct2post, $mainpassword, $posttype, $postcount, $accounttype, $start, $end)
{

    $Black    = "\033[0;30m" ;       # Black
    $CRed     = "\033[0;31m" ;       # Red
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;       # Yellow
    $Blue     = "\033[0;34m" ;       # Blue
    $Cyan     = "\033[0;36m" ;       # Cyan
    $White    = "\033[0;37m" ;       # White
    
 
    $noofaccounts=$end+1; //count($acct2post);
    $posted=$start;

   do {   //loop to each username
      
        $currentuser=$acct2post[$posted];
        $posted++;
    

    //Login to account
    $jsonn = logintoaccount($currentuser,$mainpassword);
    
    if ($jsonn != NULL)
    {
    if ($jsonn->message != "Invalid username/password") :
 
    $msgn = $jsonn->message;
    $status = $jsonn->status;
    $vuser = $jsonn->data->user->userName;
    $userid=$jsonn->data->user->id;
    $bearer = $jsonn->data->token->accessToken;

    print "$White\n";
    printf("%-4s (%2s/%-2s) | %-15s\n","User",$posted, $noofaccounts,$vuser);

    print "$Green\n";
     //     print "$White";
     //     printf("%-13s | %.2f\n","Lyka Gems",getgembalance($bearer));
     //     printf("%-13s |$Cyan %s\n\n","Status",$msgn);
    
     $postloop=1;
     $postretry=1;

     do {  //loop x times to add post/moment
        
       print "$White";
       printf("adding %-6s #%-2s  > ",$posttype,$postloop);

       print "$Green";
       
         $poststatus = postmoments($userid, $bearer, $posttype, $accounttype);
       
//        if ($poststatus != '')    {
        if ($poststatus == "saved")
        {
          print "success";
          $postretry =1;

        } else

        {
            print "$Yellow";
            print "error, retrying ($postretry)";
            sleep(5);
            $postloop--;
            $postretry++;
        }
    
//    } 

         print "\n";
        
         $postloop++;
    
    } while ($postloop != $postcount+1);
    
  //  print "$Yellow";
  //  print "\nadd $posttype to [$currentuser] done";
    
else :
    print "$Green\n$jsonn->message\n";
   // break;    
endif;

}
else {                      //jsonn == NULL
    print "$Green\nError\n";
  //  break;
}

    print "\n$White";
    print "--------------------------------\n";
    usleep(100000);
    
} while ($posted != $end+1); 
    //end of loop for x username
    
    if ($jsonn != NULL)
    {
    if ($jsonn->message != "Invalid username/password")
    {
    print "$White\n";
    print "Summary - add $posttype(s)\n";
    checkgems($acct2post, $start, $end, $mainpassword);
    }
    else
    {
    print "\n$White";
    $x=readline("press enter to continue");
    }
    } else {

    print "\n$White";
    $x=readline("error encountered. press enter to continue");
    
    }

    mainmenu();

} // loop2accts


function postmoments($userid, $bearer, $posttype, $accounttype) {

   $deviceid=uniqid('fff');
    
   $currUsrID = $userid;
   
   $uploadLegacy = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
   
   $uploadPay = <<<DATA
       {"category":"$posttype",
        "clientId":"$currUsrID",
        "files":[{
            "fileName":"https://github.com/maximum001/images/blob/main/p1.jpeg", 
            "mediaType":"image"}] }
   DATA; 
   
   $uploadLegPost = postX($uploadLegacy,$uploadPay,$bearer);


   if ($uploadLegPost != NULL)
   {


  // var_dump($uploadLegPost);
  // exit;

   if($uploadLegPost->data){
       $mediaID = $uploadLegPost->data[0]->mediaId;

       $amznToken = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$currUsrID";
       $firstGet = getX($amznToken,$deviceid,$bearer);



       //if($firstGet->data){
       if ($firstGet != NULL) {
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

           //var_dump($postjson);
           //exit;

          // if($postjson->Credentials){

            if ($postjson !=NULL)
            {
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
                   $curl_headers[] = $key . ": " . $value; }

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
               // print $http_code;
               if ($http_code != 200) { $pmessage ="failed"; }
               
               $delURL = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$mediaID;
               $delHeader = array(
                   "x-clientid: $deviceid",
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
                

                usleep(100000);

                if ($posttype == "post") :
                    $uploadurl="https://posting.mylykaapps.com/api/v3/posts/AddImagePost";       
                 if ($accounttype != 'friends')
                 {                
                   $postresponse = postX($uploadurl, 
                   payload($deviceid,
                   '"files":[{
                    "imageURL":"https://www.w3schools.com/Css/img_lights.jpg",
                    "height":1024,
                    "key":"'.$mediaID.'", 
                    "RemoteStorage":"lyka-legacy-images-input" ,
                    "type":"image","width":768}],
                    "isHighlight":false,
                    "isSharedLink":false,
                    "mediaTags":"[[]]",
                    title:"'.date("l jS \of F").'",
                    hashtags:"#ActiveLYKA",
                    content: "'.date("Ymd").'"'),
                    $bearer);
                  } else
                  {                
                   $postresponse = postX($uploadurl, 
                   payload($deviceid,
                   '"files":[{
                    "imageURL":"https://www.w3schools.com/Css/img_lights.jpg",
                    "height":1024,
                    "key":"'.$mediaID.'", 
                    "RemoteStorage":"lyka-legacy-images-input" ,
                    "type":"image","width":768}],
                    "isHighlight":false,
                    "isSharedLink":false,
                    "mediaTags":"[[]]",
                    title:"#LYKA",
                    hashtags:"#LYKA GEMS",
                    content: "'.date("l").'"'),
                    $bearer);
                   } 
                else : 
                   $uploadurl = "https://momenting.mylykaapps.com/api/v3/moments/AddImageMoment"; 
                   $postresponse = postX($uploadurl, 
                   payload($deviceid,
                   '"files":[{
                       "imageURL":"https://www.w3schools.com/Css/img_lights.jpg",
                       "height":2081,
                       "key":"'.$mediaID.'", 
                       "RemoteStorage":"lyka-legacy-images-input" ,
                       "type":"image",
                       "width":1079}]'),
                        $bearer);
                endif;
                   if ($postresponse != NULL)
                   {
                     // print "$postresponse->message";
                      $pmessage='error';
                      if ($postresponse->message == '323 - Post saved.')
                          {
                            $pmessage="saved";
                          }
                      if ($postresponse->message == 'Moment retrieved.')
                          {
                            $pmessage="saved";
                          }
                   } else {$pmessage="error"; }

                return $pmessage;

            } else { return "error";} //end post-json
       } else { return "error";}
    }     
} else { return "error";}

}  //end of postmoments
/////////////////////////////////////////////////////////////////////////////

   ///////////////////////////////////////////
   // getuserID
   //
   //////////////////////////////////////////

   function getUserId($rDevID, $mcCookie){
    $getUID = getX("https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing?os=android", $rDevID, $mcCookie);
 
    return $getUID->data->id;
 
 }
 
 function getX($urlx, $deviceid, $bearer = ""){
    $getURL = $urlx;
    $useragent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android R 11)';
    $getHeader = array(
        "Content-Type: application/json; charset=UTF-8",
        "user-agent: $useragent",
        "authorization: Bearer $bearer",
        "x-clientid: $deviceid",
        );
        $getCurl = curl_init($getURL);
        curl_setopt($getCurl, CURLOPT_URL, $getURL);
        curl_setopt($getCurl, CURLOPT_HTTPGET, true);
        curl_setopt($getCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($getCurl, CURLOPT_HTTPHEADER, $getHeader);
        usleep(100000);
        $getResp = curl_exec($getCurl);
        curl_close($getCurl);
        $getjson = json_decode($getResp);
 
        return $getjson;
 }
 
 function postX($urlx, $payloader, $bearer = ""){
    $postURL = $urlx;
    $useragent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android R 11)';
    $postHeader = !$bearer 
        ? array(
        "Content-Type: application/json; charset=UTF-8",
        "user-agent: $useragent") 
        : array(
        "Content-Type: application/json; charset=UTF-8",
        "user-agent: $useragent","authorization: Bearer $bearer") ;
        $postCurl = curl_init($postURL);
        curl_setopt($postCurl, CURLOPT_URL, $postURL);
        curl_setopt($postCurl, CURLOPT_POST, true);
        curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
        curl_setopt($postCurl, CURLOPT_POSTFIELDS, $payloader);
        curl_setopt($postCurl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($postCurl, CURLOPT_SSL_VERIFYPEER, false);
        usleep(100000);
        $postResp = curl_exec($postCurl);
        curl_close($postCurl);
        $postjson = json_decode($postResp);
 
       // var_dump($postjson);
       // exit;

        return $postjson;
 }
 
 function payload($deviceidx, $xtraPay, $rTokenx = ""){

    $devicenamemodel=uniqid('ddd');

     $valdata = <<<DATA
             {"device": {
                 "deviceId": "$deviceidx",
                 "deviceImei": "$deviceidx",
                 "deviceModel": "$devicenamemodel",
                 "deviceName": "$devicenamemodel",
                 "deviceOs": "Android",
                 "isEmulator": false,
                 "osVersion": "11",
                 "notificationToken": "$rTokenx"
             },
             "countryCode": "PH",
             $xtraPay
             }
             DATA; 
  
     return $valdata;
  }
 

function getgembalance($bearer)
{
    $urlbal = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal = curl_init($urlbal);
    curl_setopt($curlbal, CURLOPT_URL, $urlbal);
    curl_setopt($curlbal, CURLOPT_RETURNTRANSFER, true);   
    $headersbal = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal, CURLOPT_HTTPHEADER, $headersbal);
    $respbal = curl_exec($curlbal);
    curl_close($curlbal);
  
    $jsonbal = json_decode($respbal);

    $gemsavailable = 0;
    
    if ($jsonbal != NULL)
    {
    $gemsavailable = $jsonbal->data->totalGem;
    }
    return $gemsavailable; 

} //end of getgembalance


function getID($acctname, $password) 
{
    $devID=uniqid('eee');

    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $DeviceInfo = <<<DATA
    {
    "countryCode": "PH",
    "device": {
    "deviceId": "$devID",
    "deviceImei": "$devID",
    "deviceModel": "$devID",
    "deviceName": "$devID",
    "deviceOs": "Android",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "11"
    },
    "username": "$acctname",
    "password": "$password"
    }
    DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
    $respp = curl_exec($curll);
    curl_close($curll);
    $loginstatus = json_decode($respp);

    if ($loginstatus != NULL)
    {
        $userid=$loginstatus->data->user->id;
    } else {$userid="error";}

    return $userid; 
} //end getid




?>
