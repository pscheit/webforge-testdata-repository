<?php

namespace Webforge\TestData\NestedSet;

/**
 *
 * for the start, we combine the tests for all examples into one.
 * for an alternative: make this an TestCase-Class (abstract) and let other tests extend it
 */
class NestedSetExampleTest extends \PHPUnit_Framework_TestCase {
  
  /**
   * @dataProvider provideExamples
   */
  public function testLftAndRgtValuesAreMonotoneAscendingWithoutGaps(NestedSetExample $example) {
    $categories = $example->toArray();
    $expectedLftRgt = range(1, count($categories)*2);
    
    $lftRgt = array();
    foreach ($categories as $category) {
      $lftRgt[] = $category['lft'];
      $lftRgt[] = $category['rgt'];
    }
    
    $this->assertEquals($expectedLftRgt, $lftRgt, 'the range of lgt and rgt values is not consistent', 0, 10, $canonicalize = TRUE);
  }

  /**
   * @dataProvider provideExamples
   */
  public function testParentPointerArrayHasParentAndParentIsValidTitle(NestedSetExample $example) {
    $titles = array();
    foreach ($example->toParentPointerArray() as $key=>$category) {
      $this->assertArrayHasKey('parent', $category, $category['title'].' has not a parent key. if not set it must be NULL');
      $this->assertNotEmpty($category['title'], 'Title for Array Key '.$key.' is empty');
      $titles[$category['title']] = TRUE;
    }
    
    foreach ($example->toParentPointerArray() as $category) {
      if ($category['parent'] === NULL) continue;
      
      $this->assertArrayHasKey($category['parent'], $titles, 'The parent key for: '.print_r($category,true).' is not valid. The parent-title was not found');
    }
  }

  /**
   * @dataProvider provideExamples
   */
  public function testDepthIsNonNegative(NestedSetExample $example) {
    foreach ($example->toArray() as $category) {
      $this->assertGreaterThanOrEqual(0, $category['depth'], $category['title'].' has an invalid depth');
    }
  }
  
  /**
   * @dataProvider provideExamples
   */
  public function testToStringResultHasOnlyLFnoCRInIt(NestedSetExample $example) {
    $string = $example->toString();
    $this->assertFalse(mb_strpos($string, "\r"), 'dont use other file endings than \n');
    $this->assertFalse(mb_strpos($string, "\t"), 'dont use \t for indenting. Use 2 whitespaces for 1 level of depth');
    $this->assertStringEndsWith("\n", $string);
  }

  /**
   * @dataProvider provideExamples
   */
  public function testHTMLListIsValidHTML(NestedSetExample $example) {
    // phpunit can do nicer output for us
    $this->assertXmlStringEqualsXmlString($example->toHTMLList(), $example->toHTMLList());
  }
  
  public static function provideExamples() {
    return Array(
      array(new FoodCategories()),
      array(new Consumables())

    );
  }
}
?>