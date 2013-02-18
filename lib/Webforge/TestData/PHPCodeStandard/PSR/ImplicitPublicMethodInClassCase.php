<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class ImplicitPublicMethodInClassCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
namespace Vendor\Package;

class ClassName
{
    public function foo($arg1, &$arg2, $arg3 = array())
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
    public function foo($arg1, &$arg2, $arg3 = array())
    {
        echo "method body";
    }
}

PHP;
  }
}
?>