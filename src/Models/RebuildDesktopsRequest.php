<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class RebuildDesktopsRequest extends Model
{
    /**
     * @var string
     */
    public $afterStatus;

    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'afterStatus' => 'AfterStatus',
        'desktopId' => 'DesktopId',
        'imageId' => 'ImageId',
        'language' => 'Language',
        'operateType' => 'OperateType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->afterStatus) {
            $res['AfterStatus'] = $this->afterStatus;
        }

        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
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
        if (isset($map['AfterStatus'])) {
            $model->afterStatus = $map['AfterStatus'];
        }

        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
