<?php

namespace App\Theme;

use Minicli\Output\CLITheme;
use Minicli\Output\CLIColors;

class BlueTheme extends CLITheme
{
    public function getDefaultColors()
    {
        $theme = [
            'default'     => [ CLIColors::$FG_BLUE ],
            'alt'         => [ CLIColors::$FG_BLACK, CLIColors::$BG_BLUE ],
            'info'        => [ CLIColors::$FG_WHITE],
            'info_alt'    => [ CLIColors::$FG_WHITE, CLIColors::$BG_BLUE ]
        ];

        return array_merge(parent::getDefaultColors(), $theme); // Any styles not defined here, will use the default styles.
    }
}
