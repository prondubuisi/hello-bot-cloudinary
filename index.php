<?php 
require 'vendor/autoload.php'; 
use  App\VerifyBot;
use App\ReceivedMessage;
use App\SendMessage;
use App\cloudinary\Cloudinary;
use App\cloudinary\Uploader;
use App\cloudinary\Api;




$verifyBot = new VerifyBot();
Cloudinary::config(array( 
  "cloud_name" => "ndubuisi", 
  "api_key" => "322598253189364", 
  "api_secret" => "QI7-5lFL51RcLSTk3NlFeLcSzo8" 
));

 
$input = json_decode(file_get_contents('php://input'), true);


$receivedMessage = new ReceivedMessage($input);
$sendMessage = new SendMessage($input);

 
if(!empty($receivedMessage->textMessage)) {   
     $sendMessage->text("hello coder");
    
}
 
if($receivedMessage.$attachmentType === "image") {
		
	
   $imageProperties = \Cloudinary\Uploader::upload($receivedMessage.$attachmentURL,array("resource_type" => "image"));
   $imageUploadURL =$image_properties['secure_url'];
   $sendMessage->text($imageUploadURL);
			   		 
}else() {   
     $sendMessage->text("I was born to handle images, please send me one. ):");
    
}



 
