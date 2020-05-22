<?php

namespace DHLClient\Model;

class getInternationalParamsResponse
{

    /**
     * @var GetInternationalParamsResponse $getInternationalParamsResult
     */
    protected $getInternationalParamsResult = null;

    /**
     * @param GetInternationalParamsResponse $getInternationalParamsResult
     */
    public function __construct($getInternationalParamsResult)
    {
      $this->getInternationalParamsResult = $getInternationalParamsResult;
    }

    /**
     * @return GetInternationalParamsResponse
     */
    public function getGetInternationalParamsResult()
    {
      return $this->getInternationalParamsResult;
    }

    /**
     * @param GetInternationalParamsResponse $getInternationalParamsResult
     * @return \DHLClient\Model\getInternationalParamsResponse
     */
    public function setGetInternationalParamsResult($getInternationalParamsResult)
    {
      $this->getInternationalParamsResult = $getInternationalParamsResult;
      return $this;
    }

}
