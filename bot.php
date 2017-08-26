<?php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'e60e0b3909cec8cf7fca2f68724f5f39';
$access_token  = 'In39fNOfwtG1xBB9HpLC9UgEoisGxr7w/J9okPEBwqxSkPrb+LvmgUV1SRpgyY1FyWzNOjL760qsHU0rNOKBclK669tjtIykFddlKiSBJMFeJy18aMXFPkjzlbeofTq5fRaGTMR3NXIzGlPPnO9LKQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}
