import sublime

def plugin_loaded():
    disable_native_php_package()

def disable_native_php_package():
    settings = sublime.load_settings('Preferences.sublime-settings')
    ignored_packages = settings.get('ignored_packages', [])

    if 'PHP' not in ignored_packages:

        # fixes #45 "error loading syntax" on install
        for window in sublime.windows():
            for view in window.views():
                view_settings = view.settings()
                syntax = view_settings.get('syntax')

                if syntax.find('Packages/PHP/') != -1:
                    if int(sublime.version()) >= 3092:
                        view_settings.set('syntax', 'Packages/php-grammar/PHP.sublime-syntax')
                    else:
                        view_settings.set('syntax', 'Packages/php-grammar/PHP.tmLanguage')

                if syntax.find('Packages/HTML/') != -1:
                    file_name = view.file_name()
                    if file_name:
                        if file_name.endswith('.phtml'):
                            if int(sublime.version()) >= 3092:
                                view_settings.set('syntax', 'Packages/php-grammar/PHP.sublime-syntax')
                            else:
                                view_settings.set('syntax', 'Packages/php-grammar/PHP.tmLanguage')
                        else:
                            if int(sublime.version()) >= 3092:
                                view_settings.set('syntax', 'Packages/HTML/HTML.sublime-syntax')
                            else:
                                # Setting the HTML syntax causes "error loading PHP syntax" errors
                                # in builds less than 3092.
                                view_settings.set('syntax', 'Packages/Text/Plain text.tmLanguage')

        ignored_packages.append('PHP')
        ignored_packages.sort()
        settings.set('ignored_packages', ignored_packages)
        sublime.save_settings('Preferences.sublime-settings')
