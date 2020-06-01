<?php

namespace App\Theme;

use Minicli\Output\Theme\DefaultTheme;
use Minicli\Output\CLIColors;

class BlueTheme extends DefaultTheme
{
    public function getThemeColors() : array
    {
        return [
            'default'     => [ CLIColors::$FG_BLUE ],
            'alt'         => [ CLIColors::$FG_BLACK, CLIColors::$BG_BLUE ],
            'info'        => [ CLIColors::$FG_WHITE],
            'info_alt'    => [ CLIColors::$FG_WHITE, CLIColors::$BG_BLUE ]
        ];
    }
}
