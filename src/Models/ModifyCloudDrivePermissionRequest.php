<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudDrivePermissionRequest extends Model
{
    /**
     * @example cn-hangzhou+cds-60911*****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @var string[]
     */
    public $downloadEndUserIds;

    /**
     * @var string[]
     */
    public $downloadUploadEndUserIds;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'                    => 'CdsId',
        'downloadEndUserIds'       => 'DownloadEndUserIds',
        'downloadUploadEndUserIds' => 'DownloadUploadEndUserIds',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->downloadEndUserIds) {
            $res['DownloadEndUserIds'] = $this->downloadEndUserIds;
        }
        if (null !== $this->downloadUploadEndUserIds) {
            $res['DownloadUploadEndUserIds'] = $this->downloadUploadEndUserIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudDrivePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['DownloadEndUserIds'])) {
            if (!empty($map['DownloadEndUserIds'])) {
                $model->downloadEndUserIds = $map['DownloadEndUserIds'];
            }
        }
        if (isset($map['DownloadUploadEndUserIds'])) {
            if (!empty($map['DownloadUploadEndUserIds'])) {
                $model->downloadUploadEndUserIds = $map['DownloadUploadEndUserIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
