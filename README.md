# Console
A simple abstraction over php cli text effects
# How to use
Just wrap the alias of wanted effect with XML style brackets (<>) and apply it with ```Console::apply```.
Aliases are case insensitive

eg.
```php
use SunnyFlail\Console\Console;
$string = "<r>This will be printed in red<_> while this will be in default color";
echo Console::apply($string);
```

# Effects and their aliases
## Text transformations
| Alias | Effect | Code  |
| -------- |:-----------:| ---:|
|  _  | Reset to default | "\e[0m" |
| H_ | Start Bold Text | "\e[1m" |
| _H | End Bold Text  |    "\e[21m" |
| D_ | Start Dimmed Text  |    "\e[2m" |
| _D | End Dimmed Text  |    "\e[22m" |
| U_ | Start Underscored Text  |    "\e[4m" |
| _U | End Underscored Text  |    "\e[24m" |
| B_ | Start Blinking Text  |    "\e[5m" |
| _B | End Blinking Text  |    "\e[25m" |
|R_| Start Reversed Text  |    "\e[7m" |
|_R| End Reversed Text  |    "\e[27m" |
|I_| Start Invisible Text  |    "\e[8m" |
|_I| End Invisible Text  |    "\e[28m" |
