<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class While extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
while ($expr) {
    echo "structure body";
}
PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
while ($expr) {
    echo "structure body";
}
PHP;
  }
}
?>