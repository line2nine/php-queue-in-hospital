<?php


interface Queue
{
    function enqueue($name, $code);
    function dequeue();
    function isEmpty();
    function isFull();
}