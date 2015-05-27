--TEST--
Comments
--FILE--
<?php

// Single line comment content should preserve indentation i.e. everything
// after the double-slash should be ignored by indentation rules.
//      x
//                  x
//              x

/*
Multi line comment content should preserve indentation i.e. everything
between the forward-slash-star stat-forward-slash should be ignored by
indentation rules.
        x
                    x
                x
*/
                ?>
--EXPECT--
<?php

// Single line comment content should preserve indentation i.e. everything
// after the double-slash should be ignored by indentation rules.
//      x
//                  x
//              x

/*
Multi line comment content should preserve indentation i.e. everything
between the forward-slash-star stat-forward-slash should be ignored by
indentation rules.
        x
                    x
                x
*/
                ?>
