<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class PropertyInClass extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
namespace Vendor\Package;

class ClassName
{
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
    public $foo = null;
}

PHP;
  }
}
?>