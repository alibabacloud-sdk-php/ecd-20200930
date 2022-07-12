<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups;
use AlibabaCloud\Tea\Model;

class DescribePolicyGroupsResponseBody extends Model
{
    /**
     * @var describePolicyGroups[]
     */
    public $describePolicyGroups;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'describePolicyGroups' => 'DescribePolicyGroups',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describePolicyGroups) {
            $res['DescribePolicyGroups'] = [];
            if (null !== $this->describePolicyGroups && \is_array($this->describePolicyGroups)) {
                $n = 0;
                foreach ($this->describePolicyGroups as $item) {
                    $res['DescribePolicyGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DescribePolicyGroups'])) {
            if (!empty($map['DescribePolicyGroups'])) {
                $model->describePolicyGroups = [];
                $n                           = 0;
                foreach ($map['DescribePolicyGroups'] as $item) {
                    $model->describePolicyGroups[$n++] = null !== $item ? describePolicyGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
