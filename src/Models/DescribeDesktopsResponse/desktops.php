<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponse;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponse\desktops\disks;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponse\desktops\sessions;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponse\desktops\tags;
use AlibabaCloud\Tea\Model;

class desktops extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $desktopStatus;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var string
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var sessions[]
     */
    public $sessions;

    /**
     * @var string[]
     */
    public $endUserIds;
    protected $_name = [
        'directoryId'        => 'DirectoryId',
        'directoryType'      => 'DirectoryType',
        'creationTime'       => 'CreationTime',
        'desktopId'          => 'DesktopId',
        'bundleId'           => 'BundleId',
        'desktopStatus'      => 'DesktopStatus',
        'desktopName'        => 'DesktopName',
        'imageId'            => 'ImageId',
        'desktopType'        => 'DesktopType',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskSize'     => 'SystemDiskSize',
        'dataDiskCategory'   => 'DataDiskCategory',
        'dataDiskSize'       => 'DataDiskSize',
        'policyGroupId'      => 'PolicyGroupId',
        'cpu'                => 'Cpu',
        'memory'             => 'Memory',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'expiredTime'        => 'ExpiredTime',
        'chargeType'         => 'ChargeType',
        'gpuCount'           => 'GpuCount',
        'gpuSpec'            => 'GpuSpec',
        'startTime'          => 'StartTime',
        'connectionStatus'   => 'ConnectionStatus',
        'osType'             => 'OsType',
        'disks'              => 'Disks',
        'tags'               => 'Tags',
        'sessions'           => 'Sessions',
        'endUserIds'         => 'EndUserIds',
    ];

    public function validate()
    {
        Model::validateRequired('directoryId', $this->directoryId, true);
        Model::validateRequired('directoryType', $this->directoryType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('bundleId', $this->bundleId, true);
        Model::validateRequired('desktopStatus', $this->desktopStatus, true);
        Model::validateRequired('desktopName', $this->desktopName, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('desktopType', $this->desktopType, true);
        Model::validateRequired('systemDiskCategory', $this->systemDiskCategory, true);
        Model::validateRequired('systemDiskSize', $this->systemDiskSize, true);
        Model::validateRequired('dataDiskCategory', $this->dataDiskCategory, true);
        Model::validateRequired('dataDiskSize', $this->dataDiskSize, true);
        Model::validateRequired('policyGroupId', $this->policyGroupId, true);
        Model::validateRequired('cpu', $this->cpu, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('gpuCount', $this->gpuCount, true);
        Model::validateRequired('gpuSpec', $this->gpuSpec, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('connectionStatus', $this->connectionStatus, true);
        Model::validateRequired('osType', $this->osType, true);
        Model::validateRequired('disks', $this->disks, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('sessions', $this->sessions, true);
        Model::validateRequired('endUserIds', $this->endUserIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->disks) {
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessions) {
            $res['Sessions'] = [];
            if (null !== $this->sessions && \is_array($this->sessions)) {
                $n = 0;
                foreach ($this->sessions as $item) {
                    $res['Sessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n            = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sessions'])) {
            if (!empty($map['Sessions'])) {
                $model->sessions = [];
                $n               = 0;
                foreach ($map['Sessions'] as $item) {
                    $model->sessions[$n++] = null !== $item ? sessions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }

        return $model;
    }
}
