Sublime PHP Grammar
===================

Installation
------------

1. Disable the PHP package bundled with Sublime Text

   - Open the User Settings:
   - Add `PHP` to the list of ignored packages in the User Settings:

     `Preferences > Settings - User`

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

   - [PHP Completions](https://github.com/gerardroche/sublime-phpck.git) - PHP ~5.6
   - [PHP Snippets](https://github.com/gerardroche/sublime-php-snippets.git) - PHP ~5.6
   - [PHPUnit Completions](https://github.com/gerardroche/sublime-phpunitck.git) - ~4.2 (includes DbUnit ~1.3)

Contribute
----------

Please refer to [CONTRIBUTING.md](CONTRIBUTING.md) for information on how to
contribute to Sublime PHP Grammar and its related projects.
