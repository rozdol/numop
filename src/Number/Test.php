<?php
namespace Rozdol\Number;

class Test
{
    /**
     * get random number
     *
     * @return int
     */
    public static function sum2num($a, $b)
    {	
    	$b = $a + $b;
        return [
        	'result' => $b,
        	'rnd' => rand()
        ];
    }
}
