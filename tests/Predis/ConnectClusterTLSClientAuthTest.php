<?php
// REMOVE_START
use PredisTestCase;
// REMOVE_END

use Predis\Client;

class ConnectClusterTLSClientAuthTest
// REMOVE_START
extends PredisTestCase
// REMOVE_END
{
    public function testConnectClusterTLSClientAuth() {
        $client = new Predis\Client([
            'host' => 'redis-15313.c34461.eu-west-2-mz.ec2.cloud.rlrcp.com',
            'port' => 15313,
            'database' => 0,
            'username' => 'default',
            'password'=> 'MrlnkBuSZqO0s0vicIkLnqJXetbSTCan',
            'cluster' => 'predis',
            'scheme' => 'tls',
            'ssl'    => [
                'cafile' => '/Users/andrew.stark/Documents/Repos/forks/predis/tests/Predis/redis_ca.pem',
                'local_cert' => '/Users/andrew.stark/Documents/Repos/forks/predis/tests/Predis/redis-db-12605866.crt',
                'local_pk' => '/Users/andrew.stark/Documents/Repos/forks/predis/tests/Predis/redis-db-12605866.key',
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
