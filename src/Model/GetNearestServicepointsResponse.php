<?php

namespace DHLClient\Model;

class getNearestServicepointsResponse
{

    /**
     * @var GetNearestServicepointsResponse $getNearestServicepointsResult
     */
    protected $getNearestServicepointsResult = null;

    /**
     * @param GetNearestServicepointsResponse $getNearestServicepointsResult
     */
    public function __construct($getNearestServicepointsResult)
    {
      $this->getNearestServicepointsResult = $getNearestServicepointsResult;
    }

    /**
     * @return GetNearestServicepointsResponse
     */
    public function getGetNearestServicepointsResult()
    {
      return $this->getNearestServicepointsResult;
    }

    /**
     * @param GetNearestServicepointsResponse $getNearestServicepointsResult
     * @return \DHLClient\Model\getNearestServicepointsResponse
     */
    public function setGetNearestServicepointsResult($getNearestServicepointsResult)
    {
      $this->getNearestServicepointsResult = $getNearestServicepointsResult;
      return $this;
    }

}
