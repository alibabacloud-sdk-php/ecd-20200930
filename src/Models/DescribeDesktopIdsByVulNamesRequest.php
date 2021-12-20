<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeDesktopIdsByVulNamesRequest extends Model
{
    /**
     * @var string
     */
    public $necessity;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $vulName;
    protected $_name = [
        'necessity'    => 'Necessity',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
        'type'         => 'Type',
        'vulName'      => 'VulName',
    ];

    public function validate()
    {
        Model::validateRequired('officeSiteId', $this->officeSiteId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('vulName', $this->vulName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vulName) {
            $res['VulName'] = $this->vulName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDesktopIdsByVulNamesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VulName'])) {
            if (!empty($map['VulName'])) {
                $model->vulName = $map['VulName'];
            }
        }

        return $model;
    }
}
