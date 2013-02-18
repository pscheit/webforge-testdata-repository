<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class DoWhileCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
do {
    echo "structure body";
} while ($expr);

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
do {
    echo "structure body";
} while ($expr);

PHP;
  }
}
?>