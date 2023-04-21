<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\TagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The region ID of the resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource, which is the ID of the cloud desktop. Valid values of N: 1 to 50.
     *
     * @example ecd-ia2zw38bi6cm7****
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the resource. Set the value to ALIYUN::GWS::INSTANCE.
     *
     * @example ALIYUN::GWS::INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The list of the resource.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tag'          => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
