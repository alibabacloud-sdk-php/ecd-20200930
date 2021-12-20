<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyGroupResponse extends Model
{
    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyGroupId' => 'PolicyGroupId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('policyGroupId', $this->policyGroupId, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
