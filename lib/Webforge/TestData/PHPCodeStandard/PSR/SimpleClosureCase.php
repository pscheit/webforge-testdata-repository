<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class SimpleClosureCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
$closureWithArgs = function ($arg1, $arg2) {
    echo "body";
};

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
$closureWithArgs = function ($arg1, $arg2) {
    echo "body";
};

PHP;
  }
}
?>