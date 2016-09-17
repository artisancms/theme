<?php

namespace ArtisanCMS\Theme;

use View;

class Theme
{
    
    public function view($file, $data = [])
    {
        View::addNamespace("theme", cms('theme'));
        return view("theme::$file", $data);
    }
}
