<?php

namespace Guzzlefry\Twig;

use \Twig_Extension;

/**
 * Class AgeExtension
 * @package Guzzlefry\Twig
 */
class AgeExtension extends Twig_Extension
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'guzzlefry\age';
    }
}
