<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopInfoResponseBody\desktops;

class DescribeDesktopInfoResponseBody extends Model
{
    /**
     * @var desktops[]
     */
    public $desktops;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktops' => 'Desktops',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->desktops)) {
            Model::validateArray($this->desktops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktops) {
            if (\is_array($this->desktops)) {
                $res['Desktops'] = [];
                $n1 = 0;
                foreach ($this->desktops as $item1) {
                    $res['Desktops'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Desktops'])) {
            if (!empty($map['Desktops'])) {
                $model->desktops = [];
                $n1 = 0;
                foreach ($map['Desktops'] as $item1) {
                    $model->desktops[$n1] = desktops::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
