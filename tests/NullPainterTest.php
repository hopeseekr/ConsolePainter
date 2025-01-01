<?php declare(strict_types=1);

/**
 * This file is part of Console Painter, a PHP Experts, Inc., Project.
 *
 * Copyright © 2021-2025 PHP Experts, Inc.
 * Author: Theodore R. Smith <theodore@phpexperts.pro>
 *   GPG Fingerprint: 4BF8 2613 1C34 87AC D28F  2AD8 EB24 A91D D612 5690
 *   https://www.phpexperts.pro/
 *   https://github.com/PHPExpertsInc/ConsolePainter
 *
 * This file is licensed under the MIT License.
 */

namespace PHPExperts\ConsolePainter\Tests;

use PHPExperts\Combinatorics\CombinationsGenerator;
use PHPExperts\ConsolePainter\ConsoleArtistGuild;
use PHPExperts\ConsolePainter\ConsolePainter;
use PHPExperts\ConsolePainter\NullPainter;

/** @testdox ConsolePainter: NullPainter */
class NullPainterTest extends TestCase
{
    private NullPainter $p;

    public function setUp(): void
    {
        $this->p = new NullPainter();
        //$this->p->e = "\e";

        parent::setUp();
    }

    public function testWillNotColorizeOrStylizeAnyText()
    {
        $expected = "No stylizations or color";

        $methods = [
            'bold', 'bolder', 'dim', 'italics', 'underlined', 'blink', 'inverse', 'hidden',
            'defaultColor', 'black', 'darkGray', 'blue', 'lightBlue', 'green', 'lightGreen',
            'cyan', 'lightCyan', 'red', 'lightRed', 'purple', 'lightPurple', 'brown',
            'yellow', 'lightGray', 'white',
            'onDefaultColor', 'onBlack', 'onRed', 'onGreen', 'onYellow', 'onBlue',
            'onPurple', 'onCyan', 'onLightGray', 'onDarkGray', 'onLightRed',
            'onLightGreen', 'onLightYellow', 'onLightBlue', 'onLightPurple',
            'onLightCyan', 'onWhite', 'text'
        ];

        foreach ($methods as $method) {
            $output = (string) (new NullPainter())->$method($expected);
            self::assertSame($expected, $output);
        }
    }

    public function testAllCombinationsOfStylizationsWork()
    {
        if (self::isDebugOn()) {
            ob_end_flush();
        }

        $stylizations = [
            'bold'       => ['1', '21'],
            'italics'    => ['3', '23'],
            'underlined' => ['4', '24'],
            'dim'        => ['2', '22'],
            'inverse'    => ['7', '27'],
        ];

        $allPossibleCombinations = [];
        $generator = new CombinationsGenerator();

        foreach ($generator->generate(array_keys($stylizations)) as $combination) {
            $allPossibleCombinations[] = $combination;
        }

        // sort them by the number of combos.
        array_multisort(array_map('count', $allPossibleCombinations), SORT_ASC, $allPossibleCombinations);

        $p = new ConsolePainter();
        // Uncomment this line to actually see what the color codes are.
        //$p->e = "\e";

        foreach ($allPossibleCombinations as $index => $styles) {
            $code = '$p';
            $applied = [];
            foreach ($styles as $style) {
                $code .= "->$style()";
                $applied[$style] = $stylizations[$style];
            }

            $code .= ';';

            $expectedOn = implode(';', array_column($applied, 0));
            $expectedOff = implode(';', array_column($applied, 1));

            $text = implode(' + ', array_keys($applied));
            $code = str_replace('();', "('$text');", $code);

            if (self::isDebugOn()) {
                dump($code);
            }

            $paintedText = (string) eval("return $code");
            self::assertStringStartsWith("{$p->e}[{$expectedOn}m", $paintedText, 'An unexpected style was set.');
            self::assertStringEndsWith("{$p->e}[{$expectedOff}m{$p->e}[0m", $paintedText, 'An unexpected undo style was set.');

            if (self::isDebugOn()) {
                echo $paintedText . "\n";

                if (($index + 1) % 25 === 0) {
                    echo $p->yellow('Press ')->bolder()->red('ENTER')->yellow(' to continue...') . "\n";
                    $fh = fopen('php://stdin', 'r');
                    fgets($fh);
                }
            }
        }
    }
}
