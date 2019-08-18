<?php

namespace App\Common\Auth;

use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\ValidationData;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/18
 * Time: 15:08
 */
class JwtAuth
{
    private static $instance = null;
    private $token;
    private $iss = 'test.test';
    private $aud = 'immoc_server_app';
    private $uid;
    private $secret = '*#06#zxcvbnm';
    private $decodeToken;

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function getInstance()
    {
        if( is_null(self::$instance) )
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function encode()
    {
        $this->token = (new Builder())->withHeader('alg', 'HS256')
            ->issuedBy($this->iss)
            ->permittedFor($this->aud)
            ->issuedAt(time())
            ->expiresAt(time() + 3600)
            ->withClaim('uid', $this->uid)
            ->getToken(new Sha256(), new Key($this->secret));
        return $this;
    }

    public function getToken()
    {
        return (string)$this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function decode()
    {
        if( !$this->decodeToken ) {
            $this->decodeToken = (new Parser())->parse((string)$this->token);
            $this->uid = $this->decodeToken->getClaim('uid');
        }
        return $this->decodeToken;
    }

    public function validate()
    {
        $data = new ValidationData();
        $data->setIssuer($this->iss);
        $data->setAudience($this->aud);
        return $this->decode()->validate($data);
    }

    public function verify()
    {
        $result = $this->decode()->verify(new Sha256(), $this->secret);
        return $result;
    }
}