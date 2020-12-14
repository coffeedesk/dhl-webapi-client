<?php

namespace DHLClient;

use DHLClient\Model\ArrayOfItemtolabeldata;
use DHLClient\Model\ArrayOfItemtoprint;
use DHLClient\Model\ArrayOfShipmentfulldata;
use DHLClient\Model\ArrayOfString;
use DHLClient\Model\CreateShipmentRequest;
use DHLClient\Model\DeleteShipmentRequest;
use DHLClient\Model\ShipmentOrderInfo;

interface ClientInterface
{
    public function __construct($userName = null, $password = null, $wsdl = null);

    /**
     * @return Model\getVersionResponse
     */
    public function getVersion();

    /**
     * @param CreateShipmentRequest $shipmentRequest
     * @return Model\createShipmentResponse
     */
    public function createShipment(CreateShipmentRequest $shipmentRequest);

    /**
     * @param ArrayOfShipmentfulldata $shipments
     * @return Model\createShipmentsResponse
     */
    public function createShipments(ArrayOfShipmentfulldata $shipments);

    /**
     * @param string $pickupDate
     * @param string $pickupTimeFrom
     * @param string $pickupTimeTo
     * @param string $additionalInfo
     * @param ArrayOfString $shipmentIdList
     * @param ShipmentOrderInfo $shipmentOrderInfo
     * @param boolean $courierWithLabel
     * @return Model\bookCourierResponse
     */
    public function bookCourier(
        $pickupDate,
        $pickupTimeFrom,
        $pickupTimeTo,
        $additionalInfo,
        $shipmentIdList,
        $shipmentOrderInfo,
        $courierWithLabel
    );

    /**
     * @param DeleteShipmentRequest $shipmentRequest
     * @return Model\deleteShipmentResponse
     */
    public function deleteShipment(DeleteShipmentRequest $shipmentRequest);

    /**
     * @param ArrayOfString $shipments
     * @return Model\deleteShipmentsResponse
     */
    public function deleteShipments(ArrayOfString $shipments);

    /**
     * @param ArrayOfString $orders
     * @return Model\cancelCourierBookingResponse
     */
    public function cancelCourierBooking(ArrayOfString $orders);

    /**
     * @param string $createdFrom
     * @param string $createdTo
     * @param int $offset
     * @return Model\getMyShipmentsResponse
     */
    public function getMyShipments($createdFrom, $createdTo, $offset);

    /**
     * @param string $createdFrom
     * @param string $createdTo
     * @return Model\getMyShipmentsCountResponse
     */
    public function getMyShipmentsCount($createdFrom, $createdTo);

    /**
     * @param ArrayOfItemtoprint $items
     * @return Model\getLabelsResponse
     */
    public function getLabels(ArrayOfItemtoprint $items);

    /**
     * @param ArrayOfItemtolabeldata $items
     * @return Model\getLabelsDataResponse
     */
    public function getLabelsData(ArrayOfItemtolabeldata $items);

    /**
     * @param string $date
     * @param string $type
     * @return Model\getPnpResponse|mixed
     */
    public function getPnp($date, $type);

    /**
     * @param string $shipmentId
     * @return Model\getShipmentScanResponse
     */
    public function getShipmentScan($shipmentId);

    /**
     * @param string $postCode
     * @param string $pickupDate
     * @return Model\getPostalCodeServicesResponse
     */
    public function getPostalCodeServices($postCode, $pickupDate);

    /**
     * @return Model\getReturnParamsResponse
     */
    public function getReturnParams();

    /**
     * @param string $shipmentId
     * @return Model\getTrackAndTraceInfoResponse
     */
    public function getTrackAndTraceInfo($shipmentId);

    /**
     * @param string $city
     * @param string $postCode
     * @param string $country
     * @param int $radius
     * @return Model\getNearestServicepointsResponse
     */
    public function getNearestServicepoints($city, $postCode, $country, $radius);

    /**
     * @return Model\getInternationalParamsResponse
     */
    public function getInternationalParams();
}
