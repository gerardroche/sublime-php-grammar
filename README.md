Sublime PHP Grammar
===================

Installation
------------

1. Disable the PHP package bundled with Sublime Text

   - Add `PHP` to the list of ignored packages in the User Settings.

     Go to `Preferences > Settings - User` and add the following:

     ```json
     "ignored_packages":
     [
       "PHP"
     ]
     ```

2. Clone Sublime PHP Grammar into the Sublime Text packages directory:

   For example on Ubuntu:

   ```sh
   cd ~/.config/sublime-text-3/Packages
   git clone https://github.com/gerardroche/sublime-php-grammar.git
   ```

3. Completions and snippets are not included in the Sublime PHP Grammar package.
   See the list of PHP packages below.

Other PHP packages
------------------

* [PHP Grammar](https://github.com/gerardroche/sublime-php-grammar)
* [PHP Completions](https://github.com/gerardroche/sublime-phpck)
* [PHP Snippets](https://github.com/gerardroche/sublime-php-snippets)
* [PHPUnit Completions](https://github.com/gerardroche/sublime-phpunitck)
* [PHPUnit Snippets](https://github.com/gerardroche/sublime-phpunit-snippets)

Contribute
----------

Please refer to [CONTRIBUTING.md](CONTRIBUTING.md) for information on how to
contribute to Sublime PHP Grammar and its related projects.
