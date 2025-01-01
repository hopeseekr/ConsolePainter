<?php declare(strict_types=1);

/**
 * This file is part of Console Painter, a PHP Experts, Inc., Project.
 *
 * Copyright © 2025 PHP Experts, Inc.
 * Author: Theodore R. Smith <theodore@phpexperts.pro>
 *   GPG Fingerprint: 4BF8 2613 1C34 87AC D28F  2AD8 EB24 A91D D612 5690
 *   https://www.phpexperts.pro/
 *   https://github.com/PHPExpertsInc/ConsolePainter
 *
 * This file is licensed under the MIT License.
 */

namespace PHPExperts\ConsolePainter;

class NullPainter implements ConsoleArtistGuild
{
    protected string $text = '';

    // --- Stylers --- //
    public function bold(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function bolder(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function dim(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function italics(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function underlined(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function blink(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function inverse(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function hidden(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    // --- Foregrounds --- //
    public function defaultColor(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function black(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function darkGray(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function blue(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function lightBlue(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function green(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function lightGreen(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function cyan(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function lightCyan(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function red(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function lightRed(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function purple(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function lightPurple(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function brown(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function yellow(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function lightGray(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function white(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    // --- Backgrounds --- //
    public function onDefaultColor(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onBlack(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onRed(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onGreen(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onYellow(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onBlue(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onPurple(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onCyan(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onLightGray(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onDarkGray(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onLightRed(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onLightGreen(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onLightYellow(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onLightBlue(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onLightPurple(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onLightCyan(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function onWhite(?string $text = null): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function text(string $text): self
    {
        $this->text .= $text ?? '';
        return $this;
    }

    public function __toString(): string
    {
        return $this->text;
    }
}
