<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

use Webforge\Common\System\Dir;
use Webforge\Common\System\File;
use Webforge\Common\ArrayUtil AS A;

class CodeIndentationTest extends \PHPUnit_Framework_TestCase {
  
  public function setUp() {
    $this->chainClass = 'Webforge\\TestData\\PHPCodeStandard\\PSR\\CodeIndentation';
    parent::setUp();
    
    
  }
  
  public function testAllCaseFilesClasses_AreInGetAllCasesOutput() {
    $classNames = CodeIndentation::getAllCases();
    
    $expectedClassNames = array();
    foreach (
      $GLOBALS['env']['root']
        ->sub('lib/Webforge/TestData/PHPCodeStandard/PSR/')
          ->getFiles('php', array('CodeIndentation.php'), FALSE)
      as
      $classFile
    ) {
      $expectedClassNames[] = __NAMESPACE__.'\\'.$classFile->getName(File::WITHOUT_EXTENSION);
    }
    
    $this->assertEquals(
      $expectedClassNames,
      $classNames,
      '',
      0,
      2,
      TRUE
    );
  }
  
  /**
   * @dataProvider provideCasesFQNs
   */
  public function testAllClassesCanBeInstantiated($fqn) {
    $case = new $fqn();
    
    $this->assertNotEmpty($case->toPSR2());
    $this->assertNotEmpty($case->toString());
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
    
    foreach ($GLOBALS['env']['root']->sub('lib/Webforge/TestData/PHPCodeStandard/PSR/resources/')->getFiles('php') as $file) {
      $cases[] = array((string) $file);
    }
    
    return $cases;
  }
  
  public static function provideCasesFQNs() {
    $tests = array();
    
    foreach (CodeIndentation::getAllCases() as $fqn) {
      $tests[] = array($fqn);
    }
    
    return $tests;
  }
}
?>