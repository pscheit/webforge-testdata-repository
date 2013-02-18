<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

/**
 * A class for comparison of code written in the PSR-2
 *
 * https://github.com/php-fig/fig-standards
 *
 * the testcases are defined in resources (for better maintainability). They can be compiled with the command line interface
 */
abstract class CodeIndentation extends \Webforge\TestData\PHPCodeStandard\CodeIndentation {

  /**
   * @return string
   */
  abstract public function toPSR2();
  
}
?>