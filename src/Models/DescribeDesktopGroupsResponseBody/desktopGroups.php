<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody\desktopGroups\countPerStatus;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody\desktopGroups\tags;
use AlibabaCloud\Tea\Model;

class desktopGroups extends Model
{
    /**
     * @description The number of concurrent sessions allowed for each cloud computer within the multi-session many-to-many share.
     *
     * @example 1
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description This parameter is applicable only to subscription cloud computer shares. It defines the initial number of cloud computers that are purchased. Valid values: 0 to 200.
     *
     * @example 5
     *
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @description The remarks.
     *
     * @example test
     *
     * @var string
     */
    public $comments;

    /**
     * @description The maximum period of time during which a session is connected. When the specified maximum period of time is reached, the session is automatically disconnected. Unit: milliseconds.
     *
     * @example 90000
     *
     * @var int
     */
    public $connectDuration;

    /**
     * @description The number of cloud computers in each state.
     *
     * @var countPerStatus[]
     */
    public $countPerStatus;

    /**
     * @description The number of vCPUs.
     *
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the cloud computer pool was created.
     *
     * @example 2022-02-17T14:51:07Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The Alibaba Cloud account that creates the cloud computer pool.
     *
     * @example 1007214305******
     *
     * @var string
     */
    public $creator;

    /**
     * @description The category of the user disk.
     *
     * Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description The user disk capacity. Unit: GiB.
     *
     * @example 50
     *
     * @var string
     */
    public $dataDiskSize;

    /**
     * @description The number of cloud computers that are created.
     *
     * @example 2
     *
     * @var int
     */
    public $desktopCount;

    /**
     * @description The ID of the cloud computer share.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The name of the cloud computer share.
     *
     * @example test1
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The cloud computer type. You can call the [DescribeDesktopTypes](https://help.aliyun.com/document_detail/188882.html) operation to query the IDs of the cloud computer types supported by WUYING Workspace.
     *
     * @example eds.enterprise_office.4c4g
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The number of users who can access the cloud computer share.
     *
     * @example 1
     *
     * @var int
     */
    public $endUserCount;

    /**
     * @description The expiration date of the subscription cloud computer share.
     *
     * @example 2022-03-17T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @var string[]
     */
    public $expiredTimes;

    /**
     * @description The number of GPUs.
     *
     * @example 1
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The version of the GPU driver.
     *
     * @example 12
     *
     * @var string
     */
    public $gpuDriverVersion;

    /**
     * @description The GPU memory.
     *
     * @example 16 GiB
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @description The period of time after which a session is closed. After an end user connects to a cloud computer, the session is established. If the system does not detect inputs from the keyboard or mouse within the specified period of time, the session is closed. Unit: milliseconds.
     *
     * @example 90000
     *
     * @var int
     */
    public $idleDisconnectDuration;

    /**
     * @description The ID of the image.
     *
     * @example m-gq15cq5ydlvwn****
     *
     * @var string
     */
    public $imageId;

    /**
     * @var bool
     */
    public $isLdap;

    /**
     * @description The keep-alive duration of a session after the session is disconnected. Valid values: 180000 (3 minutes) to 345600000 (4 days). Unit: milliseconds. If you set this parameter to 0, the session is permanently retained after it is disconnected.
     *
     * When a session is disconnected, take note of the following situations: If an end user does not resume the session within the specified duration, the session is closed and all unsaved data is cleared. If the end user resumes the session within the specified duration, the end user can continue to access data of the session.
     *
     * @example 1000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy for the multi-session many-to-many share.
     *
     * Valid values:
     *
     *   0: depth-first
     *   1: breadth-first
     *
     * @example 1
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description *   For pay-as-you-go cloud computer shares, this parameter defines the maximum number of cloud computers allowed.
     *   For subscription cloud computer shares, this parameter defines the total number of cloud computers, including both the initially purchased cloud computers (`BuyDesktopsCount`) and those that can be auto-created.
     *
     * @example 10
     *
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @description The memory size. Unit: MiB.
     *
     * @example 16384
     *
     * @var int
     */
    public $memory;

    /**
     * @description *   For pay-as-you-go cloud computer shares, this parameter defines the minimum number of cloud computers allowed.
     *   For subscription cloud computer shares, this parameter defines the number of cloud computers that are initially purchased (`BuyDesktopsCount`).
     *
     * @example 1
     *
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @description The ID of the office network in which the cloud computer network resides.
     *
     * @example cn-hangzhou+dir-467671****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the office network in which the cloud computer share resides.
     *
     * @example testName
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The account type of the office network.
     *
     * Valid values:
     *
     *   PERSONAL: individual office network
     *   SIMPLE: convenience office network
     *   AD_CONNECTOR: enterprise Active Directory (AD) office network
     *   RAM: Resource Access Management (RAM)-based office network
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The OS.
     *
     * Valid values:
     *
     *   Linux
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Windows
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The ID of the cloud computer template.
     *
     * @example bundle_eds_general_4c8g_s8d5_win2019
     *
     * @var string
     */
    public $ownBundleId;

    /**
     * @description The name of the cloud computer template.
     *
     * @example test
     *
     * @var string
     */
    public $ownBundleName;

    /**
     * @description The type of the cloud computer share.
     *
     * Valid values:
     *
     *   0: a single-session many-to-many share.
     *   1: a multi-session many-to-many share.
     *
     * @example 0
     *
     * @var int
     */
    public $ownType;

    /**
     * @description The billing method of the cloud computer pool.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the applied policy.
     *
     * @example pg-53iyi2aar0nd6c8qj
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string[]
     */
    public $policyGroupIdList;

    /**
     * @description The name of the applied policy.
     *
     * @example test-policy
     *
     * @var string
     */
    public $policyGroupName;

    /**
     * @var string[]
     */
    public $policyGroupNameList;

    /**
     * @description The protocol type.
     *
     * Valid values:
     *
     *   HDX
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   ASP
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The threshold for the ratio of connected sessions, which triggers automatic scaling of cloud computers within the multi-session many-to-many share. To calculate the ratio of connected sessions, use the following formula:
     *
     * `Ratio of connected sessions = Number of connected sessions/(Total number of cloud computers × Maximum number of sessions allowed for each cloud computer) × 100%`
     *
     * When the specified threshold is reached, new cloud computers are automatically created. When the specified threshold is not reached, idle cloud computers are released.
     *
     * @example 0.85
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The reset option for the cloud computer share.
     *
     * Valid values:
     *
     *   0: does not reset any disk.
     *   1: resets only the system disk.
     *   2: resets only the data disk.
     *   3: resets the system disk and data disk.
     *
     * @example 0
     *
     * @var int
     */
    public $resetType;

    /**
     * @var string
     */
    public $simpleUserGroupId;

    /**
     * @description The status of the cloud computer share.
     *
     * Valid values:
     *
     *   0: The cloud computer share is unpaid.
     *   1: The cloud computer share is normal.
     *   2: The cloud computer share expired, or your account has an overdue payment.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The period of time after which an idle cloud computer is stopped. When the specified period of time is reached, the cloud computer is automatically stopped. If an end user connects to the stopped cloud computer, the cloud computer is automatically started. Unit: milliseconds.
     *
     * @example 900000
     *
     * @var int
     */
    public $stopDuration;

    /**
     * @description The ID of the subnet.
     *
     * @example vsw-uf63bb6*****8gfytm
     *
     * @var string
     */
    public $subnetId;

    /**
     * @description The category of the system disk.
     *
     * Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The system disk capacity. Unit: GiB.
     *
     * @example 80
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userGroupName;

    /**
     * @description The user\\"s organizational unit path.
     *
     * @example example.com
     *
     * @var string
     */
    public $userOuPath;

    /**
     * @description The version number of the cloud computer share.
     *
     * @example 2
     *
     * @var int
     */
    public $version;

    /**
     * @description Indicates whether disk encryption is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @description The ID of the Key Management Service (KMS) key for disk encryption.
     *
     * @example e5409ada-xxxx-xxxx-xxxx-89e31e23e993
     *
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'bindAmount' => 'BindAmount',
        'buyDesktopsCount' => 'BuyDesktopsCount',
        'comments' => 'Comments',
        'connectDuration' => 'ConnectDuration',
        'countPerStatus' => 'CountPerStatus',
        'cpu' => 'Cpu',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskSize' => 'DataDiskSize',
        'desktopCount' => 'DesktopCount',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupName' => 'DesktopGroupName',
        'desktopType' => 'DesktopType',
        'endUserCount' => 'EndUserCount',
        'expiredTime' => 'ExpiredTime',
        'expiredTimes' => 'ExpiredTimes',
        'gpuCount' => 'GpuCount',
        'gpuDriverVersion' => 'GpuDriverVersion',
        'gpuSpec' => 'GpuSpec',
        'idleDisconnectDuration' => 'IdleDisconnectDuration',
        'imageId' => 'ImageId',
        'isLdap' => 'IsLdap',
        'keepDuration' => 'KeepDuration',
        'loadPolicy' => 'LoadPolicy',
        'maxDesktopsCount' => 'MaxDesktopsCount',
        'memory' => 'Memory',
        'minDesktopsCount' => 'MinDesktopsCount',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'officeSiteType' => 'OfficeSiteType',
        'osType' => 'OsType',
        'ownBundleId' => 'OwnBundleId',
        'ownBundleName' => 'OwnBundleName',
        'ownType' => 'OwnType',
        'payType' => 'PayType',
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupIdList' => 'PolicyGroupIdList',
        'policyGroupName' => 'PolicyGroupName',
        'policyGroupNameList' => 'PolicyGroupNameList',
        'protocolType' => 'ProtocolType',
        'ratioThreshold' => 'RatioThreshold',
        'resetType' => 'ResetType',
        'simpleUserGroupId' => 'SimpleUserGroupId',
        'status' => 'Status',
        'stopDuration' => 'StopDuration',
        'subnetId' => 'SubnetId',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskSize' => 'SystemDiskSize',
        'tags' => 'Tags',
        'userGroupName' => 'UserGroupName',
        'userOuPath' => 'UserOuPath',
        'version' => 'Version',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey' => 'VolumeEncryptionKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindAmount) {
            $res['BindAmount'] = $this->bindAmount;
        }
        if (null !== $this->buyDesktopsCount) {
            $res['BuyDesktopsCount'] = $this->buyDesktopsCount;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }
        if (null !== $this->countPerStatus) {
            $res['CountPerStatus'] = [];
            if (null !== $this->countPerStatus && \is_array($this->countPerStatus)) {
                $n = 0;
                foreach ($this->countPerStatus as $item) {
                    $res['CountPerStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->endUserCount) {
            $res['EndUserCount'] = $this->endUserCount;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->expiredTimes) {
            $res['ExpiredTimes'] = $this->expiredTimes;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuDriverVersion) {
            $res['GpuDriverVersion'] = $this->gpuDriverVersion;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->idleDisconnectDuration) {
            $res['IdleDisconnectDuration'] = $this->idleDisconnectDuration;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->isLdap) {
            $res['IsLdap'] = $this->isLdap;
        }
        if (null !== $this->keepDuration) {
            $res['KeepDuration'] = $this->keepDuration;
        }
        if (null !== $this->loadPolicy) {
            $res['LoadPolicy'] = $this->loadPolicy;
        }
        if (null !== $this->maxDesktopsCount) {
            $res['MaxDesktopsCount'] = $this->maxDesktopsCount;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->ownBundleId) {
            $res['OwnBundleId'] = $this->ownBundleId;
        }
        if (null !== $this->ownBundleName) {
            $res['OwnBundleName'] = $this->ownBundleName;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->policyGroupIdList) {
            $res['PolicyGroupIdList'] = $this->policyGroupIdList;
        }
        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }
        if (null !== $this->policyGroupNameList) {
            $res['PolicyGroupNameList'] = $this->policyGroupNameList;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->simpleUserGroupId) {
            $res['SimpleUserGroupId'] = $this->simpleUserGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (null !== $this->userGroupName) {
            $res['UserGroupName'] = $this->userGroupName;
        }
        if (null !== $this->userOuPath) {
            $res['UserOuPath'] = $this->userOuPath;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }
        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindAmount'])) {
            $model->bindAmount = $map['BindAmount'];
        }
        if (isset($map['BuyDesktopsCount'])) {
            $model->buyDesktopsCount = $map['BuyDesktopsCount'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }
        if (isset($map['CountPerStatus'])) {
            if (!empty($map['CountPerStatus'])) {
                $model->countPerStatus = [];
                $n = 0;
                foreach ($map['CountPerStatus'] as $item) {
                    $model->countPerStatus[$n++] = null !== $item ? countPerStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['EndUserCount'])) {
            $model->endUserCount = $map['EndUserCount'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ExpiredTimes'])) {
            if (!empty($map['ExpiredTimes'])) {
                $model->expiredTimes = $map['ExpiredTimes'];
            }
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuDriverVersion'])) {
            $model->gpuDriverVersion = $map['GpuDriverVersion'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['IdleDisconnectDuration'])) {
            $model->idleDisconnectDuration = $map['IdleDisconnectDuration'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['IsLdap'])) {
            $model->isLdap = $map['IsLdap'];
        }
        if (isset($map['KeepDuration'])) {
            $model->keepDuration = $map['KeepDuration'];
        }
        if (isset($map['LoadPolicy'])) {
            $model->loadPolicy = $map['LoadPolicy'];
        }
        if (isset($map['MaxDesktopsCount'])) {
            $model->maxDesktopsCount = $map['MaxDesktopsCount'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OwnBundleId'])) {
            $model->ownBundleId = $map['OwnBundleId'];
        }
        if (isset($map['OwnBundleName'])) {
            $model->ownBundleName = $map['OwnBundleName'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PolicyGroupIdList'])) {
            if (!empty($map['PolicyGroupIdList'])) {
                $model->policyGroupIdList = $map['PolicyGroupIdList'];
            }
        }
        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }
        if (isset($map['PolicyGroupNameList'])) {
            if (!empty($map['PolicyGroupNameList'])) {
                $model->policyGroupNameList = $map['PolicyGroupNameList'];
            }
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['SimpleUserGroupId'])) {
            $model->simpleUserGroupId = $map['SimpleUserGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserGroupName'])) {
            $model->userGroupName = $map['UserGroupName'];
        }
        if (isset($map['UserOuPath'])) {
            $model->userOuPath = $map['UserOuPath'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }
        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
