<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagesRequest extends Model
{
    /**
     * @description The cloud desktop type. You can call the [DescribeBundles](~~188884~~) operation to query the available cloud desktop types.
     *
     * @example ecd.graphics.xlarge
     *
     * @var string
     */
    public $desktopInstanceType;

    /**
     * @description Specifies whether the image is a GPU-accelerated image.
     *
     * @example false
     *
     * @var bool
     */
    public $gpuCategory;

    /**
     * @description The version of the GPU driver.
     *
     * @example 417.22
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The IDs of the images. You can specify one or more image IDs.
     *
     * @example m-gx2x1dhsmusr2****
     *
     * @var string[]
     */
    public $imageId;

    /**
     * @description The state of the image.
     *
     * @example Available
     *
     * @var string
     */
    public $imageStatus;

    /**
     * @description The type of the image.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The language of the OS.
     *
     * @example en-US
     *
     * @var string
     */
    public $languageType;

    /**
     * @description The maximum number of entries to return on each page.
     *
     *   Maximum value: 100.
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. If you do not specify this parameter, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The type of the OS. Default value: `null`.
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The type of the protocol.
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The session type.
     *
     * @example SINGLE_SESSION
     *
     * @var string
     */
    public $sessionType;
    protected $_name = [
        'desktopInstanceType' => 'DesktopInstanceType',
        'gpuCategory'         => 'GpuCategory',
        'gpuDriverVersion'    => 'GpuDriverVersion',
        'imageId'             => 'ImageId',
        'imageStatus'         => 'ImageStatus',
        'imageType'           => 'ImageType',
        'languageType'        => 'LanguageType',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'osType'              => 'OsType',
        'protocolType'        => 'ProtocolType',
        'regionId'            => 'RegionId',
        'sessionType'         => 'SessionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopInstanceType) {
            $res['DesktopInstanceType'] = $this->desktopInstanceType;
        }
        if (null !== $this->gpuCategory) {
            $res['GpuCategory'] = $this->gpuCategory;
        }
        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageStatus) {
            $res['ImageStatus'] = $this->imageStatus;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->languageType) {
            $res['LanguageType'] = $this->languageType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopInstanceType'])) {
            $model->desktopInstanceType = $map['DesktopInstanceType'];
        }
        if (isset($map['GpuCategory'])) {
            $model->gpuCategory = $map['GpuCategory'];
        }
        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }
        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = $map['ImageId'];
            }
        }
        if (isset($map['ImageStatus'])) {
            $model->imageStatus = $map['ImageStatus'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['LanguageType'])) {
            $model->languageType = $map['LanguageType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }

        return $model;
    }
}
