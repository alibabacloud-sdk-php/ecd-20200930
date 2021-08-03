<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetIdpMetadataResponseBody extends Model
{
    /**
     * @var string
     */
    public $idpEntityId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'idpEntityId' => 'IdpEntityId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idpEntityId) {
            $res['IdpEntityId'] = $this->idpEntityId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetIdpMetadataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdpEntityId'])) {
            $model->idpEntityId = $map['IdpEntityId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
