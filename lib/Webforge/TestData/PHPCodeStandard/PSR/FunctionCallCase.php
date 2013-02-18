<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class FunctionCallCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
bar();

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
bar();

PHP;
  }
}
?>