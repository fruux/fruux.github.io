<?php

$foo =file_get_contents('foo.txt');

echo implode(', ', explode("\n", $foo));
