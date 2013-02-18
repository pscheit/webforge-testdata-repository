<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class For extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
for ($i = 0; $i < 10; $i++) {
    echo "for body";
}

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
for ($i = 0; $i < 10; $i++) {
    echo "for body";
}

PHP;
  }
}
?>