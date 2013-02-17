<?php

namespace Webforge\TestData\PHPCodeStandard;

/**
 * A class for comparison of white space and new lines of code (coding style)
 */
abstract class CodeIndentation {
  
  /**
   * Returns the php code in SOME form
   *
   * it may contain spaces or newlines at will
   * @return string
   */
  abstract public function toString();
  
}
?>