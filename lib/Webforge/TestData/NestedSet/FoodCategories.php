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
 */
class FoodCategories extends NestedSetExample {
  
  public function toArray() {
    return Array(
      array(
        'title' => 'Food',
        'lft' => 1,
        'rgt' => 14,
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
        'rgt' => 13,
        'depth' => 1,
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

STRING;
    // this looks funny with the empty line, but otherwise php would cut directly after the t from Meat
  }
  
  public function toHTMLList() {
    return <<<'HTML'
<ul>
  <li>Food
    <ul>
      <li>Vegetables</li>
      <li>Fruits
        <ul>
          <li>Citrons</li>
          <li>Oranges</li>
        </ul>
      </li>
      <li>Milk</li>
      <li>Meat</li>
    </ul>
  </li>
</ul>
HTML;
  }
}
?>