<?php

namespace DHLClient\Model;

class deleteShipmentResponse
{

    /**
     * @var \DHLClient\Model\Response\DeleteShipmentResponse $deleteShipmentResult
     */
    protected $deleteShipmentResult = null;

    /**
     * @param \DHLClient\Model\Response\DeleteShipmentResponse $deleteShipmentResult
     */
    public function __construct($deleteShipmentResult)
    {
      $this->deleteShipmentResult = $deleteShipmentResult;
    }

    /**
     * @return \DHLClient\Model\Response\DeleteShipmentResponse
     */
    public function getDeleteShipmentResult()
    {
      return $this->deleteShipmentResult;
    }

    /**
     * @param \DHLClient\Model\Response\DeleteShipmentResponse $deleteShipmentResult
     * @return \DHLClient\Model\deleteShipmentResponse
     */
    public function setDeleteShipmentResult($deleteShipmentResult)
    {
      $this->deleteShipmentResult = $deleteShipmentResult;
      return $this;
    }

}
