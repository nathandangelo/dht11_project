<?php
namespace test;

use PHPUnit\Framework\TestCase;
use domain\Measure;
use dao\MesureDao;

include 'autoload.inc.php';

class MeasureDaoTest extends TestCase {
            
        private $measureDao; 
        /**
         * Prepares the environment before running a test.
         */
        protected function setUp() {
            
            parent::setUp();
            
            $config = include '../inc/config.inc.php';
            
            $this->measureDao = new MesureDao($config);
        }
        /**
         * Cleans up the environment after running a test.
         */
        protected function tearDown() {
            
            $this->measureDao->close();
            
            $this->measureDao = null;
            
            parent::tearDown();
        }
        
        public function testReadmesurebyid() {
            
            $measure = $this->measureDao->readmesurebyid(1);            
            
            $this->assertEquals(25, $measure->temperature);
            
            $this->assertEquals(45, $measure->humidite);
        }
        
        
        public function testInsertMeasure() {
            
            $mesureobjet= new Measure(null,25, 58);
            
            $id = $this->measureDao->createMesure($mesureobjet);
            
            $newmeasure->$this->readmesurebyid($id);
            
            $this->assertEquals(25, $newmeasure->temperature);
            
            $this->assertEquals(58, $newmeasure->humidite);
            
            $this->measureDao->deletemesure($id);
            
        }
        
        public function testDeleteMeasure() {
            
            $mesureobjet = new Measure(null, 33, 54);
            
            $id = $this->measureDao->createMesure($mesureobjet);
            
            $newMeasure = $this->measureDao->readmesurebyid($id);
            
            $this->assertNotNull($newMeasure);
            
            $this->measureDao->deletemesure($id);
            
            $deletedMeasure = $this->measureDao->readmesurebyid($id);
            
            $this->assertNull($deletedMeasure);
        }
                
    }
    
    

