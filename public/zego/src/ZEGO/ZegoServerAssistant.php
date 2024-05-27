<?php
namespace ZEGO;

class ZegoServerAssistant {

    private static function makeNonce(){
        $nonce = rand();
        return $nonce;
    }

    private static function makeRandomIv($number = 16){
        $str = "0123456789abcdefghijklmnopqrstuvwxyz";

        $result = [];
        $strLen = strlen($str);
        for ($i = 0; $i < $number; $i++ ){
            $result[] = $str[rand(0,$strLen-1)];
        }
        return implode('',$result);
    }

    /**
     * Generate authentication for communication with Zego server based on the provided parameter list
     *
     *  integer $appId Digital ID distributed by Zego, a unique identifier for each developer
     *  string $userId User ID
     *  string $secret The key corresponding to the appId provided by Zego. Please keep it safe and do not disclose it.
     *  integer $effectiveTimeInSeconds The validity period of the token, in seconds
     *  string $payload Business expansion field, JSON string
     *  ZegoAssistantToken Return the content of the token. Before using it, check whether the code field is ZegoErrorCodes::success. The actual token content is saved in the token field.
     */
    public static function generateToken04(int $appId, string $userId, string $secret,int $effectiveTimeInSeconds, string $payload){
        $assistantToken = new ZegoAssistantToken();

        $assistantToken->code = ZegoErrorCodes::success;

        if ( $appId == 0 ) {
            $assistantToken->code = ZegoErrorCodes::appIDInvalid;
            $assistantToken->message = 'appID invalid';
            return $assistantToken;
        }

        if ($userId == "") {
            $assistantToken->code = ZegoErrorCodes::userIDInvalid;
            $assistantToken->message = 'userID invalid';
            return $assistantToken;
        }

        $keyLen = strlen($secret);

        if ($keyLen != 32) {
            $assistantToken->code = ZegoErrorCodes::secretInvalid;
            $assistantToken->message = 'secret must be a 32 byte string';
            return $assistantToken;
        }

        if ($effectiveTimeInSeconds <= 0) {
            $assistantToken->code = ZegoErrorCodes::effectiveTimeInSecondsInvalid;
            $assistantToken->message = 'effectiveTimeInSeconds invalid';
            return $assistantToken;
        }

        $forTestNoce = -626114709072274507;//9223372036854775807
        $forTestCreateTime = 1619769776;
        $forTestIv = "exn62lbokoa8n8jp";

        //demo
        //$forTestNoce = 9022377734291506982;
        //$forTestCreateTime = 1619663663;
        //$forTestIv = "forkislbyn0u28qw";

        $testMode = false;

        $timestamp = $testMode ? $forTestCreateTime : time();//-for test +3600 = 1619667263

        $nonce = $testMode ? $forTestNoce : self::makeNonce();
        $data = [
            'app_id'   => $appId,
            'user_id'  => $userId,
            'nonce'    => $nonce,
            'ctime'    => $timestamp,
            'expire'   => $timestamp + $effectiveTimeInSeconds,
            'payload'  => $payload
        ];

        $cipher = 'aes-128-cbc';

        $plaintext = json_encode($data,JSON_BIGINT_AS_STRING);

        switch($keyLen){
            case 16:
                $cipher = 'aes-128-cbc';
            break;

            case 24:
                $cipher = 'aes-192-cbc';
            break;

            case 32:
                $cipher = 'aes-256-cbc';
            break;

            default:
                throw new Exception('secret length does not supported!');
            break;
        }

        //$ivlen = openssl_cipher_iv_length($cipher);
        //$iv    = openssl_random_pseudo_bytes($ivlen);

        $iv = $testMode ? $forTestIv : self::makeRandomIv();

        $encrypted = openssl_encrypt($plaintext, $cipher, $secret, OPENSSL_RAW_DATA, $iv);

        //64-bit signed integer timestamp-BigEndian + 16-bit unsigned integer iv byte length counter-BigEndian + iv string + 16-bit unsigned integer aes encrypted string byte length counter-BigEndian + aes encrypted string
        $packData = [
            //$data['expire_time'],
            strlen($iv),
            $iv,
            strlen($encrypted),
            $encrypted
        ];

        //print_r($packData);

        //$binary = pack('q',$data['expire_time']);//q signed long long integer(64-bit, host byte order)
        $binary = pack('J',$data['expire']);//J unsigned long long integer(64-bit, big-endian byte order)
        $binary .= pack('na*na*', ...$packData);

        //"03" string + base64 encoding binary to string
        //print_r(unpack('qq/nn/a*a',$binary));

        $assistantToken->token = '04'.base64_encode($binary);
        return $assistantToken;
    }
}