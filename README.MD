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
| H_ | <b>Start Bold Text | "\e[1m" |
| _H | End Bold Text</b>  |    "\e[21m" |
| D_ | Start Dimmed Text |    "\e[2m" |
| _D | End Dimmed Text  |    "\e[22m" |
| U_ | <u>Start Underscored Text  |    "\e[4m" |
| _U | End Underscored Text  |    "\e[24m" |
| B_ | Start Blinking Text  |    "\e[5m" |
| _B | End Blinking Text  |    "\e[25m" |
|R_| Start Reversed Text  |    "\e[7m" |
|_R| End Reversed Text  |    "\e[27m" |
|I_| Start Invisible Text  |    "\e[8m" |
|_I| End Invisible Text  |    "\e[28m" |

## Foreground Colors
| Alias | Effect | Code  |
| -------- |:-----------:| ---:|
|BC|<span style="color: BLACK;">BLACK</span>|"\e[0;30m"|
|D_GY|<span style="color: GRAY;">GRAY</span>|"\e[1;30m"|
|R|RED|"\e[0;31m"|
|L_R|<span style="color: orangered;">LIGHT RED</span>|"\e[1;31m"|
|GR|<span style="color: GREEN;">GREEN</span>|"\e[0;32m"|
|L_GR|<span style="color: LIGHTGREEN;">LIGHT GREEN</span>|"\e[1;32m"|
|BR|<span style="color: BROWN;">BROWN</span>|"\e[0;33m"|
|Y|<span style="color: YELLOW;">YELLOW</span>|"\e[0;33m"|
|BL|<span style="color: BLUE;">BLUE</span>|"\e[0;34m"|
|L_BL|<span style="color: deepskyblue;">LIGHT BLUE</span>|"\e[1;34m"|
|M|<span style="color: MAGENTA;">MAGENTA</span>|"\e[0;35m"|
|P|<span style="color: PURPLE;">PURPLE</span>|"\e[2;35m"|
|L_M|<span style="color: plum;">LIGHT MAGENTA</span>|"\e[1;35m"|
|L_P|<span style="color: mediumpurple;">LIGHT PURPLE</span>|"\e[1;35m"|
|C|<span style="color: CYAN;">CYAN</span>|"\e[0;36m"|
|L_C|<span style="color: lightcyan;">LIGHT CYAN</span>|"\e[1;36m"|
|L_GY|<span style="color: LIGHTGRAY;">LIGHT GRAY</span>|"\e[2;37m"|
|BD_W|<span style="color: WHITE;">WHITE</span>|"\e[1;38m"|
|W|<span style="color: WHITE;">WHITE</span>|"\e[0;38m"|
|DEF|<span style="color: DEFAULT;">DEFAULT</span>|"\e[39m"|
|GY|<span style="color: GRAY;">GRAY</span>|"\e[0;90m"|
|L_Y|<span style="color: LIGHTYELLOW;">LIGHT YELLOW</span>|"\e[1;93m"|
|L_R_A|<span style="color: ALT LIGHT RED ;">ALT LIGHT RED </span>|"\e[91m"|
|L_GR_A|<span style="color: LIGHTGREEN ;">ALT LIGHT GREEN </span>|"\e[92m"|
|L_Y_A|<span style="color: LIGHTYELLOW ;">ALT LIGHT YELLOW </span>|"\e[93m"|
|L_BL_A|<span style="color: deepskyblue ;">ALT LIGHT BLUE </span>|"\e[94m"|
|L_M_A|<span style="color: plum ;">ALT LIGHT MAGENTA </span>|"\e[95m"|
|L_C_A|<span style="color: lightcyan ;">ALT LIGHT CYAN </span>|"\e[96m"|
|L_W_A|<span style="color: white ;">ALT WHITE </span>|"\e[97m"|
## Background Colors
| Alias | Effect | Code  |
| -------- |:-----------:| ---:|
|B_BC|<span style="background-color: BLACK;">BLACK BACKGROUND</span>|"\e[40m"|
|B_R|<span style="background-color: RED;">RED BACKGROUND</span>|"\e[41m"|
|B_GR|<span style="background-color: green;">GREEN BACKGROUND</span>|"\e[42m"|
|B_Y|<span style="background-color: YELLOW;">YELLOW BACKGROUND</span>|"\e[43m"|
|B_BL|<span style="background-color: BLUE;">BLUE BACKGROUND</span>|"\e[44m"|
|B_M|<span style="background-color: MAGENTA;">MAGENTA BACKGROUND</span>|"\e[45m"|
|B_C|<span style="background-color: CYAN;">CYAN BACKGROUND</span>|"\e[46m"|
|B_L_GY|<span style="background-color: silver;">LIGHT GRAY BACKGROUND</span>|"\e[47m"|
|B_DEF|<span style="background-color: transparent;">DEFAULT BACKGROUND</span>|"\e[49m"|
|B_D_GY|<span style="background-color: GRAY;">GRAY BACKGROUND</span>|"\e[100m"|
|B_L_R|<span style="background-color: orangered;">LIGHT RED BACKGROUND</span>|"\e[101m"|
|B_L_GR|<span style="background-color: LIGHTGREEN;">LIGHT GREEN BACKGROUND</span>|"\e[102m"|
|B_L_Y|<span style="background-color: lightyellow;">LIGHT YELLOW BACKGROUND</span>|"\e[103m"|
|B_L_BL|<span style="background-color: deepskyblue;">LIGHT BLUE BACKGROUND</span>|"\e[104m"|
|B_L_M|<span style="background-color: plum;">LIGHT MAGENTA BACKGROUND</span>|"\e[105m"|
|B_L_C|<span style="background-color: lightcyan;">LIGHT CYAN BACKGROUND</span>|"\e[106m"|
|B_W|<span style="background-color: WHITE;">WHITE BACKGROUND</span>|"\e[107m"|