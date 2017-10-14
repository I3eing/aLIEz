<?php
$access_token = 'nHDUCFtdaY7TRP+0G0GIQLXWyhc5Ga0lTnR0nkizkgTyd47iJhi3O6IrdTznVMgfVo8Ooy+HAnExZLfxUiwlyIYuvLNv2yFN86xlILFIKAwVv8ojRWEJEPIeaWKKP2bbjLXQgyyb2mOKDFXEZcpzCwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;