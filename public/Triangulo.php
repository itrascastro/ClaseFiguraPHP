<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace figura;

require_once 'Punto.php';
require_once 'Figura.php';

class Triangulo extends Figura
{
    /**
     * @var int
     */
    private $_base;

    /**
     * @var int
     */
    private $_altura;

    /**
     * @param int $_altura
     * @param int $_base
     * @param Punto $_origen
     */
    function __construct($_altura, $_base, Punto $_origen)
    {
        parent::__construct($_origen);
        $this->_altura  = $_altura;
        $this->_base    = $_base;
    }

    /**
     * @return int
     */
    public function getAltura()
    {
        return $this->_altura;
    }

    /**
     * @param int $altura
     */
    public function setAltura($altura)
    {
        $this->_altura = $altura;
    }

    /**
     * @return int
     */
    public function getBase()
    {
        return $this->_base;
    }

    /**
     * @param int $base
     */
    public function setBase($base)
    {
        $this->_base = $base;
    }

    public function toString() {
        return 'Triangulo[' . $this->_origen->toString() . ', ' . $this->_base . ', ' . $this->_altura . ']';
    }

}