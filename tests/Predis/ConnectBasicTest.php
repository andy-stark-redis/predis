<?php
// REMOVE_START
use PredisTestCase;
// REMOVE_END

use Predis\Client;

class ConnectBasicTest
// REMOVE_START
extends PredisTestCase
// REMOVE_END
{
    public function testConnectBasic() {
        $client = new Predis\Client([
            'host' => 'redis-14669.c338.eu-west-2-1.ec2.redns.redis-cloud.com',
            'port' => 14669,
            'database' => 0,
            'username' => 'default',
            'password'=> 'jj7hRGi1K22vop5IDFvAf8oyeeF98s4h',
        ]);
        // REMOVE_START
        $client->del('foo');
        // REMOVE_END

        $client->set('foo', 'bar');
        $result = $client->get('foo');
        echo "$result\n";   // >>> bar
        // REMOVE_START
        $this->assertEquals("bar", $result);
        // REMOVE_END
    }
// STEP_END
}
