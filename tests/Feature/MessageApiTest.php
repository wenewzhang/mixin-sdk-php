<?php
/**
 * Created by PhpStorm.
 * User: kurisu
 * Date: 18-11-29
 * Time: 下午3:10
 */

namespace ExinOne\MixinSDK\Tests\Feature;

use ExinOne\MixinSDK\MixinSDK;
use PHPUnit\Framework\TestCase;

class MessageApiTest extends TestCase
{
    protected $mixinSDK;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->mixinSDK = new MixinSDK(require './testKeys.php');
    }

    public function test_it_can_send_message()
    {
        $ids = [
            '0b4f49dc-8fb4-4539-9a89-fb3afc613747',
        ];
        $a = $this->mixinSDK->message()->sendBatchMessage($ids,'Hello,Websocket!');
        dd($a);
    }
}
