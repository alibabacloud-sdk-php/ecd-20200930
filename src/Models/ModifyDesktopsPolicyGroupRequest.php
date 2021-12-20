<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopsPolicyGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopId'     => 'DesktopId',
        'policyGroupId' => 'PolicyGroupId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('policyGroupId', $this->policyGroupId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopsPolicyGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
