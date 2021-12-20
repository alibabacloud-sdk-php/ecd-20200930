<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetOfficeSiteSsoStatusRequest extends Model
{
    /**
     * @var bool
     */
    public $enableSso;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enableSso'    => 'EnableSso',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('enableSso', $this->enableSso, true);
        Model::validateRequired('officeSiteId', $this->officeSiteId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSso) {
            $res['EnableSso'] = $this->enableSso;
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
     * @return SetOfficeSiteSsoStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableSso'])) {
            $model->enableSso = $map['EnableSso'];
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
