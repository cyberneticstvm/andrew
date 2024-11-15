<?php

use Illuminate\Support\Str;

function isMobileDevice($request)
{
    if (Str::contains($request->userAgent(), ['iPhone', 'Android', 'Linux', 'Macintosh'])) {
        return true;
    }
    return false;
}
