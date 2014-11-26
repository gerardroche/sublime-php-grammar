CHANGELOG
=========

0.2.0-dev (next-version)
------------------------

- :racehorse: Make support regexes atomic.
- Update some support regexes to PHP 5.5.9 for builtin classes, constants, and
  functions.

  Updated using reflection whereas the Textmate php bundle uses the
  documentation to extract support information to build regexes.

  See https://github.com/textmate/php.tmbundle/blob/d24593d75c3c5f01b4b0705a9e6db132c0cfd55b/Support/generate/generate.php

  So, not all support regexes could be updated using relfection, because the
  reflection extension names don't match how they are documented.

  For example, all the string functions are in the relfection extension named
  "standard" which includes other functions, whereas in the docs all the string
  functions are group named the "string" extension.

- Add macro for newline on enter between array parens:

  Example: Press enter where the cursor is |

      $arr = array(|)

  Old behaviour:

      $arr = array(
      |)

  New:

      $arr = array(
          |
      )

- Indent functions in symbols list with two spaces
- :bugfix: Herdoc and Nowdoc learned to preserve indentation
- :bugfix: Multiline arrays now indent properly
- :bugfix: `{{control_structure}} (expr) :` without wrapped php tags should
  increase indentation not just indent the next line.
- :bugfix: `<?php {{control_structure}} (expr) : ?>` should increase indentation
  not just indent the next line.
- :bugfix: for (expr) { ... } should not increase indentation
- :bugfix: `declare (expr) :` should increase indentation
- Add indentation test suite

0.1.0
-----

- Initial import of PHP language grammar from Sublime Text 3 build 3065
