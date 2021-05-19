<?php
include_once "LinkedLists/Node.php";
include_once "LinkedLists/LinkedList.php";

$linkedList = new LinkedList();

$node = new Node(4);

$linkedList->addFirstNode(1);
$linkedList->addLastNode(2);
$linkedList->addLastNode(3);
$linkedList->addFirstNode(4);
$linkedList->addLastNode(5);
$linkedList->addOfIndex(3,6);
$linkedList->addLastNode(7);


$linkedList->deleteOfValue(7);
echo "<pre>";
var_dump($linkedList);
echo $linkedList->size();