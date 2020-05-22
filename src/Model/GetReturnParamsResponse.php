<?php

namespace DHLClient\Model;

class getReturnParamsResponse
{

    /**
     * @var GetReturnParamsResponse $getReturnParamsResult
     */
    protected $getReturnParamsResult = null;

    /**
     * @param GetReturnParamsResponse $getReturnParamsResult
     */
    public function __construct($getReturnParamsResult)
    {
      $this->getReturnParamsResult = $getReturnParamsResult;
    }

    /**
     * @return GetReturnParamsResponse
     */
    public function getGetReturnParamsResult()
    {
      return $this->getReturnParamsResult;
    }

    /**
     * @param GetReturnParamsResponse $getReturnParamsResult
     * @return \DHLClient\Model\getReturnParamsResponse
     */
    public function setGetReturnParamsResult($getReturnParamsResult)
    {
      $this->getReturnParamsResult = $getReturnParamsResult;
      return $this;
    }

}
