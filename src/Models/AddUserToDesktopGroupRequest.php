<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class AddUserToDesktopGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $desktopGroupId;
    /**
     * @var string[]
     */
    public $desktopGroupIds;
    /**
     * @var string[]
     */
    public $endUserIds;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'desktopGroupId'  => 'DesktopGroupId',
        'desktopGroupIds' => 'DesktopGroupIds',
        'endUserIds'      => 'EndUserIds',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopGroupIds)) {
            Model::validateArray($this->desktopGroupIds);
        }
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->desktopGroupIds) {
            if (\is_array($this->desktopGroupIds)) {
                $res['DesktopGroupIds'] = [];
                $n1                     = 0;
                foreach ($this->desktopGroupIds as $item1) {
                    $res['DesktopGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1                = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['DesktopGroupIds'])) {
            if (!empty($map['DesktopGroupIds'])) {
                $model->desktopGroupIds = [];
                $n1                     = 0;
                foreach ($map['DesktopGroupIds'] as $item1) {
                    $model->desktopGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1                = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
