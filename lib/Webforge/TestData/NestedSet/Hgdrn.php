<?php

namespace Webforge\TestData\NestedSet;

/**
 * Nested Set Example with one root and deep levels
 *
 */
class Hgdrn extends NestedSetExample {

/*
1  24         Startseite
2  3            Unternehmen
4  5            Produkte
6  7            Dienstleistungen
8   21          Lösungen
9   10            HMS
11  12            HTS
13  20            INT
14  15               container
16  17               model
18  19               win
22  23          Kunden
*/

  
  public function toArray() {
    return Array(
      array(
        'title' => 'Startseite',
        'lft'   => 1,
        'rgt'   => 24,
        'depth' => 0
      ),
      array(
        'title' => 'Unternehmen',
        'lft'   => 2,
        'rgt'   => 3,
        'depth' => 1
      ),
      array(
        'title' => 'Produkte',
        'lft'   => 4,
        'rgt'   => 5,
        'depth' => 1,
      ),
      array(
        'title' => 'Dienstleistungen',
        'lft'   => 6,
        'rgt'   => 7,
        'depth' => 1,
      ),
      array(
        'title' => 'Lösungen',
        'lft'   => 8,
        'rgt'   => 21,
        'depth' => 1,
      ),
      array(
        'title' => 'HMS',
        'lft'   => 9,
        'rgt'   => 10,
        'depth' => 2,
      ),
      array(
        'title' => 'HTS',
        'lft'   => 11,
        'rgt'   => 12,
        'depth' => 2,
      ),
      array(
        'title' => 'INT',
        'lft'   => 13,
        'rgt'   => 20,
        'depth' => 2,
      ),
      array(
        'title' => 'container',
        'lft'   => 14,
        'rgt'   => 15,
        'depth' => 3,
      ),
      array(
        'title' => 'model',
        'lft'   => 16,
        'rgt'   => 17,
        'depth' => 3,
      ),
      array(
        'title' => 'win',
        'lft'   => 18,
        'rgt'   => 19,
        'depth' => 3,
      ),
      array(
        'title' => 'Kunden',
        'lft'   => 22,
        'rgt'   => 23,
        'depth' => 1,
      ),
    );
  }
  
  public function toParentPointerArray() {
    return Array(
      array(
        'title' => 'Startseite',
        'parent'=> NULL,
        'depth' => 0
      ),
      array(
        'title' => 'Unternehmen',
        'parent' => 'Startseite',
        'depth' => 1
      ),
      array(
        'title' => 'Produkte',
        'parent' => 'Startseite',
        'depth' => 1,
      ),
      array(
        'title' => 'Dienstleistungen',
        'parent' => 'Startseite',
        'depth' => 1,
      ),
      array(
        'title' => 'Lösungen',
        'parent' => 'Startseite',
        'depth' => 1,
      ),
      array(
        'title' => 'HMS',
        'parent' => 'Lösungen',
        'depth' => 2,
      ),
      array(
        'title' => 'HTS',
        'parent' => 'Lösungen',
        'depth' => 2,
      ),
      array(
        'title' => 'INT',
        'parent' => 'Lösungen',
        'depth' => 2,
      ),
      array(
        'title' => 'container',
        'parent' => 'INT',
        'depth' => 3,
      ),
      array(
        'title' => 'model',
        'parent' => 'INT',
        'depth' => 3,
      ),
      array(
        'title' => 'win',
        'parent' => 'INT',
        'depth' => 3,
      ),
      array(
        'title' => 'Kunden',
        'parent' => 'Startseite',
        'depth' => 1,
      ),
    );
  }
  
  public function toString() {
    return <<<'STRING'
Startseite
  Unternehmen
  Produkte
  Dienstleistungen
  Lösungen
    HMS
    HTS
    INT
      container
      model
      win
  Kunden

STRING;
    // this looks funny with the empty line, but otherwise php would cut directly after the t from Meat
  }

  public function toHTMLList() {
    // the titles are enclosed with the <a> tag to circumstance that the titles for nodes with children will include unecessary whitespace
    return <<<'HTML'
<ul>
  <li><a>Startseite</a>
    <ul>
      <li><a>Unternehmen</a></li>
      <li><a>Produkte</a></li>
      <li><a>Dienstleistungen</a></li>
      <li><a>Lösungen</a>
        <ul>
          <li>HMS</li>
          <li>HTS</li>
          <li>INT
            <ul>
              <li>container</li>
              <li>model</li>
              <li>win</li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </li>
  <li><a>Kunden</a></li>
</ul>

HTML;
  }
}
