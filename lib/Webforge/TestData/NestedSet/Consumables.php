<?php

namespace Webforge\TestData\NestedSet;

/**
 * Nested Set Example with two Roots and simple children
 *
 * You can see a picture: see resources/Consumables.png
 */
class Consumables extends NestedSetExample {
  
  public function toArray() {
    return Array(
      array(
        'title' => 'Food',
        'lft' => 1,
        'rgt' => 6,
        'depth' => 0,
      ),
      array(
        'title' => 'Vegetables',
        'lft' => 2,
        'rgt' => 3,
        'depth' => 1,
      ),
      array(
        'title' => 'Fruits',
        'lft' => 4,
        'rgt' => 5,
        'depth' => 1,
      ),
      array(
        'title' => 'Electronics',
        'lft' => 7,
        'rgt' => 12,
        'depth' => 0,
      ),
      array(
        'title' => 'Mobiles',
        'lft' => 8,
        'rgt' => 9,
        'depth' => 1,
      ),
      array(
        'title' => 'DVD-Players',
        'lft' => 10,
        'rgt' => 11,
        'depth' => 1,
      )
    );
  }
  
  public function toParentPointerArray() {
    return Array(
      array(
        'title' => 'Food',
        'parent'=> NULL,
        'depth' => 0
      ),
      array(
        'title' => 'Vegetables',
        'parent' => 'Food',
        'depth' => 1
      ),
      array(
        'title' => 'Fruits',
        'parent' => 'Food',
        'depth' => 1,
      ),
      array(
        'title' => 'Electronics',
        'parent' => NULL,
        'depth' => 0,
      ),
      array(
        'title' => 'Mobiles',
        'parent' => 'Electronics',
        'depth' => 1,
      ),
      array(
        'title' => 'DVD-Players',
        'parent' => 'Electronics',
        'depth' => 1,
      )
    );
  }
  
  public function toString() {
    return <<<'STRING'
Food
  Vegetables
  Fruits
Electronics
  Mobiles
  DVD-Players

STRING;
    // this looks funny with the empty line, but otherwise php would cut directly after the t from Meat
  }
  
  public function toHTMLList() {
    // the titles are enclosed with the <a> tag to circumstance that the titles for nodes with children will include unecessary whitespace
    return <<<'HTML'
<ul>
  <li><a>Food</a>
    <ul>
      <li><a>Vegetables</a></li>
      <li><a>Fruits</a></li>
    </ul>
  </li>
  <li><a>Electronics</a>
    <ul>
      <li><a>Mobiles</a></li>
      <li><a>DVD-Players</a></li>
    </ul>
  </li>
</ul>
HTML;
  }
}
?>