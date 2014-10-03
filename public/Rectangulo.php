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
require_once 'Cuadrado.php';

class Rectangulo extends Cuadrado
{
    /**
     * @var int
     */
    private $_alto;

    /**
     * @param Punto $_origen
     * @param int   $_ancho
     * @param int   $_alto
     */
    public function __construct(Punto $_origen, $_ancho, $_alto)
    {
        parent::__construct($_origen, $_ancho);
        $this->_alto = $_alto;
    }

    
} 