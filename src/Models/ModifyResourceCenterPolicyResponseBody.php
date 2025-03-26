<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyResourceCenterPolicyResponseBody\modifyResults;

class ModifyResourceCenterPolicyResponseBody extends Model
{
    /**
     * @var modifyResults[]
     */
    public $modifyResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modifyResults' => 'ModifyResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->modifyResults)) {
            Model::validateArray($this->modifyResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifyResults) {
            if (\is_array($this->modifyResults)) {
                $res['ModifyResults'] = [];
                $n1 = 0;
                foreach ($this->modifyResults as $item1) {
                    $res['ModifyResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ModifyResults'])) {
            if (!empty($map['ModifyResults'])) {
                $model->modifyResults = [];
                $n1 = 0;
                foreach ($map['ModifyResults'] as $item1) {
                    $model->modifyResults[$n1++] = modifyResults::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
