<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class TryCatchCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
try {
    echo 'try body';
} catch (FirstExceptionType $e) {
    echo 'catch body 1';
} catch (OtherExceptionType $e) {
    echo 'catch body 2';
}

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
try {
    echo 'try body';
} catch (FirstExceptionType $e) {
    echo 'catch body 1';
} catch (OtherExceptionType $e) {
    echo 'catch body 2';
}

PHP;
  }
}
?>