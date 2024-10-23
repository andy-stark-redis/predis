<?php
// REMOVE_START
use PredisTestCase;
// REMOVE_END

use Predis\Client;

class ConnectClusterTLSTest
// REMOVE_START
extends PredisTestCase
// REMOVE_END
{
    public function testConnectClusterTLS() {
        $client = new Predis\Client([
            'host' => 'redis-18141.c34428.eu-west-2-mz.ec2.cloud.rlrcp.com',
            'port' => 18141,
            'database' => 0,
            'username' => 'default',
            'password'=> 'd8gzw2azTFVSh0tTPDsvuzc2BDC1dOQN',
            'cluster' => 'predis',
            'scheme' => 'tls',
            'ssl'    => [
                'cafile' => '/Users/andrew.stark/Documents/Repos/forks/predis/tests/Predis/redis_ca.pem',
                'verify_peer' => true
            ],
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
