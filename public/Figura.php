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

abstract class Figura
{
    /**
     * @var Punto
     */
    protected $_origen;

    /**
     * @param Punto $_origen
     */
    function __construct(Punto $_origen)
    {
        $this->_origen = $_origen;
    }

    /**
     * area
     *
     * Description
     *
     * @return mixed
     */
    abstract public function area();

    /**
     * perimetro
     *
     * Description
     *
     * @return mixed
     */
    abstract public function perimetro();

    /**
     * escalar
     *
     * Description
     *
     * @param int $dx
     *
     */
    abstract public function escalar($dx);

    /**
     * desplazar
     *
     * Description
     *
     * @param int $dx
     * @param int $dy
     */
    public function desplazar($dx, $dy) {
        $this->_origen->desplazar($dx, $dy);
    }

    /**
     * @return Punto
     */
    public function getOrigen()
    {
        return $this->_origen;
    }

    /**
     * @param Punto $origen
     */
    public function setOrigen($origen)
    {
        $this->_origen = $origen;
    }

    /**
     * toString
     *
     * Description
     *
     * @return string
     */
    public function __toString() {
        return $this->_origen->toString();
    }
}