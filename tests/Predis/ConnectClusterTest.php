<?php
// REMOVE_START
use PredisTestCase;
// REMOVE_END

use Predis\Client;

class ConnectClusterTest
// REMOVE_START
extends PredisTestCase
// REMOVE_END
{
    public function testConnectCluster() {
        $client = new Predis\Client([
            'host' => 'redis-13891.c34425.eu-west-2-mz.ec2.cloud.rlrcp.com',
            'port' => 13891,
            'database' => 0,
            'username' => 'default',
            'password'=> 'wtpet4pI5EgyJHyldPwR7xM7GaZB0EcG',
            'cluster' => 'predis',
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
