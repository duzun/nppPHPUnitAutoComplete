# Install

1. Close Notepad++
2. Open `%APPDATA%\Notepad++\plugins\APIs\` or `%ProgramFiles%\Notepad++\plugins\APIs\`,
depending on where your Notepad++ configuration files are located.
3. Rename `php.xml` from `.\APIs` folder to `php.xml.bak` (or something similar).
4. Copy [`php.xml`](//github.com/duzun/nppPHPUnitAutoComplete/blob/master/dist/php.xml) file to `.\APIs\php.xml` instead of the old one.
5. Open Notepad++ go to `Settings` -> `Preferences` -> `Auto-Completion` 
and check 'Enable auto-completion on each input' with 'Function completition' option
and/or 'Function parameters hint on input'.

## Note

`php.xml` file of this repo is a combination of `php.xml` from Notepad++ v6.7 with [`npp_phpunit.xml`](//github.com/duzun/nppPHPUnitAutoComplete/blob/master/npp_phpunit.xml).
