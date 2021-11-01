<?php

use Mprince\Laratour\Laratour;

// tour
function tour()
{
    return Laratour::paginate(15);
}
