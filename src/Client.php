<?php

namespace DHLClient;

use DHLClient\Model\ArrayOfItemtolabeldata;
use DHLClient\Model\ArrayOfItemtoprint;
use DHLClient\Model\ArrayOfShipmentfulldata;
use DHLClient\Model\ArrayOfString;
use DHLClient\Model\AuthData;
use DHLClient\Model\bookCourier;
use DHLClient\Model\cancelCourierBooking;
use DHLClient\Model\createShipments;
use DHLClient\Model\deleteShipments;
use DHLClient\Model\DHL24WebapiService;
use DHLClient\Model\getInternationalParams;
use DHLClient\Model\getLabels;
use DHLClient\Model\getLabelsData;
use DHLClient\Model\getMyShipments;
use DHLClient\Model\getMyShipmentsCount;
use DHLClient\Model\getNearestServicepoints;
use DHLClient\Model\GetNearestServicepointsRequest;
use DHLClient\Model\getPnp;
use DHLClient\Model\getPostalCodeServices;
use DHLClient\Model\getReturnParams;
use DHLClient\Model\getShipmentScan;
use DHLClient\Model\getTrackAndTraceInfo;
use DHLClient\Model\getVersion;
use DHLClient\Model\PnpRequest;
use DHLClient\Model\ShipmentFullData;

class Client implements ClientInterface
{
    const WSDL_URL = 'https://dhl24.com.pl/webapi2';

    /** @var string|null */
    private $username;

    /** @var string|null */
    private $password;

    /** @var AuthData|null */
    private $authData = null;

    /** @var DHL24WebapiService */
    private $service;

    public function __construct($username = null, $password = null, $wsdl = null)
    {
        if (!$wsdl) {
            $wsdl = self::WSDL_URL;
        }

        $this->username = $username;
        $this->password = $password;

        $this->authData = new AuthData();
        $this->authData->setUsername($username);
        $this->authData->setPassword($password);

        $this->service = new DHL24WebapiService([], $wsdl);
    }

    public function getVersion()
    {
        return $this->service->getVersion(new getVersion());
    }

    /**
     * @param ArrayOfShipmentfulldata $shipments
     * @return Model\createShipmentsResponse
     */
    public function createShipments(ArrayOfShipmentfulldata $shipments)
    {
        $createShipments = new createShipments($this->authData, $shipments);

        return $this->service->createShipments($createShipments);
    }

    public function bookCourier(
        $pickupDate,
        $pickupTimeFrom,
        $pickupTimeTo,
        $additionalInfo,
        $shipmentIdList,
        $shipmentOrderInfo,
        $courierWithLabel
    ) {
        $bookCourier = new bookCourier(
            $this->authData,
            $pickupDate,
            $pickupTimeFrom,
            $pickupTimeTo,
            $additionalInfo,
            $shipmentIdList,
            $shipmentOrderInfo,
            $courierWithLabel
        );

        return $this->service->bookCourier($bookCourier);
    }

    public function deleteShipments(ArrayOfString $shipments)
    {
        $deleteShipments = new deleteShipments($this->authData, $shipments);

        return $this->service->deleteShipments($deleteShipments);
    }

    public function cancelCourierBooking(ArrayOfString $orders)
    {
        $cancelCourierBooking = new cancelCourierBooking($this->authData, $orders);

        return $this->service->cancelCourierBooking($cancelCourierBooking);
    }

    public function getMyShipments($createdFrom, $createdTo, $offset)
    {
        $getMyShipments = new getMyShipments($this->authData, $createdFrom, $createdTo, $offset);

        return $this->service->getMyShipments($getMyShipments);
    }

    public function getMyShipmentsCount($createdFrom, $createdTo)
    {
        $getMyShipmentsCount = new getMyShipmentsCount($this->authData, $createdFrom, $createdTo);

        return $this->service->getMyShipmentsCount($getMyShipmentsCount);
    }

    public function getLabels(ArrayOfItemtoprint $items)
    {
        $labels = new getLabels($this->authData, $items);

        return $this->service->getLabels($labels);
    }

    public function getLabelsData(ArrayOfItemtolabeldata $items)
    {
        $labelsData = new getLabelsData($this->authData, $items);

        return $this->service->getLabelsData($labelsData);
    }

    public function getPnp($date, $type)
    {
        $pnpRequest = new PnpRequest();
        $pnpRequest->setAuthData($this->authData);
        $pnpRequest->setDate($date);
        $pnpRequest->setType($type);

        $method = new getPnp($pnpRequest);

        return $this->service->getPnp($method);
    }

    public function getShipmentScan($shipmentId)
    {
        $method = new getShipmentScan($this->authData, $shipmentId);

        return $this->service->getShipmentScan($method);
    }

    public function getPostalCodeServices($postCode, $pickupDate)
    {
        $method = new getPostalCodeServices($this->authData, $postCode, $pickupDate);

        return $this->service->getPostalCodeServices($method);
    }

    public function getReturnParams()
    {
        $method = new getReturnParams($this->authData);

        return $this->service->getReturnParams($method);
    }

    public function getTrackAndTraceInfo($shipmentId)
    {
        $tracking = new getTrackAndTraceInfo($this->authData, $shipmentId);

        return $this->service->getTrackAndTraceInfo($tracking);
    }

    public function getNearestServicepoints($city, $postCode, $country, $radius)
    {
        $request = new GetNearestServicepointsRequest();
        $request->setCity($city);
        $request->setPostcode($postCode);
        $request->setCountry($country);
        $request->setRadius($radius);

        $method = new getNearestServicepoints($this->authData, $request);

        return $this->service->getNearestServicepoints($method);
    }

    public function getInternationalParams()
    {
        $method = new getInternationalParams($this->authData);

        return $this->service->getInternationalParams($method);
    }
}
