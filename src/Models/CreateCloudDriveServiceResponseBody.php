<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody\conflictCdsAndOrder;

class CreateCloudDriveServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $cdsName;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var conflictCdsAndOrder
     */
    public $conflictCdsAndOrder;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $maxSize;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cdsId' => 'CdsId',
        'cdsName' => 'CdsName',
        'cenId' => 'CenId',
        'conflictCdsAndOrder' => 'ConflictCdsAndOrder',
        'domainName' => 'DomainName',
        'errorCode' => 'ErrorCode',
        'maxSize' => 'MaxSize',
        'officeSiteType' => 'OfficeSiteType',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->conflictCdsAndOrder) {
            $this->conflictCdsAndOrder->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->cdsName) {
            $res['CdsName'] = $this->cdsName;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->conflictCdsAndOrder) {
            $res['ConflictCdsAndOrder'] = null !== $this->conflictCdsAndOrder ? $this->conflictCdsAndOrder->toArray($noStream) : $this->conflictCdsAndOrder;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }

        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['CdsName'])) {
            $model->cdsName = $map['CdsName'];
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['ConflictCdsAndOrder'])) {
            $model->conflictCdsAndOrder = conflictCdsAndOrder::fromMap($map['ConflictCdsAndOrder']);
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }

        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
