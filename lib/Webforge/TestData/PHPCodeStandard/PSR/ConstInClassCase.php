<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class ConstInClassCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
namespace Vendor\Package;

class ClassName
{
    const SOMETHING = 7;
}

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
namespace Vendor\Package;

class ClassName
{
    const SOMETHING = 7;
}

PHP;
  }
}
?>