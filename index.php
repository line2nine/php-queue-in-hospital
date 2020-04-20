<?php
include "class/Patient.php";
include "class/PriorityQueue.php";

$priority = new PriorityQueue();

$priority->enqueue("Nam", 2);
$priority->enqueue("Thanh", 1);
$priority->enqueue("Bach", 3);
$priority->enqueue("Hoa", 3);

$priority->dequeue();

var_dump($priority);