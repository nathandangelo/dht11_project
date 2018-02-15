<?php
namespace test;
include 'autoload.inc.php';
use PHPUnit\Framework\TestCase;
use domain\Measure;

class MeasureDao extends TestCase {
            
        private $measureDao; 
        /**
         * Prepares the environment before running a test.
         */
        protected function setUp() {
            
            parent::setUp();
            
            $config = include '../inc/config.inc.php';
            
            $this->measureDao = new MeasureDao($config);
        }
        /**
         * Cleans up the environment after running a test.
         */
        protected function tearDown() {
            
            $this->measureDao->close();
            
            $this->measureDao = null;
            
            parent::tearDown();
        }
        
        public function testInsertMeasure() {
            
            $measure = new Measure(null,25, 58);
            $id = $this->measureDao->createMesure($mesureobjet);
            $newmeasure->$this->readmesurebyid($id);
            $this->assertEquals(25, $measure->temperature);
            $this->assertEquals(58, $measure->humidite);
        }
                
    }
    
    

