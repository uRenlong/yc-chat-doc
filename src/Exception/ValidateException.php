<?php
namespace YcOpen\ChatDoc\Exception;
use Exception;
use YcOpen\ChatDoc\Response\ResponseCode;

class ValidateException extends Exception
{
    protected $data;
    public function __construct($data,$code=ResponseCode::FAIL)
    {
        $data=json_decode($data);
        parent::__construct($data->message, $code);
    }
    /**
     * 获取字段名
     * @return string
     */
    public function getField()
    {
        return $this->data->field;
    }
}