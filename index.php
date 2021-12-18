<?php

$token = "2115051027:AAFfvGHsnGCJIULTWcN01vpwhOIPGQaRe9w";
$website = "https://api.telegram.org/bot".$token;
$web ="https://api.telegram.org/file/bot".$token;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatID = $update['message']['from']['id'];
$firstname = $update['message']['from']['first_name'];
$username = $update['message']['from']['username'];
$text = $update['message']['text'];

switch($text)
{
	case"/start":
		sendMessage($chatID, "hi $username");
		break;

	case"Hi":
		sendMessage($chatID, "Hi welcome to jumpstart retail. How can I help you?");
		break;

	case"hi":
		sendMessage($chatID, "hi welcome to jumpstart retail. How can I help you?");
		break;

	case "Hello":
		sendMessage($chatID, "Hello Welcome to Jumpstart Retail
		How can I help you? ");
		break;

	case "hello":
		sendMessage($chatID, "Hello Welcome to Jumpstart Retail
		How can I help you? ");
		break;

	case "Are you a chatbot?":
		sendMessage($chatID, "Yes I am a chatbot,but I’m a good one.
		Hello Welcome to Jumpstart Retail
		How can I help you? ");
		break;

	case "Who are you?":
		sendMessage($chatID, "I  am a chat bot.
		Hello Welcome to Jumpstart Retail
		How can I help you today?");
		break;

	case "who are you?":
		sendMessage($chatID, "I  am a chat bot.
		Hello Welcome to Jumpstart Retail
		How can I help you today?");
		break;

	case "What is your name?":
		sendMessage($chatID, "My name is jumpstart chatbot");
		break;

	case "what is your name?":
		sendMessage($chatID, "My name is jumpstart chatbot");
		break;

	case "where are you from?":
		sendMessage($chatID, "Sorry not able to understand you");
		break;

	case "Are you there?":
		sendMessage($chatID, "Yes,Welcome to Jumpstart Retail
		How can I help you? ");
		break;

	case "bye":
		sendMessage($chatID, "See you later. Have a nice day!");
		break;

	case "qwqe":
		sendMessage($chatID, "Sorry not able to understand you");
		break;

	case "adadm":
		sendMessage($chatID, "Sorry not able to understand you");
		break;

	case "Track my order":
		sendMessage($chatID, "Okay Let me check.
		Please select the order ID to track 
		Your order:
		-13573891
		-13573892");
		break;

	case "1":
		sendMessage($chatID, "Order tracking details:
		Status: Pending 
		Order ID – 13573891
		Product Name: 
					Vito milk
					Nescafe coffee
					UFC Refresh 40% Orange Juice");
		break;

	case "2":
		sendMessage($chatID, "Order tracking details:
		Status: Pending 
		Order ID – 13573892
		Product Name: 
					Fresko Milk Wafer Stick
					Tiffany Sugar Free
					Lotte Pie Green Tea
					Mamee Monster Noodle Snack 
					Oishi Crunchy Pizza Squares");
		break;

	case "thank you":
		sendMessage($chatID, "Yes, welcome retail!");
		break;

	case "Can you show beverage":
		sendMessage($chatID, "Okay, Let see product name:
		-fruit juice
		-ready drinks
		-milk & yoghurt
		-coffee");
		break;

	case "show ready drinks":
		sendMessage($chatID, "Product Name:
		Red Bull
		SharK Energy
		Coca Cola
		Pepsi
		Sunkist
		Royal-D");
		break;

}

function sendMessage($chatID,$text)
{
	$url = $GLOBALS[website]."/sendMessage?chat_id=$chatID&text=".urlencode($text);
	file_get_contents($url);
	
}

?>


