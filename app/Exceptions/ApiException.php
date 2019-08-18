<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/18
 * Time: 23:30
 */

namespace App\Exceptions;

use Exception;
use RuntimeException;

class ApiException extends RuntimeException
{
    public function __construct(array $apiErrConst, Exception $previous = null)
    {
        $code = $apiErrConst[0];
        $message = $apiErrConst[1];
        parent::__construct($message, $code, $previous);
    }
}