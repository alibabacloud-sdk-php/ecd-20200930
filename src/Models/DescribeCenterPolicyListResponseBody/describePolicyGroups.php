<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\authorizeAccessPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\authorizeSecurityPolicyRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\clientTypes;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\deviceRedirects;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\deviceRules;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\domainResolveRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\netRedirectRule;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponseBody\describePolicyGroups\usbSupplyRedirectRule;

class describePolicyGroups extends Model
{
    /**
     * @var string
     */
    public $adminAccess;

    /**
     * @var string
     */
    public $appContentProtection;

    /**
     * @var authorizeAccessPolicyRules[]
     */
    public $authorizeAccessPolicyRules;

    /**
     * @var authorizeSecurityPolicyRules[]
     */
    public $authorizeSecurityPolicyRules;

    /**
     * @var string
     */
    public $cameraRedirect;

    /**
     * @var string
     */
    public $clientControlMenu;

    /**
     * @var clientTypes[]
     */
    public $clientTypes;

    /**
     * @var string
     */
    public $clipboard;

    /**
     * @var string
     */
    public $colorEnhancement;

    /**
     * @var string
     */
    public $cpdDriveClipboard;

    /**
     * @var int
     */
    public $cpuDownGradeDuration;

    /**
     * @var string[]
     */
    public $cpuProcessors;

    /**
     * @var string
     */
    public $cpuProtectedMode;

    /**
     * @var int
     */
    public $cpuRateLimit;

    /**
     * @var int
     */
    public $cpuSampleDuration;

    /**
     * @var int
     */
    public $cpuSingleRateLimit;

    /**
     * @var int
     */
    public $desktopCount;

    /**
     * @var int
     */
    public $desktopGroupCount;

    /**
     * @var deviceRedirects[]
     */
    public $deviceRedirects;

    /**
     * @var deviceRules[]
     */
    public $deviceRules;

    /**
     * @var string
     */
    public $disconnectKeepSession;

    /**
     * @var int
     */
    public $disconnectKeepSessionTime;

    /**
     * @var string
     */
    public $displayMode;

    /**
     * @var string
     */
    public $domainRegisterValue;

    /**
     * @var domainResolveRule[]
     */
    public $domainResolveRule;

    /**
     * @var string
     */
    public $domainResolveRuleType;

    /**
     * @var string
     */
    public $endUserApplyAdminCoordinate;

    /**
     * @var string
     */
    public $endUserGroupCoordinate;

    /**
     * @var string
     */
    public $fileTransferAddress;

    /**
     * @var string
     */
    public $fileTransferSpeed;

    /**
     * @var string
     */
    public $fileTransferSpeedLocation;

    /**
     * @var string
     */
    public $gpuAcceleration;

    /**
     * @var string
     */
    public $html5Access;

    /**
     * @var string
     */
    public $html5FileTransfer;

    /**
     * @var string
     */
    public $internetCommunicationProtocol;

    /**
     * @var string
     */
    public $internetPrinter;

    /**
     * @var string
     */
    public $localDrive;

    /**
     * @var int
     */
    public $maxReconnectTime;

    /**
     * @var int
     */
    public $memoryDownGradeDuration;

    /**
     * @var string[]
     */
    public $memoryProcessors;

    /**
     * @var string
     */
    public $memoryProtectedMode;

    /**
     * @var int
     */
    public $memoryRateLimit;

    /**
     * @var int
     */
    public $memorySampleDuration;

    /**
     * @var int
     */
    public $memorySingleRateLimit;

    /**
     * @var string
     */
    public $mobileRestart;

    /**
     * @var string
     */
    public $mobileShutdown;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $netRedirect;

    /**
     * @var netRedirectRule[]
     */
    public $netRedirectRule;

    /**
     * @var string
     */
    public $noOperationDisconnect;

    /**
     * @var int
     */
    public $noOperationDisconnectTime;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $policyGroupType;

    /**
     * @var string
     */
    public $policyStatus;

    /**
     * @var string
     */
    public $printerRedirection;

    /**
     * @var string
     */
    public $qualityEnhancement;

    /**
     * @var string
     */
    public $recordContent;

    /**
     * @var int
     */
    public $recordContentExpires;

    /**
     * @var int
     */
    public $recordEventDuration;

    /**
     * @var string[]
     */
    public $recordEventFilePaths;

    /**
     * @var string[]
     */
    public $recordEventRegisters;

    /**
     * @var string
     */
    public $recording;

    /**
     * @var string
     */
    public $recordingAudio;

    /**
     * @var int
     */
    public $recordingDuration;

    /**
     * @var string
     */
    public $recordingEndTime;

    /**
     * @var int
     */
    public $recordingExpires;

    /**
     * @var int
     */
    public $recordingFps;

    /**
     * @var string
     */
    public $recordingStartTime;

    /**
     * @var string
     */
    public $recordingUserNotify;

    /**
     * @var string
     */
    public $recordingUserNotifyMessage;

    /**
     * @var string
     */
    public $remoteCoordinate;

    /**
     * @var int
     */
    public $resolutionHeight;

    /**
     * @var string
     */
    public $resolutionModel;

    /**
     * @var int
     */
    public $resolutionWidth;

    /**
     * @var int
     */
    public $resourceGroupCount;

    /**
     * @var string
     */
    public $safeMenu;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string[]
     */
    public $scopeValue;

    /**
     * @var string
     */
    public $screenDisplayMode;

    /**
     * @var string
     */
    public $smoothEnhancement;

    /**
     * @var string
     */
    public $statusMonitor;

    /**
     * @var string
     */
    public $streamingMode;

    /**
     * @var int
     */
    public $targetFps;

    /**
     * @var string
     */
    public $taskbar;

    /**
     * @var string
     */
    public $usbRedirect;

    /**
     * @var usbSupplyRedirectRule[]
     */
    public $usbSupplyRedirectRule;

    /**
     * @var string
     */
    public $useTime;

    /**
     * @var int
     */
    public $videoEncAvgKbps;

    /**
     * @var int
     */
    public $videoEncMaxQP;

    /**
     * @var int
     */
    public $videoEncMinQP;

    /**
     * @var int
     */
    public $videoEncPeakKbps;

    /**
     * @var string
     */
    public $videoEncPolicy;

    /**
     * @var string
     */
    public $videoRedirect;

    /**
     * @var string
     */
    public $visualQuality;

    /**
     * @var string
     */
    public $watermark;

    /**
     * @var string
     */
    public $watermarkAntiCam;

    /**
     * @var int
     */
    public $watermarkColor;

    /**
     * @var string
     */
    public $watermarkCustomText;

    /**
     * @var float
     */
    public $watermarkDegree;

    /**
     * @var int
     */
    public $watermarkFontSize;

    /**
     * @var string
     */
    public $watermarkFontStyle;

    /**
     * @var string
     */
    public $watermarkPower;

    /**
     * @var int
     */
    public $watermarkRowAmount;

    /**
     * @var string
     */
    public $watermarkSecurity;

    /**
     * @var int
     */
    public $watermarkTransparencyValue;

    /**
     * @var string
     */
    public $watermarkType;

    /**
     * @var string
     */
    public $wyAssistant;
    protected $_name = [
        'adminAccess' => 'AdminAccess',
        'appContentProtection' => 'AppContentProtection',
        'authorizeAccessPolicyRules' => 'AuthorizeAccessPolicyRules',
        'authorizeSecurityPolicyRules' => 'AuthorizeSecurityPolicyRules',
        'cameraRedirect' => 'CameraRedirect',
        'clientControlMenu' => 'ClientControlMenu',
        'clientTypes' => 'ClientTypes',
        'clipboard' => 'Clipboard',
        'colorEnhancement' => 'ColorEnhancement',
        'cpdDriveClipboard' => 'CpdDriveClipboard',
        'cpuDownGradeDuration' => 'CpuDownGradeDuration',
        'cpuProcessors' => 'CpuProcessors',
        'cpuProtectedMode' => 'CpuProtectedMode',
        'cpuRateLimit' => 'CpuRateLimit',
        'cpuSampleDuration' => 'CpuSampleDuration',
        'cpuSingleRateLimit' => 'CpuSingleRateLimit',
        'desktopCount' => 'DesktopCount',
        'desktopGroupCount' => 'DesktopGroupCount',
        'deviceRedirects' => 'DeviceRedirects',
        'deviceRules' => 'DeviceRules',
        'disconnectKeepSession' => 'DisconnectKeepSession',
        'disconnectKeepSessionTime' => 'DisconnectKeepSessionTime',
        'displayMode' => 'DisplayMode',
        'domainRegisterValue' => 'DomainRegisterValue',
        'domainResolveRule' => 'DomainResolveRule',
        'domainResolveRuleType' => 'DomainResolveRuleType',
        'endUserApplyAdminCoordinate' => 'EndUserApplyAdminCoordinate',
        'endUserGroupCoordinate' => 'EndUserGroupCoordinate',
        'fileTransferAddress' => 'FileTransferAddress',
        'fileTransferSpeed' => 'FileTransferSpeed',
        'fileTransferSpeedLocation' => 'FileTransferSpeedLocation',
        'gpuAcceleration' => 'GpuAcceleration',
        'html5Access' => 'Html5Access',
        'html5FileTransfer' => 'Html5FileTransfer',
        'internetCommunicationProtocol' => 'InternetCommunicationProtocol',
        'internetPrinter' => 'InternetPrinter',
        'localDrive' => 'LocalDrive',
        'maxReconnectTime' => 'MaxReconnectTime',
        'memoryDownGradeDuration' => 'MemoryDownGradeDuration',
        'memoryProcessors' => 'MemoryProcessors',
        'memoryProtectedMode' => 'MemoryProtectedMode',
        'memoryRateLimit' => 'MemoryRateLimit',
        'memorySampleDuration' => 'MemorySampleDuration',
        'memorySingleRateLimit' => 'MemorySingleRateLimit',
        'mobileRestart' => 'MobileRestart',
        'mobileShutdown' => 'MobileShutdown',
        'name' => 'Name',
        'netRedirect' => 'NetRedirect',
        'netRedirectRule' => 'NetRedirectRule',
        'noOperationDisconnect' => 'NoOperationDisconnect',
        'noOperationDisconnectTime' => 'NoOperationDisconnectTime',
        'policyGroupId' => 'PolicyGroupId',
        'policyGroupType' => 'PolicyGroupType',
        'policyStatus' => 'PolicyStatus',
        'printerRedirection' => 'PrinterRedirection',
        'qualityEnhancement' => 'QualityEnhancement',
        'recordContent' => 'RecordContent',
        'recordContentExpires' => 'RecordContentExpires',
        'recordEventDuration' => 'RecordEventDuration',
        'recordEventFilePaths' => 'RecordEventFilePaths',
        'recordEventRegisters' => 'RecordEventRegisters',
        'recording' => 'Recording',
        'recordingAudio' => 'RecordingAudio',
        'recordingDuration' => 'RecordingDuration',
        'recordingEndTime' => 'RecordingEndTime',
        'recordingExpires' => 'RecordingExpires',
        'recordingFps' => 'RecordingFps',
        'recordingStartTime' => 'RecordingStartTime',
        'recordingUserNotify' => 'RecordingUserNotify',
        'recordingUserNotifyMessage' => 'RecordingUserNotifyMessage',
        'remoteCoordinate' => 'RemoteCoordinate',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionModel' => 'ResolutionModel',
        'resolutionWidth' => 'ResolutionWidth',
        'resourceGroupCount' => 'ResourceGroupCount',
        'safeMenu' => 'SafeMenu',
        'scope' => 'Scope',
        'scopeValue' => 'ScopeValue',
        'screenDisplayMode' => 'ScreenDisplayMode',
        'smoothEnhancement' => 'SmoothEnhancement',
        'statusMonitor' => 'StatusMonitor',
        'streamingMode' => 'StreamingMode',
        'targetFps' => 'TargetFps',
        'taskbar' => 'Taskbar',
        'usbRedirect' => 'UsbRedirect',
        'usbSupplyRedirectRule' => 'UsbSupplyRedirectRule',
        'useTime' => 'UseTime',
        'videoEncAvgKbps' => 'VideoEncAvgKbps',
        'videoEncMaxQP' => 'VideoEncMaxQP',
        'videoEncMinQP' => 'VideoEncMinQP',
        'videoEncPeakKbps' => 'VideoEncPeakKbps',
        'videoEncPolicy' => 'VideoEncPolicy',
        'videoRedirect' => 'VideoRedirect',
        'visualQuality' => 'VisualQuality',
        'watermark' => 'Watermark',
        'watermarkAntiCam' => 'WatermarkAntiCam',
        'watermarkColor' => 'WatermarkColor',
        'watermarkCustomText' => 'WatermarkCustomText',
        'watermarkDegree' => 'WatermarkDegree',
        'watermarkFontSize' => 'WatermarkFontSize',
        'watermarkFontStyle' => 'WatermarkFontStyle',
        'watermarkPower' => 'WatermarkPower',
        'watermarkRowAmount' => 'WatermarkRowAmount',
        'watermarkSecurity' => 'WatermarkSecurity',
        'watermarkTransparencyValue' => 'WatermarkTransparencyValue',
        'watermarkType' => 'WatermarkType',
        'wyAssistant' => 'WyAssistant',
    ];

    public function validate()
    {
        if (\is_array($this->authorizeAccessPolicyRules)) {
            Model::validateArray($this->authorizeAccessPolicyRules);
        }
        if (\is_array($this->authorizeSecurityPolicyRules)) {
            Model::validateArray($this->authorizeSecurityPolicyRules);
        }
        if (\is_array($this->clientTypes)) {
            Model::validateArray($this->clientTypes);
        }
        if (\is_array($this->cpuProcessors)) {
            Model::validateArray($this->cpuProcessors);
        }
        if (\is_array($this->deviceRedirects)) {
            Model::validateArray($this->deviceRedirects);
        }
        if (\is_array($this->deviceRules)) {
            Model::validateArray($this->deviceRules);
        }
        if (\is_array($this->domainResolveRule)) {
            Model::validateArray($this->domainResolveRule);
        }
        if (\is_array($this->memoryProcessors)) {
            Model::validateArray($this->memoryProcessors);
        }
        if (\is_array($this->netRedirectRule)) {
            Model::validateArray($this->netRedirectRule);
        }
        if (\is_array($this->recordEventFilePaths)) {
            Model::validateArray($this->recordEventFilePaths);
        }
        if (\is_array($this->recordEventRegisters)) {
            Model::validateArray($this->recordEventRegisters);
        }
        if (\is_array($this->scopeValue)) {
            Model::validateArray($this->scopeValue);
        }
        if (\is_array($this->usbSupplyRedirectRule)) {
            Model::validateArray($this->usbSupplyRedirectRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminAccess) {
            $res['AdminAccess'] = $this->adminAccess;
        }

        if (null !== $this->appContentProtection) {
            $res['AppContentProtection'] = $this->appContentProtection;
        }

        if (null !== $this->authorizeAccessPolicyRules) {
            if (\is_array($this->authorizeAccessPolicyRules)) {
                $res['AuthorizeAccessPolicyRules'] = [];
                $n1 = 0;
                foreach ($this->authorizeAccessPolicyRules as $item1) {
                    $res['AuthorizeAccessPolicyRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authorizeSecurityPolicyRules) {
            if (\is_array($this->authorizeSecurityPolicyRules)) {
                $res['AuthorizeSecurityPolicyRules'] = [];
                $n1 = 0;
                foreach ($this->authorizeSecurityPolicyRules as $item1) {
                    $res['AuthorizeSecurityPolicyRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cameraRedirect) {
            $res['CameraRedirect'] = $this->cameraRedirect;
        }

        if (null !== $this->clientControlMenu) {
            $res['ClientControlMenu'] = $this->clientControlMenu;
        }

        if (null !== $this->clientTypes) {
            if (\is_array($this->clientTypes)) {
                $res['ClientTypes'] = [];
                $n1 = 0;
                foreach ($this->clientTypes as $item1) {
                    $res['ClientTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }

        if (null !== $this->colorEnhancement) {
            $res['ColorEnhancement'] = $this->colorEnhancement;
        }

        if (null !== $this->cpdDriveClipboard) {
            $res['CpdDriveClipboard'] = $this->cpdDriveClipboard;
        }

        if (null !== $this->cpuDownGradeDuration) {
            $res['CpuDownGradeDuration'] = $this->cpuDownGradeDuration;
        }

        if (null !== $this->cpuProcessors) {
            if (\is_array($this->cpuProcessors)) {
                $res['CpuProcessors'] = [];
                $n1 = 0;
                foreach ($this->cpuProcessors as $item1) {
                    $res['CpuProcessors'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cpuProtectedMode) {
            $res['CpuProtectedMode'] = $this->cpuProtectedMode;
        }

        if (null !== $this->cpuRateLimit) {
            $res['CpuRateLimit'] = $this->cpuRateLimit;
        }

        if (null !== $this->cpuSampleDuration) {
            $res['CpuSampleDuration'] = $this->cpuSampleDuration;
        }

        if (null !== $this->cpuSingleRateLimit) {
            $res['CpuSingleRateLimit'] = $this->cpuSingleRateLimit;
        }

        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }

        if (null !== $this->desktopGroupCount) {
            $res['DesktopGroupCount'] = $this->desktopGroupCount;
        }

        if (null !== $this->deviceRedirects) {
            if (\is_array($this->deviceRedirects)) {
                $res['DeviceRedirects'] = [];
                $n1 = 0;
                foreach ($this->deviceRedirects as $item1) {
                    $res['DeviceRedirects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceRules) {
            if (\is_array($this->deviceRules)) {
                $res['DeviceRules'] = [];
                $n1 = 0;
                foreach ($this->deviceRules as $item1) {
                    $res['DeviceRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->disconnectKeepSession) {
            $res['DisconnectKeepSession'] = $this->disconnectKeepSession;
        }

        if (null !== $this->disconnectKeepSessionTime) {
            $res['DisconnectKeepSessionTime'] = $this->disconnectKeepSessionTime;
        }

        if (null !== $this->displayMode) {
            $res['DisplayMode'] = $this->displayMode;
        }

        if (null !== $this->domainRegisterValue) {
            $res['DomainRegisterValue'] = $this->domainRegisterValue;
        }

        if (null !== $this->domainResolveRule) {
            if (\is_array($this->domainResolveRule)) {
                $res['DomainResolveRule'] = [];
                $n1 = 0;
                foreach ($this->domainResolveRule as $item1) {
                    $res['DomainResolveRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainResolveRuleType) {
            $res['DomainResolveRuleType'] = $this->domainResolveRuleType;
        }

        if (null !== $this->endUserApplyAdminCoordinate) {
            $res['EndUserApplyAdminCoordinate'] = $this->endUserApplyAdminCoordinate;
        }

        if (null !== $this->endUserGroupCoordinate) {
            $res['EndUserGroupCoordinate'] = $this->endUserGroupCoordinate;
        }

        if (null !== $this->fileTransferAddress) {
            $res['FileTransferAddress'] = $this->fileTransferAddress;
        }

        if (null !== $this->fileTransferSpeed) {
            $res['FileTransferSpeed'] = $this->fileTransferSpeed;
        }

        if (null !== $this->fileTransferSpeedLocation) {
            $res['FileTransferSpeedLocation'] = $this->fileTransferSpeedLocation;
        }

        if (null !== $this->gpuAcceleration) {
            $res['GpuAcceleration'] = $this->gpuAcceleration;
        }

        if (null !== $this->html5Access) {
            $res['Html5Access'] = $this->html5Access;
        }

        if (null !== $this->html5FileTransfer) {
            $res['Html5FileTransfer'] = $this->html5FileTransfer;
        }

        if (null !== $this->internetCommunicationProtocol) {
            $res['InternetCommunicationProtocol'] = $this->internetCommunicationProtocol;
        }

        if (null !== $this->internetPrinter) {
            $res['InternetPrinter'] = $this->internetPrinter;
        }

        if (null !== $this->localDrive) {
            $res['LocalDrive'] = $this->localDrive;
        }

        if (null !== $this->maxReconnectTime) {
            $res['MaxReconnectTime'] = $this->maxReconnectTime;
        }

        if (null !== $this->memoryDownGradeDuration) {
            $res['MemoryDownGradeDuration'] = $this->memoryDownGradeDuration;
        }

        if (null !== $this->memoryProcessors) {
            if (\is_array($this->memoryProcessors)) {
                $res['MemoryProcessors'] = [];
                $n1 = 0;
                foreach ($this->memoryProcessors as $item1) {
                    $res['MemoryProcessors'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memoryProtectedMode) {
            $res['MemoryProtectedMode'] = $this->memoryProtectedMode;
        }

        if (null !== $this->memoryRateLimit) {
            $res['MemoryRateLimit'] = $this->memoryRateLimit;
        }

        if (null !== $this->memorySampleDuration) {
            $res['MemorySampleDuration'] = $this->memorySampleDuration;
        }

        if (null !== $this->memorySingleRateLimit) {
            $res['MemorySingleRateLimit'] = $this->memorySingleRateLimit;
        }

        if (null !== $this->mobileRestart) {
            $res['MobileRestart'] = $this->mobileRestart;
        }

        if (null !== $this->mobileShutdown) {
            $res['MobileShutdown'] = $this->mobileShutdown;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->netRedirect) {
            $res['NetRedirect'] = $this->netRedirect;
        }

        if (null !== $this->netRedirectRule) {
            if (\is_array($this->netRedirectRule)) {
                $res['NetRedirectRule'] = [];
                $n1 = 0;
                foreach ($this->netRedirectRule as $item1) {
                    $res['NetRedirectRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noOperationDisconnect) {
            $res['NoOperationDisconnect'] = $this->noOperationDisconnect;
        }

        if (null !== $this->noOperationDisconnectTime) {
            $res['NoOperationDisconnectTime'] = $this->noOperationDisconnectTime;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->policyGroupType) {
            $res['PolicyGroupType'] = $this->policyGroupType;
        }

        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }

        if (null !== $this->printerRedirection) {
            $res['PrinterRedirection'] = $this->printerRedirection;
        }

        if (null !== $this->qualityEnhancement) {
            $res['QualityEnhancement'] = $this->qualityEnhancement;
        }

        if (null !== $this->recordContent) {
            $res['RecordContent'] = $this->recordContent;
        }

        if (null !== $this->recordContentExpires) {
            $res['RecordContentExpires'] = $this->recordContentExpires;
        }

        if (null !== $this->recordEventDuration) {
            $res['RecordEventDuration'] = $this->recordEventDuration;
        }

        if (null !== $this->recordEventFilePaths) {
            if (\is_array($this->recordEventFilePaths)) {
                $res['RecordEventFilePaths'] = [];
                $n1 = 0;
                foreach ($this->recordEventFilePaths as $item1) {
                    $res['RecordEventFilePaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recordEventRegisters) {
            if (\is_array($this->recordEventRegisters)) {
                $res['RecordEventRegisters'] = [];
                $n1 = 0;
                foreach ($this->recordEventRegisters as $item1) {
                    $res['RecordEventRegisters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recording) {
            $res['Recording'] = $this->recording;
        }

        if (null !== $this->recordingAudio) {
            $res['RecordingAudio'] = $this->recordingAudio;
        }

        if (null !== $this->recordingDuration) {
            $res['RecordingDuration'] = $this->recordingDuration;
        }

        if (null !== $this->recordingEndTime) {
            $res['RecordingEndTime'] = $this->recordingEndTime;
        }

        if (null !== $this->recordingExpires) {
            $res['RecordingExpires'] = $this->recordingExpires;
        }

        if (null !== $this->recordingFps) {
            $res['RecordingFps'] = $this->recordingFps;
        }

        if (null !== $this->recordingStartTime) {
            $res['RecordingStartTime'] = $this->recordingStartTime;
        }

        if (null !== $this->recordingUserNotify) {
            $res['RecordingUserNotify'] = $this->recordingUserNotify;
        }

        if (null !== $this->recordingUserNotifyMessage) {
            $res['RecordingUserNotifyMessage'] = $this->recordingUserNotifyMessage;
        }

        if (null !== $this->remoteCoordinate) {
            $res['RemoteCoordinate'] = $this->remoteCoordinate;
        }

        if (null !== $this->resolutionHeight) {
            $res['ResolutionHeight'] = $this->resolutionHeight;
        }

        if (null !== $this->resolutionModel) {
            $res['ResolutionModel'] = $this->resolutionModel;
        }

        if (null !== $this->resolutionWidth) {
            $res['ResolutionWidth'] = $this->resolutionWidth;
        }

        if (null !== $this->resourceGroupCount) {
            $res['ResourceGroupCount'] = $this->resourceGroupCount;
        }

        if (null !== $this->safeMenu) {
            $res['SafeMenu'] = $this->safeMenu;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->scopeValue) {
            if (\is_array($this->scopeValue)) {
                $res['ScopeValue'] = [];
                $n1 = 0;
                foreach ($this->scopeValue as $item1) {
                    $res['ScopeValue'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->screenDisplayMode) {
            $res['ScreenDisplayMode'] = $this->screenDisplayMode;
        }

        if (null !== $this->smoothEnhancement) {
            $res['SmoothEnhancement'] = $this->smoothEnhancement;
        }

        if (null !== $this->statusMonitor) {
            $res['StatusMonitor'] = $this->statusMonitor;
        }

        if (null !== $this->streamingMode) {
            $res['StreamingMode'] = $this->streamingMode;
        }

        if (null !== $this->targetFps) {
            $res['TargetFps'] = $this->targetFps;
        }

        if (null !== $this->taskbar) {
            $res['Taskbar'] = $this->taskbar;
        }

        if (null !== $this->usbRedirect) {
            $res['UsbRedirect'] = $this->usbRedirect;
        }

        if (null !== $this->usbSupplyRedirectRule) {
            if (\is_array($this->usbSupplyRedirectRule)) {
                $res['UsbSupplyRedirectRule'] = [];
                $n1 = 0;
                foreach ($this->usbSupplyRedirectRule as $item1) {
                    $res['UsbSupplyRedirectRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->useTime) {
            $res['UseTime'] = $this->useTime;
        }

        if (null !== $this->videoEncAvgKbps) {
            $res['VideoEncAvgKbps'] = $this->videoEncAvgKbps;
        }

        if (null !== $this->videoEncMaxQP) {
            $res['VideoEncMaxQP'] = $this->videoEncMaxQP;
        }

        if (null !== $this->videoEncMinQP) {
            $res['VideoEncMinQP'] = $this->videoEncMinQP;
        }

        if (null !== $this->videoEncPeakKbps) {
            $res['VideoEncPeakKbps'] = $this->videoEncPeakKbps;
        }

        if (null !== $this->videoEncPolicy) {
            $res['VideoEncPolicy'] = $this->videoEncPolicy;
        }

        if (null !== $this->videoRedirect) {
            $res['VideoRedirect'] = $this->videoRedirect;
        }

        if (null !== $this->visualQuality) {
            $res['VisualQuality'] = $this->visualQuality;
        }

        if (null !== $this->watermark) {
            $res['Watermark'] = $this->watermark;
        }

        if (null !== $this->watermarkAntiCam) {
            $res['WatermarkAntiCam'] = $this->watermarkAntiCam;
        }

        if (null !== $this->watermarkColor) {
            $res['WatermarkColor'] = $this->watermarkColor;
        }

        if (null !== $this->watermarkCustomText) {
            $res['WatermarkCustomText'] = $this->watermarkCustomText;
        }

        if (null !== $this->watermarkDegree) {
            $res['WatermarkDegree'] = $this->watermarkDegree;
        }

        if (null !== $this->watermarkFontSize) {
            $res['WatermarkFontSize'] = $this->watermarkFontSize;
        }

        if (null !== $this->watermarkFontStyle) {
            $res['WatermarkFontStyle'] = $this->watermarkFontStyle;
        }

        if (null !== $this->watermarkPower) {
            $res['WatermarkPower'] = $this->watermarkPower;
        }

        if (null !== $this->watermarkRowAmount) {
            $res['WatermarkRowAmount'] = $this->watermarkRowAmount;
        }

        if (null !== $this->watermarkSecurity) {
            $res['WatermarkSecurity'] = $this->watermarkSecurity;
        }

        if (null !== $this->watermarkTransparencyValue) {
            $res['WatermarkTransparencyValue'] = $this->watermarkTransparencyValue;
        }

        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
        }

        if (null !== $this->wyAssistant) {
            $res['WyAssistant'] = $this->wyAssistant;
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
        if (isset($map['AdminAccess'])) {
            $model->adminAccess = $map['AdminAccess'];
        }

        if (isset($map['AppContentProtection'])) {
            $model->appContentProtection = $map['AppContentProtection'];
        }

        if (isset($map['AuthorizeAccessPolicyRules'])) {
            if (!empty($map['AuthorizeAccessPolicyRules'])) {
                $model->authorizeAccessPolicyRules = [];
                $n1 = 0;
                foreach ($map['AuthorizeAccessPolicyRules'] as $item1) {
                    $model->authorizeAccessPolicyRules[$n1] = authorizeAccessPolicyRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthorizeSecurityPolicyRules'])) {
            if (!empty($map['AuthorizeSecurityPolicyRules'])) {
                $model->authorizeSecurityPolicyRules = [];
                $n1 = 0;
                foreach ($map['AuthorizeSecurityPolicyRules'] as $item1) {
                    $model->authorizeSecurityPolicyRules[$n1] = authorizeSecurityPolicyRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CameraRedirect'])) {
            $model->cameraRedirect = $map['CameraRedirect'];
        }

        if (isset($map['ClientControlMenu'])) {
            $model->clientControlMenu = $map['ClientControlMenu'];
        }

        if (isset($map['ClientTypes'])) {
            if (!empty($map['ClientTypes'])) {
                $model->clientTypes = [];
                $n1 = 0;
                foreach ($map['ClientTypes'] as $item1) {
                    $model->clientTypes[$n1] = clientTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }

        if (isset($map['ColorEnhancement'])) {
            $model->colorEnhancement = $map['ColorEnhancement'];
        }

        if (isset($map['CpdDriveClipboard'])) {
            $model->cpdDriveClipboard = $map['CpdDriveClipboard'];
        }

        if (isset($map['CpuDownGradeDuration'])) {
            $model->cpuDownGradeDuration = $map['CpuDownGradeDuration'];
        }

        if (isset($map['CpuProcessors'])) {
            if (!empty($map['CpuProcessors'])) {
                $model->cpuProcessors = [];
                $n1 = 0;
                foreach ($map['CpuProcessors'] as $item1) {
                    $model->cpuProcessors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CpuProtectedMode'])) {
            $model->cpuProtectedMode = $map['CpuProtectedMode'];
        }

        if (isset($map['CpuRateLimit'])) {
            $model->cpuRateLimit = $map['CpuRateLimit'];
        }

        if (isset($map['CpuSampleDuration'])) {
            $model->cpuSampleDuration = $map['CpuSampleDuration'];
        }

        if (isset($map['CpuSingleRateLimit'])) {
            $model->cpuSingleRateLimit = $map['CpuSingleRateLimit'];
        }

        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }

        if (isset($map['DesktopGroupCount'])) {
            $model->desktopGroupCount = $map['DesktopGroupCount'];
        }

        if (isset($map['DeviceRedirects'])) {
            if (!empty($map['DeviceRedirects'])) {
                $model->deviceRedirects = [];
                $n1 = 0;
                foreach ($map['DeviceRedirects'] as $item1) {
                    $model->deviceRedirects[$n1] = deviceRedirects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DeviceRules'])) {
            if (!empty($map['DeviceRules'])) {
                $model->deviceRules = [];
                $n1 = 0;
                foreach ($map['DeviceRules'] as $item1) {
                    $model->deviceRules[$n1] = deviceRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DisconnectKeepSession'])) {
            $model->disconnectKeepSession = $map['DisconnectKeepSession'];
        }

        if (isset($map['DisconnectKeepSessionTime'])) {
            $model->disconnectKeepSessionTime = $map['DisconnectKeepSessionTime'];
        }

        if (isset($map['DisplayMode'])) {
            $model->displayMode = $map['DisplayMode'];
        }

        if (isset($map['DomainRegisterValue'])) {
            $model->domainRegisterValue = $map['DomainRegisterValue'];
        }

        if (isset($map['DomainResolveRule'])) {
            if (!empty($map['DomainResolveRule'])) {
                $model->domainResolveRule = [];
                $n1 = 0;
                foreach ($map['DomainResolveRule'] as $item1) {
                    $model->domainResolveRule[$n1] = domainResolveRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainResolveRuleType'])) {
            $model->domainResolveRuleType = $map['DomainResolveRuleType'];
        }

        if (isset($map['EndUserApplyAdminCoordinate'])) {
            $model->endUserApplyAdminCoordinate = $map['EndUserApplyAdminCoordinate'];
        }

        if (isset($map['EndUserGroupCoordinate'])) {
            $model->endUserGroupCoordinate = $map['EndUserGroupCoordinate'];
        }

        if (isset($map['FileTransferAddress'])) {
            $model->fileTransferAddress = $map['FileTransferAddress'];
        }

        if (isset($map['FileTransferSpeed'])) {
            $model->fileTransferSpeed = $map['FileTransferSpeed'];
        }

        if (isset($map['FileTransferSpeedLocation'])) {
            $model->fileTransferSpeedLocation = $map['FileTransferSpeedLocation'];
        }

        if (isset($map['GpuAcceleration'])) {
            $model->gpuAcceleration = $map['GpuAcceleration'];
        }

        if (isset($map['Html5Access'])) {
            $model->html5Access = $map['Html5Access'];
        }

        if (isset($map['Html5FileTransfer'])) {
            $model->html5FileTransfer = $map['Html5FileTransfer'];
        }

        if (isset($map['InternetCommunicationProtocol'])) {
            $model->internetCommunicationProtocol = $map['InternetCommunicationProtocol'];
        }

        if (isset($map['InternetPrinter'])) {
            $model->internetPrinter = $map['InternetPrinter'];
        }

        if (isset($map['LocalDrive'])) {
            $model->localDrive = $map['LocalDrive'];
        }

        if (isset($map['MaxReconnectTime'])) {
            $model->maxReconnectTime = $map['MaxReconnectTime'];
        }

        if (isset($map['MemoryDownGradeDuration'])) {
            $model->memoryDownGradeDuration = $map['MemoryDownGradeDuration'];
        }

        if (isset($map['MemoryProcessors'])) {
            if (!empty($map['MemoryProcessors'])) {
                $model->memoryProcessors = [];
                $n1 = 0;
                foreach ($map['MemoryProcessors'] as $item1) {
                    $model->memoryProcessors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MemoryProtectedMode'])) {
            $model->memoryProtectedMode = $map['MemoryProtectedMode'];
        }

        if (isset($map['MemoryRateLimit'])) {
            $model->memoryRateLimit = $map['MemoryRateLimit'];
        }

        if (isset($map['MemorySampleDuration'])) {
            $model->memorySampleDuration = $map['MemorySampleDuration'];
        }

        if (isset($map['MemorySingleRateLimit'])) {
            $model->memorySingleRateLimit = $map['MemorySingleRateLimit'];
        }

        if (isset($map['MobileRestart'])) {
            $model->mobileRestart = $map['MobileRestart'];
        }

        if (isset($map['MobileShutdown'])) {
            $model->mobileShutdown = $map['MobileShutdown'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetRedirect'])) {
            $model->netRedirect = $map['NetRedirect'];
        }

        if (isset($map['NetRedirectRule'])) {
            if (!empty($map['NetRedirectRule'])) {
                $model->netRedirectRule = [];
                $n1 = 0;
                foreach ($map['NetRedirectRule'] as $item1) {
                    $model->netRedirectRule[$n1] = netRedirectRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NoOperationDisconnect'])) {
            $model->noOperationDisconnect = $map['NoOperationDisconnect'];
        }

        if (isset($map['NoOperationDisconnectTime'])) {
            $model->noOperationDisconnectTime = $map['NoOperationDisconnectTime'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['PolicyGroupType'])) {
            $model->policyGroupType = $map['PolicyGroupType'];
        }

        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }

        if (isset($map['PrinterRedirection'])) {
            $model->printerRedirection = $map['PrinterRedirection'];
        }

        if (isset($map['QualityEnhancement'])) {
            $model->qualityEnhancement = $map['QualityEnhancement'];
        }

        if (isset($map['RecordContent'])) {
            $model->recordContent = $map['RecordContent'];
        }

        if (isset($map['RecordContentExpires'])) {
            $model->recordContentExpires = $map['RecordContentExpires'];
        }

        if (isset($map['RecordEventDuration'])) {
            $model->recordEventDuration = $map['RecordEventDuration'];
        }

        if (isset($map['RecordEventFilePaths'])) {
            if (!empty($map['RecordEventFilePaths'])) {
                $model->recordEventFilePaths = [];
                $n1 = 0;
                foreach ($map['RecordEventFilePaths'] as $item1) {
                    $model->recordEventFilePaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RecordEventRegisters'])) {
            if (!empty($map['RecordEventRegisters'])) {
                $model->recordEventRegisters = [];
                $n1 = 0;
                foreach ($map['RecordEventRegisters'] as $item1) {
                    $model->recordEventRegisters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Recording'])) {
            $model->recording = $map['Recording'];
        }

        if (isset($map['RecordingAudio'])) {
            $model->recordingAudio = $map['RecordingAudio'];
        }

        if (isset($map['RecordingDuration'])) {
            $model->recordingDuration = $map['RecordingDuration'];
        }

        if (isset($map['RecordingEndTime'])) {
            $model->recordingEndTime = $map['RecordingEndTime'];
        }

        if (isset($map['RecordingExpires'])) {
            $model->recordingExpires = $map['RecordingExpires'];
        }

        if (isset($map['RecordingFps'])) {
            $model->recordingFps = $map['RecordingFps'];
        }

        if (isset($map['RecordingStartTime'])) {
            $model->recordingStartTime = $map['RecordingStartTime'];
        }

        if (isset($map['RecordingUserNotify'])) {
            $model->recordingUserNotify = $map['RecordingUserNotify'];
        }

        if (isset($map['RecordingUserNotifyMessage'])) {
            $model->recordingUserNotifyMessage = $map['RecordingUserNotifyMessage'];
        }

        if (isset($map['RemoteCoordinate'])) {
            $model->remoteCoordinate = $map['RemoteCoordinate'];
        }

        if (isset($map['ResolutionHeight'])) {
            $model->resolutionHeight = $map['ResolutionHeight'];
        }

        if (isset($map['ResolutionModel'])) {
            $model->resolutionModel = $map['ResolutionModel'];
        }

        if (isset($map['ResolutionWidth'])) {
            $model->resolutionWidth = $map['ResolutionWidth'];
        }

        if (isset($map['ResourceGroupCount'])) {
            $model->resourceGroupCount = $map['ResourceGroupCount'];
        }

        if (isset($map['SafeMenu'])) {
            $model->safeMenu = $map['SafeMenu'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['ScopeValue'])) {
            if (!empty($map['ScopeValue'])) {
                $model->scopeValue = [];
                $n1 = 0;
                foreach ($map['ScopeValue'] as $item1) {
                    $model->scopeValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScreenDisplayMode'])) {
            $model->screenDisplayMode = $map['ScreenDisplayMode'];
        }

        if (isset($map['SmoothEnhancement'])) {
            $model->smoothEnhancement = $map['SmoothEnhancement'];
        }

        if (isset($map['StatusMonitor'])) {
            $model->statusMonitor = $map['StatusMonitor'];
        }

        if (isset($map['StreamingMode'])) {
            $model->streamingMode = $map['StreamingMode'];
        }

        if (isset($map['TargetFps'])) {
            $model->targetFps = $map['TargetFps'];
        }

        if (isset($map['Taskbar'])) {
            $model->taskbar = $map['Taskbar'];
        }

        if (isset($map['UsbRedirect'])) {
            $model->usbRedirect = $map['UsbRedirect'];
        }

        if (isset($map['UsbSupplyRedirectRule'])) {
            if (!empty($map['UsbSupplyRedirectRule'])) {
                $model->usbSupplyRedirectRule = [];
                $n1 = 0;
                foreach ($map['UsbSupplyRedirectRule'] as $item1) {
                    $model->usbSupplyRedirectRule[$n1] = usbSupplyRedirectRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UseTime'])) {
            $model->useTime = $map['UseTime'];
        }

        if (isset($map['VideoEncAvgKbps'])) {
            $model->videoEncAvgKbps = $map['VideoEncAvgKbps'];
        }

        if (isset($map['VideoEncMaxQP'])) {
            $model->videoEncMaxQP = $map['VideoEncMaxQP'];
        }

        if (isset($map['VideoEncMinQP'])) {
            $model->videoEncMinQP = $map['VideoEncMinQP'];
        }

        if (isset($map['VideoEncPeakKbps'])) {
            $model->videoEncPeakKbps = $map['VideoEncPeakKbps'];
        }

        if (isset($map['VideoEncPolicy'])) {
            $model->videoEncPolicy = $map['VideoEncPolicy'];
        }

        if (isset($map['VideoRedirect'])) {
            $model->videoRedirect = $map['VideoRedirect'];
        }

        if (isset($map['VisualQuality'])) {
            $model->visualQuality = $map['VisualQuality'];
        }

        if (isset($map['Watermark'])) {
            $model->watermark = $map['Watermark'];
        }

        if (isset($map['WatermarkAntiCam'])) {
            $model->watermarkAntiCam = $map['WatermarkAntiCam'];
        }

        if (isset($map['WatermarkColor'])) {
            $model->watermarkColor = $map['WatermarkColor'];
        }

        if (isset($map['WatermarkCustomText'])) {
            $model->watermarkCustomText = $map['WatermarkCustomText'];
        }

        if (isset($map['WatermarkDegree'])) {
            $model->watermarkDegree = $map['WatermarkDegree'];
        }

        if (isset($map['WatermarkFontSize'])) {
            $model->watermarkFontSize = $map['WatermarkFontSize'];
        }

        if (isset($map['WatermarkFontStyle'])) {
            $model->watermarkFontStyle = $map['WatermarkFontStyle'];
        }

        if (isset($map['WatermarkPower'])) {
            $model->watermarkPower = $map['WatermarkPower'];
        }

        if (isset($map['WatermarkRowAmount'])) {
            $model->watermarkRowAmount = $map['WatermarkRowAmount'];
        }

        if (isset($map['WatermarkSecurity'])) {
            $model->watermarkSecurity = $map['WatermarkSecurity'];
        }

        if (isset($map['WatermarkTransparencyValue'])) {
            $model->watermarkTransparencyValue = $map['WatermarkTransparencyValue'];
        }

        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        if (isset($map['WyAssistant'])) {
            $model->wyAssistant = $map['WyAssistant'];
        }

        return $model;
    }
}
