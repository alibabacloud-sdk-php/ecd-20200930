<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class scaleTimerInfos extends Model
{
    /**
     * @description The number of purchased cloud desktops during the scaling event. Valid values: 0 to 200.
     *
     * @example 5
     *
     * @var int
     */
    public $buyResAmount;

    /**
     * @description The type of the CRON expression that is specified for the scheduled task.
     *
     * @example 0 0 0 * * ?
     *
     * @var string
     */
    public $cron;

    /**
     * @description The retention period of a cloud desktop in the desktop group after the cloud desktop is disconnected. Unit: milliseconds.
     *
     * @example 600000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy for the multi-session desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description The maximum number of cloud desktops that the system can scale. Valid values: 0 to 200.
     *
     * @example 100
     *
     * @var int
     */
    public $maxResAmount;

    /**
     * @description The minimum number of cloud desktops that the system must scale. Valid values: 0 to 200.
     *
     * @example 1
     *
     * @var int
     */
    public $minResAmount;

    /**
     * @description The threshold for the ratio of connected sessions. This parameter is the condition that triggers auto scaling in a multi-session desktop group. `Ratio of connected sessions = Number of connected sessions/(Total number of cloud desktops × Maximum number of sessions allowed for each cloud desktop) × 100%`. If the specified threshold is reached, new cloud desktops are automatically created. If the specified threshold is not reached, idle cloud desktops are released.
     *
     * @example 0.5
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The type of the scheduled task.
     *
     * Valid values:
     *
     *   drop
     *
     * .
     *
     *   normal
     *
     * .
     *
     *   peak
     *
     * .
     *
     *   rise
     *
     * .
     * @example rise
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'buyResAmount'   => 'BuyResAmount',
        'cron'           => 'Cron',
        'keepDuration'   => 'KeepDuration',
        'loadPolicy'     => 'LoadPolicy',
        'maxResAmount'   => 'MaxResAmount',
        'minResAmount'   => 'MinResAmount',
        'ratioThreshold' => 'RatioThreshold',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyResAmount) {
            $res['BuyResAmount'] = $this->buyResAmount;
        }
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }
        if (null !== $this->keepDuration) {
            $res['KeepDuration'] = $this->keepDuration;
        }
        if (null !== $this->loadPolicy) {
            $res['LoadPolicy'] = $this->loadPolicy;
        }
        if (null !== $this->maxResAmount) {
            $res['MaxResAmount'] = $this->maxResAmount;
        }
        if (null !== $this->minResAmount) {
            $res['MinResAmount'] = $this->minResAmount;
        }
        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaleTimerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyResAmount'])) {
            $model->buyResAmount = $map['BuyResAmount'];
        }
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }
        if (isset($map['KeepDuration'])) {
            $model->keepDuration = $map['KeepDuration'];
        }
        if (isset($map['LoadPolicy'])) {
            $model->loadPolicy = $map['LoadPolicy'];
        }
        if (isset($map['MaxResAmount'])) {
            $model->maxResAmount = $map['MaxResAmount'];
        }
        if (isset($map['MinResAmount'])) {
            $model->minResAmount = $map['MinResAmount'];
        }
        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
