<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}

//Kernel je neki dio programa koji se pokrece kada se pokrece aplikacija i sadrzi instrukcije za postavljanje
// projekata