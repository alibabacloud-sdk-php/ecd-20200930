<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RemoveFilePermissionShrinkRequest extends Model
{
    /**
     * @description The ID of the cloud disk in Cloud Drive Service.
     *
     * @example cn-hangzhou+cds-066224****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The user ID.
     *
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The file ID. The ID is a unique identifier for the file.
     *
     * @example 6333e553a133ce21e6f747cf948bb9ef95d7****
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The group ID.
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The users that you want to authorize.
     *
     * @var string
     */
    public $memberListShrink;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'            => 'CdsId',
        'endUserId'        => 'EndUserId',
        'fileId'           => 'FileId',
        'groupId'          => 'GroupId',
        'memberListShrink' => 'MemberList',
        'regionId'         => 'RegionId',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->memberListShrink) {
            $res['MemberList'] = $this->memberListShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveFilePermissionShrinkRequest
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MemberList'])) {
            $model->memberListShrink = $map['MemberList'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
