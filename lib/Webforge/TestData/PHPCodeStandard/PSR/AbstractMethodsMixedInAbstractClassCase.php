<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class AbstractMethodsMixedInAbstractClassCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
namespace Vendor\Package;

abstract class AbstractClassName
{
    protected function useIt() {
        echo "body";
    }
    
    abstract public function getLog();
    
    public static function create() {
        echo "body";
    }
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
    protected function useIt() {
        echo "body";
    }
    
    abstract public function getLog();
    
    public static function create() {
        echo "body";
    }
}

PHP;
  }
}
?>