<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CompleteCdsFileRequest extends Model
{
    /**
     * @example cn-shanghai+cds-465878****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @example test0
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 635a316c94f40f35f5354da29b2aee88c9d1****
     *
     * @var string
     */
    public $fileId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 6C48B55A1FAC4E1A9E0579059514****
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'cdsId'     => 'CdsId',
        'endUserId' => 'EndUserId',
        'fileId'    => 'FileId',
        'regionId'  => 'RegionId',
        'uploadId'  => 'UploadId',
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
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompleteCdsFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        return $model;
    }
}
