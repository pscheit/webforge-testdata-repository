<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class PropertiesMixedInClass extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
namespace Vendor\Package;

class ClassName
{
    const VERSION = '1.0';
    const DATE_APPROVED = '2012-06-01';
    
    public static $bar;
    
    public $foo = null;
}

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
namespace Vendor\Package;

class ClassName
{
    const VERSION = '1.0';
    const DATE_APPROVED = '2012-06-01';
    
    public static $bar;
    
    public $foo = null;
}

PHP;
  }
}
?>