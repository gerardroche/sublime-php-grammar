--TEST--
Short array syntax as of 5.4
--FILE--
<?php

$x = array();
$x = [];

$x = array( );
$x = [ ];

$x = array(
    'x'
);
$x = [
    'x'
];

?>
--EXPECT--
match:2:5:meta.array.empty.php support.function.construct.php
match:2:6:meta.array.empty.php support.function.construct.php
match:2:7:meta.array.empty.php support.function.construct.php
match:2:8:meta.array.empty.php support.function.construct.php
match:2:9:meta.array.empty.php support.function.construct.php
match:2:10:meta.array.empty.php punctuation.definition.array.begin.php
match:2:11:meta.array.empty.php punctuation.definition.array.end.php
match:3:5:meta.array.empty.php punctuation.definition.array.begin.php
match:3:6:meta.array.empty.php punctuation.definition.array.end.php

match:5:5:meta.array.php support.function.construct.php
match:5:6:meta.array.php support.function.construct.php
match:5:7:meta.array.php support.function.construct.php
match:5:8:meta.array.php support.function.construct.php
match:5:9:meta.array.php support.function.construct.php
match:5:10:meta.array.php punctuation.definition.array.begin.php
match:5:11:meta.array.php
match:5:12:meta.array.php punctuation.definition.array.end.php
match:6:5:meta.array.php punctuation.definition.array.begin.php
match:6:6:meta.array.php
match:6:7:meta.array.php punctuation.definition.array.end.php

match:8:5:meta.array.php support.function.construct.php
match:8:6:meta.array.php support.function.construct.php
match:8:7:meta.array.php support.function.construct.php
match:8:8:meta.array.php support.function.construct.php
match:8:9:meta.array.php support.function.construct.php
match:8:10:meta.array.php punctuation.definition.array.begin.php
match:8:11:meta.array.php
match:9:0:meta.array.php
match:9:1:meta.array.php
match:9:2:meta.array.php
match:9:3:meta.array.php
match:9:4:meta.array.php string.quoted.single.php punctuation.definition.string.begin.php
match:9:5:meta.array.php string.quoted.single.php meta.string-contents.quoted.single.php
match:9:6:meta.array.php string.quoted.single.php punctuation.definition.string.end.php
match:9:7:meta.array.php

match:10:0:meta.array.php punctuation.definition.array.end.php
match:11:5:meta.array.php punctuation.definition.array.begin.php
match:11:6:meta.array.php
match:12:0:meta.array.php
match:12:1:meta.array.php
match:12:2:meta.array.php
match:12:3:meta.array.php
match:12:4:meta.array.php string.quoted.single.php punctuation.definition.string.begin.php
match:12:5:meta.array.php string.quoted.single.php meta.string-contents.quoted.single.php
match:12:6:meta.array.php string.quoted.single.php punctuation.definition.string.end.php
match:12:7:meta.array.php
match:13:0:meta.array.php punctuation.definition.array.end.php
