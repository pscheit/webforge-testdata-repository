<?php
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
