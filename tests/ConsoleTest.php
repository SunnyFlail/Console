<?php

namespace SunnyFlail\Console\Tests;

require_once __DIR__."/../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use SunnyFlail\Console\Console;

final class ConsoleTest extends TestCase
{

    public function textProvider(): array
    {
        return [
            "Singular front color" => [
                "This is a <r>front<_> colored text test!",
                "This is a \033[0;31mfront\e[0m colored text test!",
            ],
            "Multiple effects at once" => [
                "This is a <r><b_c><h_>back<_> text test!",
                "This is a \033[0;31m\033[46m\033[1mback\e[0m text test!",
            ]
        ];
    }

    /**
     * @dataProvider textProvider
     */
    public function testColorising(string $input, string $expected)
    {
        $result = Console::apply($input);
        $this->assertEquals($expected, $result);
    }


}