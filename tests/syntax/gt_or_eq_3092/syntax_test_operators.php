// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

// Arithmetic

$arithmetic = 1 - 1 + 1 * 1 / 1 % 1 ** 1;
//              ^ keyword.operator.arithmetic
//                  ^ keyword.operator.arithmetic
//                      ^ keyword.operator.arithmetic
//                          ^ keyword.operator.arithmetic
//                              ^ keyword.operator.arithmetic
//                                  ^ keyword.operator.arithmetic
//                                   ^ keyword.operator.arithmetic

-$arithmetic;
// <- keyword.operator.arithmetic

// Assignment

$assignment = 1;
//          ^ keyword.operator.assignment

$assignment = &$a;
//          ^ keyword.operator.assignment

$assignment =&$a;
//          ^ keyword.operator.assignment

$assignment=&$a;
//         ^ keyword.operator.assignment

$assignment += 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment

$assignment -= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment

$assignment *= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment

$assignment /= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment

$assignment %= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment

$assignment &= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment

$assignment |= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment

$assignment ^= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment

$assignment <<= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment
//            ^ keyword.operator.assignment

$assignment >>= 1;
//          ^ keyword.operator.assignment
//           ^ keyword.operator.assignment
//            ^ keyword.operator.assignment

// Bitwise

$bitwise = $a & $b | $c ^ $d ~ $e << $f >> $g;
//            ^ keyword.operator.bitwise
//                 ^ keyword.operator.bitwise
//                      ^ keyword.operator.bitwise
//                           ^ keyword.operator.bitwise
//                                ^ keyword.operator.bitwise
//                                 ^ keyword.operator.bitwise
//                                      ^ keyword.operator.bitwise
//                                       ^ keyword.operator.bitwise

// Comparison

$comparison == 1;
//          ^ keyword.operator.comparison
//           ^ keyword.operator.comparison

$comparison === 1;
//          ^ keyword.operator.comparison
//           ^ keyword.operator.comparison
//            ^ keyword.operator.comparison

$comparison != 1;
//          ^ keyword.operator.comparison
//           ^ keyword.operator.comparison

$comparison <> 1;
//          ^ keyword.operator.comparison
//           ^ keyword.operator.comparison

$comparison !== 1;
//          ^ keyword.operator.comparison
//           ^ keyword.operator.comparison
//            ^ keyword.operator.comparison

$comparison < 1;
//          ^ keyword.operator.comparison

$comparison > 1;
//          ^ keyword.operator.comparison

$comparison <= 1;
//          ^ keyword.operator.comparison
//           ^ keyword.operator.comparison

$comparison >= 1;
//          ^ keyword.operator.comparison
//           ^ keyword.operator.comparison

$comparison <=> 1;
//          ^ keyword.operator.comparison
//           ^ keyword.operator.comparison
//            ^ keyword.operator.comparison

// Error control

@error_control();
// <- keyword.operator.error-control

// Execution

// ...

// Increment / Decrement

$decrement--;
//        ^ keyword.operator.increment-decrement
//         ^ keyword.operator.increment-decrement

--$decrement;
// <- keyword.operator.increment-decrement
//  <- keyword.operator.increment-decrement

$increment++;
//        ^ keyword.operator.increment-decrement
//         ^ keyword.operator.increment-decrement

++$increment;
// <- keyword.operator.increment-decrement
//  <- keyword.operator.increment-decrement

// Logical

!$a and $a or $a xor $a && $a || $a;
// <- keyword.operator.logical
//  ^ keyword.operator.logical
//   ^ keyword.operator.logical
//    ^ keyword.operator.logical
//         ^ keyword.operator.logical
//          ^ keyword.operator.logical
//               ^ keyword.operator.logical
//                ^ keyword.operator.logical
//                 ^ keyword.operator.logical
//                      ^ keyword.operator.logical
//                       ^ keyword.operator.logical
//                            ^ keyword.operator.logical
//                             ^ keyword.operator.logical

var_dump(!($a instanceof stdClass));
//       ^ keyword.operator.logical

// String

$a . 'Hello';
// ^ keyword.operator.string
$a .= 'world';
// ^ keyword.operator.string
//  ^ keyword.operator.string

// Type

$a instanceof ClassName;
// ^ keyword.operator.type
//  ^ keyword.operator.type
//   ^ keyword.operator.type
//    ^ keyword.operator.type
//     ^ keyword.operator.type
//      ^ keyword.operator.type
//       ^ keyword.operator.type
//        ^ keyword.operator.type
//         ^ keyword.operator.type
//          ^ keyword.operator.type
