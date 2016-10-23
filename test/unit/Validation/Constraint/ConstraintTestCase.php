<?php
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Lcobucci\JWT\Validation\Constraint;

use Lcobucci\JWT\Storage\DataSet;
use Lcobucci\JWT\Storage\Signature;
use Lcobucci\JWT\Storage\Token;
use Lcobucci\JWT\Token as TokenInterface;

abstract class ConstraintTestCase extends \PHPUnit_Framework_TestCase
{
    protected function buildToken(
        array $claims = [],
        array $headers = [],
        Signature $signature = null
    ): TokenInterface {
        return new Token(
            new DataSet($headers, ''),
            new DataSet($claims, ''),
            $signature
        );
    }
}
