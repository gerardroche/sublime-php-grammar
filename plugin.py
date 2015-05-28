import sublime

def plugin_loaded():
    # Native package causes some conflicts.
    # Thanks https://github.com/SublimeText-Markdown/MarkdownEditing
    disable_native_php_package()

def disable_native_php_package():
    settings = sublime.load_settings('Preferences.sublime-settings')
    ignored_packages = settings.get('ignored_packages', [])

    if 'PHP' not in ignored_packages:
        ignored_packages.append('PHP')
        ignored_packages.sort()
        settings.set('ignored_packages', ignored_packages)
        sublime.save_settings('Preferences.sublime-settings')
