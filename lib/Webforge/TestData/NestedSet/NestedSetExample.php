<?php

namespace Webforge\TestData\NestedSet;

/**
 * Base Class for all nested Sets examples
 *
 * @language-defines: NestedSet, Node, Children, Root
 */
abstract class NestedSetExample {
  
  /**
   * Returns a Tree as an flattened simple Array of Nodes
   *
   * Each node should be itself an array and have the following keys:
   * title: a string with a short verbose name for the node
   * lft: the left in the nested set
   * rgt: the right in the nested set
   * depth: a 0-based integer for the level in which the node is located if the array would be nested correctly (root is 0)
   */
  abstract public function toArray();
  
  
  /**
   * Returns a Tree as an nested, Array of Nodes
   *
   * As arrays are not reference save, the reference for a node is made through its title
   * every node has to have a "parent" key (which can be NULL for root nodes)
   * 
   * its optional to have the parent of the parent in the node (depth 1 is sufficient)
   * lft and rgt values are optional, but should better left out
   * depth is optional, but is good for orientation
   *
   * so: for every node there is required: title, parent
   */
  abstract public function toParentPointerArray();
  
  /**
   * Returns the Tree indented with only its titles
   *
   * Indent with 2 whitespace characters
   * use only \n as line ending
   * use an \n after the last item
   *
   * the string is whitespace-safe
   * @return string
   */
  abstract public function toString();
  
  /**
   * Returns the Tree as an cascaded HTML <ul>-List
   *
   * use:
   * <li>$title
   *   <ul>
   *   $children
   *   </ul>
   * </li>
   *
   * as format for a node with children
   *
   * use:
   *
   * <li>$title</li>
   * for a node without children
   *
   * The string is not whitespace safe.
   * @return string
   */
  abstract public function toHTMLList();
}
?>