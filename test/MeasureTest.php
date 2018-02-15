<?php
include 'autoload.inc.php';

use PHPUnit\Framework\TestCase;
use domain\Measure;

class MeasureTest extends TestCase {
    
    public function testMeasure() {
        
        $Measure = new Measure(25, 49);
        $this->assertEquals(25, $Measure->temperature);
        $this->assertEquals(49, $Measure->humidite);
        
    }
    
}
