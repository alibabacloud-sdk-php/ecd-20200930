<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers\userSetPropertiesModels\propertyValues;
use AlibabaCloud\Tea\Model;

class userSetPropertiesModels extends Model
{
    /**
     * @var int
     */
    public $propertyId;

    /**
     * @var string
     */
    public $propertyKey;

    /**
     * @var int
     */
    public $propertyType;

    /**
     * @var propertyValues[]
     */
    public $propertyValues;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'propertyId'     => 'PropertyId',
        'propertyKey'    => 'PropertyKey',
        'propertyType'   => 'PropertyType',
        'propertyValues' => 'PropertyValues',
        'userId'         => 'UserId',
        'userName'       => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }
        if (null !== $this->propertyType) {
            $res['PropertyType'] = $this->propertyType;
        }
        if (null !== $this->propertyValues) {
            $res['PropertyValues'] = [];
            if (null !== $this->propertyValues && \is_array($this->propertyValues)) {
                $n = 0;
                foreach ($this->propertyValues as $item) {
                    $res['PropertyValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userSetPropertiesModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }
        if (isset($map['PropertyType'])) {
            $model->propertyType = $map['PropertyType'];
        }
        if (isset($map['PropertyValues'])) {
            if (!empty($map['PropertyValues'])) {
                $model->propertyValues = [];
                $n                     = 0;
                foreach ($map['PropertyValues'] as $item) {
                    $model->propertyValues[$n++] = null !== $item ? propertyValues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}