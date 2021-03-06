<?php

namespace Namshi\JOSE\Signer;

use Namshi\JOSE\Signer\SignerInterface;

/**
 * Class responsible to sign inputs with the RSA algorithm, after hashing it.
 */
class RS256 extends RSA implements SignerInterface
{
    protected $hashingAlgorithm = "SHA256";
}
