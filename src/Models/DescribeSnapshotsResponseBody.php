<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnapshotsResponseBody\snapshots;
use AlibabaCloud\Tea\Model;

class DescribeSnapshotsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var snapshots[]
     */
    public $snapshots;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'snapshots' => 'Snapshots',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = [];
            if (null !== $this->snapshots && \is_array($this->snapshots)) {
                $n = 0;
                foreach ($this->snapshots as $item) {
                    $res['Snapshots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = [];
                $n                = 0;
                foreach ($map['Snapshots'] as $item) {
                    $model->snapshots[$n++] = null !== $item ? snapshots::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
