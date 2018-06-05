<?php 
namespace Test\Rozdol\Number;
//require('../../../vendor/autoload.php');
use Rozdol\Number\Test;

use PHPUnit\Framework\TestCase;

class TestTest extends TestCase
{
    
    /** 
	* @dataProvider sumProvider
	*/

    public function testSum2num($a,$b,$c)
    {


        //$this->assertTrue(true);

        $result = Test::sum2num($a, $b);
        //print_r($result);
        $this->assertEquals($c, $result['result']);
        // $test = new LevelAwareDatabaseLog();

        // $loggedQuery = new sum2num();
        // $this->assertEquals(false, $test->log('debug', $loggedQuery), "log() did not skip logging of database queries");

        // $this->assertEquals(false, $test->log('bad_log_level', 'test message'), "log() did not skip logging of invalid log level");
    }
    public function sumProvider(){
    	return [
    		[1,1,2],
    		[-1,1,0],
    		[1,-1,0],
    		[4.5, 1.3, 5.8]

    	];
    }
}