<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class MethodCallsCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
$foo->bar($arg1);
Foo::bar($arg2, $arg3);
PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
$foo->bar($arg1);
Foo::bar($arg2, $arg3);
PHP;
  }
}
?>