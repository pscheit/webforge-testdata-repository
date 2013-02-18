<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class SimpleClosureWithUseCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
    echo "body";
};

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
    echo "body";
};

PHP;
  }
}
?>