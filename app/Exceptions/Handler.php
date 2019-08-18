<?php

namespace App\Exceptions;

use App\Common\Err\ApiErrDesc;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Http\Response\ResponseJson;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */

    use ResponseJson;

    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($exception instanceof ModelNotFoundException){
            return response()->json([
                'error' => 'Resource not found.',
            ], 404);
        }else if($exception instanceof ApiException){
            $code = $exception->getCode();
            $message = $exception->getMessage();
        }else{
            $code = $exception->getCode() ?: ApiErrDesc::ERR_UNKNOWN[0];
            $message = $exception->getMessage() ?: ApiErrDesc::ERR_UNKNOWN[1];
        }
        return $this->jsonData($code, $message);
//        return parent::render($request, $exception);
    }
}
