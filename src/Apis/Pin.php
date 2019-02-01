<?php
/**
 * Created by PhpStorm.
 * User: kurisu
 * Date: 18-11-23
 * Time: 下午4:59
 */

namespace ExinOne\MixinSDK\Apis;

class Pin extends Api
{
    /**
     * @param $oldPin
     * @param $pin
     *
     * @return array
     * @throws \ExinOne\MixinSDK\Exceptions\LoadPrivateKeyException
     * @throws \ExinOne\MixinSDK\Exceptions\MixinNetworkRequestException
     */
    public function updatePin($oldPin, $pin): array
    {
        $body = [
            'old_pin' => $oldPin == '' ? '' : $this->encryptPin((string)$oldPin),
            'pin'     => $this->encryptPin((string)$pin),
        ];

        return $this->res($body);
    }

    /**
     * @param $pin
     *
     * @return array
     * @throws \ExinOne\MixinSDK\Exceptions\LoadPrivateKeyException
     * @throws \ExinOne\MixinSDK\Exceptions\MixinNetworkRequestException
     */
    public function verifyPin($pin): array
    {
        $body = [
          'pin' => "U0dd4aBpIAIniF5QjmZwHXE1UABr1WZK9U7EpCPL4J+cNPqi3DryHA1BE60/vzlp",
            // 'pin' => $this->encryptPin((string)$pin),
        ];

        return $this->res($body);
    }
}
