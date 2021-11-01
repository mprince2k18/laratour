<?php

use Mprince\Laratour\Laratour;

function tour()
{
    return Laratour::paginate(15);
}

