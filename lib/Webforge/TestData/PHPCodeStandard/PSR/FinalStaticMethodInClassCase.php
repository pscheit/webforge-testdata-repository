<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class FinalStaticMethodInClassCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
namespace Vendor\Package;

class ClassName
{
    final public static function bar()
    {
        echo "method body";
    }
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
    final public static function bar()
    {
        echo "method body";
    }
}

PHP;
  }
}
?>