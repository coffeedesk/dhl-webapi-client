<?php

namespace DHLClient;

use DHLClient\Model\ArrayOfItemtolabeldata;
use DHLClient\Model\ArrayOfItemtoprint;
use DHLClient\Model\ArrayOfShipmentfulldata;
use DHLClient\Model\ArrayOfString;

interface ClientInterface
{
    public function __construct($userName = null, $password = null, $wsdl = null);

    public function getVersion();

    public function createShipments(ArrayOfShipmentfulldata $shipments);

    public function bookCourier(
        $pickupDate,
        $pickupTimeFrom,
        $pickupTimeTo,
        $additionalInfo,
        $shipmentIdList,
        $shipmentOrderInfo,
        $courierWithLabel
    );

    public function deleteShipments(ArrayOfString $shipments);

    public function cancelCourierBooking(ArrayOfString $orders);

    public function getMyShipments($createdFrom, $createdTo, $offset);

    public function getMyShipmentsCount($createdFrom, $createdTo);

    public function getLabels(ArrayOfItemtoprint $items);

    public function getLabelsData(ArrayOfItemtolabeldata $items);

    public function getPnp($date, $type);

    public function getShipmentScan($shipmentId);

    public function getPostalCodeServices($postCode, $pickupDate);

    public function getReturnParams();

    public function getTrackAndTraceInfo($shipmentId);

    public function getNearestServicepoints($city, $postCode, $country, $radius);

    public function getInternationalParams();
}
