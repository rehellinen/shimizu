<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/10/17
 * Time: 20:04
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\exception;


use think\Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {
        if ($e instanceof BaseException) {
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        }else{
            if(config('app_debug')){
                return parent::render($e);
            }else{
                $this->code = 500;
                $this->msg = '服务器内部错误';
                $this->errorCode = 99999;
                $this->recordErrorLog($e);
            }
        }
        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $request = $request->url()
        ];
        return json($result,$this->code);
    }
    private function recordErrorLog(Exception $e){
        Log::init([
            'type' => 'file',
            'path' => LOG_PATH,
            'level' =>['error']
        ]);
        Log::record($e->getMessage(),'error');
    }


}