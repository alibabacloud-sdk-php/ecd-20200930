<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CopyImageRequest extends Model
{
    /**
     * @description The description of the image copy. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example This is a test.
     *
     * @var string
     */
    public $destinationDescription;

    /**
     * @description The name of the image copy. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `acs:` or `aliyun`. The name cannot contain `http://` or `https://`. The name can contain letters, digits, periods (.), colons (:), underscores (\_), and hyphens (-).
     *
     * @example Office_Shanghai
     *
     * @var string
     */
    public $destinationImageName;

    /**
     * @description The destination region to which you want to copy the image.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @description The ID of the image that is copied to the destination region.
     *
     * @example m-gx2x1dhsmusr2****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'destinationDescription' => 'DestinationDescription',
        'destinationImageName'   => 'DestinationImageName',
        'destinationRegionId'    => 'DestinationRegionId',
        'imageId'                => 'ImageId',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationDescription) {
            $res['DestinationDescription'] = $this->destinationDescription;
        }
        if (null !== $this->destinationImageName) {
            $res['DestinationImageName'] = $this->destinationImageName;
        }
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationDescription'])) {
            $model->destinationDescription = $map['DestinationDescription'];
        }
        if (isset($map['DestinationImageName'])) {
            $model->destinationImageName = $map['DestinationImageName'];
        }
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
