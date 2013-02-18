<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class ClassExtendsImplementsCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
namespace Some\Vendor;

class ClassName extends ParentClass implements \ArrayAccess, \Countable
{
}

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
namespace Some\Vendor;

class ClassName extends ParentClass implements \ArrayAccess, \Countable
{
}

PHP;
  }
}
?>