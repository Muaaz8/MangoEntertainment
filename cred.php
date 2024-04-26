<?php
require 'vendor/autoload.php';

$app_id = "Z5lGMhjIpb2aXYVDqB98LMLTgrPunP6SJy8y53Qd";
$rest_key = "MylgLj0LQbPGFTaNbI5A687kEJ8q7O3Zpj0Fr51X";
$master_key = "P9PniwXXDoajCdCJReBoqS0xSSj5At5d6yxRZ4QH";

ParseClient::initialize( $app_id, $rest_key, $master_key);
ParseClient::setServerURL('mongodb://admin:UsRmqkTMCzrXty0PqCYnkokG@MongoS3601A.back4app.com:27017/f500c86749eb4272b46bee451200ad29','/');
