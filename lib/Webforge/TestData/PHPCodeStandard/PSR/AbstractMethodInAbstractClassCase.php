<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class AbstractMethodInAbstractClassCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
namespace Vendor\Package;

abstract class AbstractClassName
{
    abstract protected function useIt();
    
    abstract public function getLog();
}

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
namespace Vendor\Package;

abstract class AbstractClassName
{
    abstract protected function useIt();
    
    abstract public function getLog();
}

PHP;
  }
}
?>