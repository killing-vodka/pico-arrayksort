<?php
/**
 * Pico ksort plugin.
 *
 * A small integration for the Twig Template Engine. This plugin directly brings
 * the ksort function from PHP into your tpl file. Sort an array by key, nothing
 * more.
 *
 * @author  Giovanni Forte <giovanni@teamvodka.eu>
 * @link    https://teamvodka.eu
 * @license https://opensource.org/licenses/MIT The MIT License
 * @version 0.1
 */
class PicoArrayKSort extends AbstractPicoPlugin
{
    const API_VERSION = 3;
    protected $enabled = true;
    protected $dependsOn = array();
     
    public function onTwigRegistered(Twig_Environment &$twig)
    {
        $twig->addFilter(new Twig_SimpleFilter('ksort', function($array) {
            return $this->ksort($array);
        }));
    }
      
    public function ksort($array)
    {
        ksort($array);        
        return $array;
    }
}
