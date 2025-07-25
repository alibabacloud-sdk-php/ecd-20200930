<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest;

use AlibabaCloud\Tea\Model;

class deviceRedirects extends Model
{
    /**
     * @description The peripheral type.
     *
     * Valid values:
     *
     *   printer
     *   scanner
     *   serialport
     *   camera
     *   adb
     *
     * @example camera
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description The redirection type.
     *
     * Valid values:
     *
     *   deviceRedirect: enables device redirection.
     *   usbRedirect: enables USB redirection.
     *   off: disables any type of redirection.
     *
     * @example usbRedirect
     *
     * @var string
     */
    public $redirectType;
    protected $_name = [
        'deviceType' => 'DeviceType',
        'redirectType' => 'RedirectType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->redirectType) {
            $res['RedirectType'] = $this->redirectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceRedirects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['RedirectType'])) {
            $model->redirectType = $map['RedirectType'];
        }

        return $model;
    }
}
