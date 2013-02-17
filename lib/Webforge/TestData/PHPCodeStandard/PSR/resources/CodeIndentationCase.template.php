<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class %className% extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
%phpCode%
PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
%stringCode%
PHP;
  }
}
?>