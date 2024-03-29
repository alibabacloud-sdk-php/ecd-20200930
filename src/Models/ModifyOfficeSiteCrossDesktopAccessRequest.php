<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyOfficeSiteCrossDesktopAccessRequest extends Model
{
    /**
     * @description Specifies whether to enable the cross-desktop access feature for the workspace.
     *
     *   true: enable
     *   false: disable
     *
     * @example false
     *
     * @var bool
     */
    public $enableCrossDesktopAccess;

    /**
     * @description The workspace ID.
     *
     * @example cn-hangzhou+dir-068266****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enableCrossDesktopAccess' => 'EnableCrossDesktopAccess',
        'officeSiteId'             => 'OfficeSiteId',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableCrossDesktopAccess) {
            $res['EnableCrossDesktopAccess'] = $this->enableCrossDesktopAccess;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOfficeSiteCrossDesktopAccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableCrossDesktopAccess'])) {
            $model->enableCrossDesktopAccess = $map['EnableCrossDesktopAccess'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
