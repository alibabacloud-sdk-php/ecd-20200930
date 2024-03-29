<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserEntitlementRequest extends Model
{
    /**
     * @description The IDs of the cloud desktops on which you want to grant permissions to users.
     *
     * @var string[]
     */
    public $authorizeDesktopId;

    /**
     * @description The ID of the users.
     *
     * @var string[]
     */
    public $endUserId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the cloud desktops on which you want to revoke permissions from users.
     *
     * @var string[]
     */
    public $revokeDesktopId;
    protected $_name = [
        'authorizeDesktopId' => 'AuthorizeDesktopId',
        'endUserId'          => 'EndUserId',
        'regionId'           => 'RegionId',
        'revokeDesktopId'    => 'RevokeDesktopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizeDesktopId) {
            $res['AuthorizeDesktopId'] = $this->authorizeDesktopId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->revokeDesktopId) {
            $res['RevokeDesktopId'] = $this->revokeDesktopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserEntitlementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizeDesktopId'])) {
            if (!empty($map['AuthorizeDesktopId'])) {
                $model->authorizeDesktopId = $map['AuthorizeDesktopId'];
            }
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RevokeDesktopId'])) {
            if (!empty($map['RevokeDesktopId'])) {
                $model->revokeDesktopId = $map['RevokeDesktopId'];
            }
        }

        return $model;
    }
}
