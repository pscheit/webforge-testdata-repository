<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

use Webforge\Common\System\Dir;
use Webforge\Common\System\File;

class CodeIndentationTest extends \PHPUnit_Framework_TestCase {
  
  public function setUp() {
    $this->chainClass = 'Webforge\\TestData\\PHPCodeStandard\\PSR\\CodeIndentation';
    parent::setUp();
  }
  
  /**
   * @dataProvider provideCases
   */
  public function testNoCaseContainsTabs($fileName) {
    $file = new File($fileName);
    
    $this->assertNotContains("\t", $file->getContents(), 'file: '.$fileName);
  }
  
  /**
   * @dataProvider provideCases
   */
  public function testCaseContainsPHPTag($fileName) {
    $file = new File($fileName);
    
    $this->assertStringStartsWith("<?php", $file->getContents(), 'file: '.$fileName);
  }
  
  public static function provideCases() {
    $cases = array();
    
    foreach ($GLOBALS['env']['root']->sub('lib/Webforge/TestData/PHPCodeStandard/PSR/')->getFiles('php') as $file) {
      $cases[] = array((string) $file);
    }
    
    return $cases;
  }
}
?>