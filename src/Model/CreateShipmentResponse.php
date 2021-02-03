<?php

namespace DHLClient\Model;

class CreateShipmentResponse
{

    /**
     * @var \DHLClient\Model\Response\CreateShipmentResponse $createShipmentResult
     */
    protected $createShipmentResult = null;

    /**
     * @param \DHLClient\Model\Response\CreateShipmentResponse $createShipmentResult
     */
    public function __construct($createShipmentResult)
    {
      $this->createShipmentResult = $createShipmentResult;
    }

    /**
     * @return \DHLClient\Model\Response\CreateShipmentResponse
     */
    public function getCreateShipmentResult()
    {
      return $this->createShipmentResult;
    }

    /**
     * @param \DHLClient\Model\Response\CreateShipmentResponse $createShipmentResult
     * @return \DHLClient\Model\createShipmentResponse
     */
    public function setCreateShipmentResult($createShipmentResult)
    {
      $this->createShipmentResult = $createShipmentResult;
      return $this;
    }

}
