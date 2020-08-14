<?php

namespace Spatie\PhpUnitWatcher\Screens;

use Spatie\PhpUnitWatcher\Terminal;

abstract class Screen
{
    /** @var \Spatie\PhpUnitWatcher\Terminal */
    protected $terminal;

    public function useTerminal(Terminal $terminal)
    {
        $this->terminal = $terminal;

        return $this;
    }

    public function draw()
    {
        return $this;
    }

    public function registerListeners()
    {
        return $this;
    }

    public function clear()
    {
        passthru("clear && echo -en '\e[3J'");

        return $this;
    }

    public function removeAllListeners()
    {
        $this->terminal->removeAllListeners();

        return $this;
    }

    public function clearPrompt()
    {
        $this->terminal->clearPrompt();
        passthru("clear && echo -en '\e[3J'");

        return $this;
    }
}
