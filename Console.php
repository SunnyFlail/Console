<?php

namespace SunnyFlail\Console;

class Console
{

    private const EFFECT_SCHEMA = [
        "_" => "0",            // RESET 
        // EFFECTS
        "H_" => "1",           // BOLD TEXT
        "_H" => "21",          // END BOLD TEXT
        "D_" => "2",           // DIM TEXT
        "_D" => "22",          // END DIM TEXT
        "U_" => "4",           // UNDERSCORE TEXT
        "_U" => "24",          // UNDERSCORE TEXT
        "B_" => "5",           // BLINK
        "_B" => "25",          // END BLINK
        "R_" => "7",           // REVERSED TEXT
        "_R" => "27",          // END REVERSED TEXT
        "I_" => "8",           // INVISIBLE TEXT
        "_I" => "28",          // END INVISIBLE TEXT
        //Colors
        "BC" => "0;30",      // BLACK
        "D_GY" => "1;30",    // GREY
        "R" => "0;31",       // RED
        "L_R" => "1;31",     // LIGHT RED
        "GR" => "0;32",      // GREEN
        "L_GR" => "1;32",    // LIGHT GREEN
        "BR" => "0;33",      // BROWN
        "Y" => "0;33",       // YELLOW
        "BL" => "0;34",      // BLUE
        "L_BL" => "1;34",    // LIGHT BLUE
        "M" => "0;35",       // MAGENTA
        "P" => "2;35",       // PURPLE
        "L_M" => "1;35",     // LIGHT MAGENTA
        "L_P" => "1;35",     // LIGHT PURPLE
        "C" => "0;36",       // CYAN
        "L_C" => "1;36",     // LIGHT CYAN
        "L_GY" => "2;37",    // LIGHT GREY
        "BD_W" => "1;38",   // WHITE
        "L_W" => "1;38",    // LIGHT WHITE
        "W" => "0;38",      // WHITE
        "DEF" => "39",       // DEFAULT
        "GY" => "0;90",      // GREY
        "L_Y" => "1;93",     // LIGHT YELLOW
        "L_R_A" => "91",     // ALTERNATIVE LIGHT RED 
        "L_GR_A" => "92",    // ALTERNATIVE LIGHT GREEN 
        "L_Y_A" => "93",    // ALTERNATIVE LIGHT YELLOW 
        "L_BL_A" => "94",    // ALTERNATIVE LIGHT BLUE 
        "L_M_A" => "95",    // ALTERNATIVE LIGHT MAGENTA 
        "L_C_A" => "96",     // ALTERNATIVE LIGHT CYAN 
        "L_W_A" => "97",    // ALTERNATIVE LIGHT WHITE 
        // Bgs
        "B_BC" => "40",     // BLACK BACKGROUND 
        "B_R" => "41",      // RED BACKGROUND 
        "B_GR" => "42",     // GREEN BACKGROUND 
        "B_Y" => "43",     // YELLOW BACKGROUND 
        "B_BL" => "44",     // BLUE BACKGROUND 
        "B_M" => "45",     // MAGENTA BACKGROUND 
        "B_C" => "46",      // CYAN BACKGROUND 
        "B_L_GY" => "47",   // LIGHT GREY BACKGROUND 
        "B_DEF" => "49",    // DEFAULT BACKGROUND 
        "B_D_GY" => "100",   // GREY BACKGROUND 
        "B_L_R" => "101",     // LIGHT RED BACKGROUND 
        "B_L_GR" => "102",    // LIGHT GREEN BACKGROUND 
        "B_L_Y" => "103",    // LIGHT YELLOW BACKGROUND 
        "B_L_BL" => "104",    // LIGHT BLUE BACKGROUND 
        "B_L_M" => "105",    // LIGHT MAGENTA BACKGROUND 
        "B_L_C" => "106",     // LIGHT CYAN BACKGROUND 
        "B_W" => "107"       // WHITE BACKGROUND 
    ];

    /**
     * Applies effects to the text
     * 
     * For reference @see Console::EFFECT_SCHEMA 
     * 
     * @param string $string String to which effects will be applied
     * @return string
     */
    public static function apply(string $string): string
    {
        if (0 === ($count = preg_match_all("/\<(\w+)\>/", $string, $matches))) {
            return $string;
        }
        [$tags, $aliases] = $matches;

        $prefix = "\e[";
        $suffix = "m";

        foreach ($aliases as $id => $alias) {
            $alias = strtoupper($alias);
            $code = self::EFFECT_SCHEMA[$alias] ?? "";
            $code = $code !== "" ? $prefix . $code . $suffix : "";
            $string = str_ireplace($tags[$id], $code, $string);
        }

        return $string;
    }

}