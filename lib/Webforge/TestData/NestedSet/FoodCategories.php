<?php

namespace Webforge\TestData\NestedSet;

/**
 * Nested Set Example with easy to remember Food Categories
 *
 * this example is burrowed from: https://github.com/l3pp4rd/DoctrineExtensions
 * its the sample Tree for the Tests for tree-listener
 *
 * I like the idea to use food, because everyone one knows that an orange is a fruit and fruit is food
 *
 * P.S. fixed: Vegitables into Vegetables
 *
 * You can see a picture! see resources/FoodCategories.png
 */
class FoodCategories extends NestedSetExample {
  
  public function toArray() {
    return Array(
      array(
        'title' => 'Food',
        'lft' => 1,
        'rgt' => 17,
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
        'rgt' => 9,
        'depth' => 1,
      ),
      array(
        'title' => 'Citrons',
        'lft' => 5,
        'rgt' => 6,
        'depth' => 2,
      ),
      array(
        'title' => 'Oranges',
        'lft' => 7,
        'rgt' => 8,
        'depth' => 2,
      ),
      array(
        'title' => 'Milk',
        'lft' => 10,
        'rgt' => 11,
        'depth' => 1,
      ),
      array(
        'title' => 'Meat',
        'lft' => 12,
        'rgt' => 17,
        'depth' => 1,
      ),
      array(
        'title' => 'Beef',
        'lft' => 13,
        'rgt' => 14,
        'depth' => 1,
      ),
      array(
        'title' => 'Ham',
        'lft' => 15,
        'rgt' => 16,
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
        'title' => 'Citrons',
        'parent' => 'Fruits',
        'depth' => 2,
      ),
      array(
        'title' => 'Oranges',
        'parent' => 'Fruits',
        'depth' => 2,
      ),
      array(
        'title' => 'Milk',
        'parent' => 'Food',
        'depth' => 1,
      ),
      array(
        'title' => 'Meat',
        'parent' => 'Food',
        'depth' => 1,
      ),
      array(
        'title' => 'Beef',
        'parent' => 'Meat',
        'depth' => 2,
      ),
      array(
        'title' => 'Ham',
        'parent' => 'Meat',
        'depth' => 2,
      )
    );
  }
  
  public function toString() {
    return <<<'STRING'
Food
  Vegetables
  Fruits
    Citrons
    Oranges
  Milk
  Meat
    Beef
    Ham

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
      <li><a>Fruits</a>
        <ul>
          <li><a>Citrons</a></li>
          <li><a>Oranges</a></li>
        </ul>
      </li>
      <li><a>Milk</a></li>
      <li><a>Meat</a>
        <ul>
          <li><a>Beef</a></li>
          <li><a>Ham</a></li>
        </ul>
    </ul>
  </li>
</ul>
HTML;
  }
}
?>