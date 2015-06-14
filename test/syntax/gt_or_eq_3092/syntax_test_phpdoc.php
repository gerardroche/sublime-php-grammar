// SYNTAX TEST "Packages/php-grammar/PHP.tmLanguage"
<?php

/**
// <- comment.block.documentation.phpdoc
//^ comment.block.documentation.phpdoc
// ^ comment.block.documentation.phpdoc
//  ^ comment.block.documentation.phpdoc
 */
// <- comment.block.documentation.phpdoc.php
//^ comment.block.documentation.phpdoc.php

/**
 * @api
//  ^ comment.block.documentation.phpdoc keyword
 * @author [name] <[<email address>]>
//  ^ comment.block.documentation.phpdoc keyword
 * @copyright [description]
//  ^ comment.block.documentation.phpdoc keyword
 * @deprecated [<version>] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @example [URI] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @filesource
//  ^ comment.block.documentation.phpdoc keyword
 * @global [type] [name | description]
//  ^ comment.block.documentation.phpdoc keyword
 * @ignore [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @internal [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @license [<url>] [name]
//  ^ comment.block.documentation.phpdoc keyword
 * @link [URI] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @method [return type] [name]([[type] [parameter]<, ...>]) [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @package [level 1]\[level 2]\[etc.]
//  ^ comment.block.documentation.phpdoc keyword
 * @param [type] $[name] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @property [type] $[name] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @property-read [type] $[name] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @property-write [type] $[name] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @return [type] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @see [URI | FQSEN] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @since [version> [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @source [start-line [<number-of-lines>]] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @throws [type] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @todo [description]
//  ^ comment.block.documentation.phpdoc keyword
 * @uses [FQSEN] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @var [type] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 * @version [<vector>] [<description>]
//  ^ comment.block.documentation.phpdoc keyword
 *
 * Inline
 * ------
 *
 * {@example [URI] [<description>]}
//   ^ comment.block.documentation.phpdoc keyword
 * {@inheritdoc}
//   ^ comment.block.documentation.phpdoc keyword
 * {@internal [<description>]}
//   ^ comment.block.documentation.phpdoc keyword
 * {@link [URI] [<description>]}
//   ^ comment.block.documentation.phpdoc keyword
 *
 * Deprecated
 * ----------
 *
 * @category [description]
//  ^ comment.block.documentation.phpdoc keyword
 * @subpackage [name]
//  ^ comment.block.documentation.phpdoc keyword
 */
