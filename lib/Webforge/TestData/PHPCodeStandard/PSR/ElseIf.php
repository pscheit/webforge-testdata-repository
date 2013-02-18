<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class ElseIf extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
if ($expr1) {
    echo 'indentation is 4';
} elseif ($expr2) {
    echo 'indentation is 4';
}

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
if ($expr1) {
    echo 'indentation is 4';
} elseif ($expr2) {
    echo 'indentation is 4';
}

PHP;
  }
}
?>