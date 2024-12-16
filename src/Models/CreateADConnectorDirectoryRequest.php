<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateADConnectorDirectoryRequest extends Model
{
    /**
     * @description The method in which the cloud computer is connected.
     *
     * Valid values:
     *
     *   VPC
     *
     * <!-- -->
     *
     *   Internet (default)
     *
     * <!-- -->
     *
     *   Any
     *
     * <!-- -->
     * @example Internet
     *
     * @var string
     */
    public $desktopAccessType;

    /**
     * @description The directory name. The name must be 2 to 255 characters in length. The name must start with a letter but cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * This parameter is required.
     * @example testDirectoryName
     *
     * @var string
     */
    public $directoryName;

    /**
     * @description The IP address of the DNS server corresponding to the enterprise AD. You can specify only one IP address. Make sure that the specified IP address is accessible in the network of the selected vSwitch.
     *
     * This parameter is required.
     * @example ``127.0.**.**``
     *
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @description The fully qualified domain name (FQDN) of the enterprise AD system. The value must contain the hostname and the domain name. You can register each FQDN only once.
     *
     * This parameter is required.
     * @example corp.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The password of the domain administrator. The password can be up to 64 characters in length.
     *
     * This parameter is required.
     * @example testPassword
     *
     * @var string
     */
    public $domainPassword;

    /**
     * @description The username of the domain administrator. The username can be up to 64 characters in length.
     *
     * This parameter is required.
     * @example sAMAccountName
     *
     * @var string
     */
    public $domainUserName;

    /**
     * @description Specifies whether to grant the local administrator permissions to users that are authorized to use cloud computers in the office network.
     *
     * Valid values:
     *
     *   <!-- -->
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $enableAdminAccess;

    /**
     * @description Specifies whether to enable Multi-Factor Authentication (MFA). After you enable MFA, all AD users in the directory must enter a dynamic verification code generated by the virtual MFA device in addition to a correct password when they log on to a cloud computer.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   <!-- -->
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the AD connector.
     *
     * - 2 (Advanced)
     * @example 1
     *
     * @var int
     */
    public $specification;

    /**
     * @description The DNS address of the existing AD subdomain.\\
     * If you specify the `SubDomainName` parameter but you do not specify this parameter, the DNS address of the subdomain is the same as the DNS address of the parent domain.
     * @example ``127.0.**.**``
     *
     * @var string[]
     */
    public $subDomainDnsAddress;

    /**
     * @description The FQDN of the enterprise AD subdomain. The value must contain the hostname and the subdomain name.
     *
     * @example child.example.com
     *
     * @var string
     */
    public $subDomainName;

    /**
     * @description Details of the vSwitch IDs. You can specify only one vSwitch ID.
     *
     * This parameter is required.
     * @example vsw-bp19ocz3erfx15uon****
     *
     * @var string[]
     */
    public $vSwitchId;
    protected $_name = [
        'desktopAccessType'   => 'DesktopAccessType',
        'directoryName'       => 'DirectoryName',
        'dnsAddress'          => 'DnsAddress',
        'domainName'          => 'DomainName',
        'domainPassword'      => 'DomainPassword',
        'domainUserName'      => 'DomainUserName',
        'enableAdminAccess'   => 'EnableAdminAccess',
        'mfaEnabled'          => 'MfaEnabled',
        'regionId'            => 'RegionId',
        'specification'       => 'Specification',
        'subDomainDnsAddress' => 'SubDomainDnsAddress',
        'subDomainName'       => 'SubDomainName',
        'vSwitchId'           => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopAccessType) {
            $res['DesktopAccessType'] = $this->desktopAccessType;
        }
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }
        if (null !== $this->dnsAddress) {
            $res['DnsAddress'] = $this->dnsAddress;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainPassword) {
            $res['DomainPassword'] = $this->domainPassword;
        }
        if (null !== $this->domainUserName) {
            $res['DomainUserName'] = $this->domainUserName;
        }
        if (null !== $this->enableAdminAccess) {
            $res['EnableAdminAccess'] = $this->enableAdminAccess;
        }
        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->subDomainDnsAddress) {
            $res['SubDomainDnsAddress'] = $this->subDomainDnsAddress;
        }
        if (null !== $this->subDomainName) {
            $res['SubDomainName'] = $this->subDomainName;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateADConnectorDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopAccessType'])) {
            $model->desktopAccessType = $map['DesktopAccessType'];
        }
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }
        if (isset($map['DnsAddress'])) {
            if (!empty($map['DnsAddress'])) {
                $model->dnsAddress = $map['DnsAddress'];
            }
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainPassword'])) {
            $model->domainPassword = $map['DomainPassword'];
        }
        if (isset($map['DomainUserName'])) {
            $model->domainUserName = $map['DomainUserName'];
        }
        if (isset($map['EnableAdminAccess'])) {
            $model->enableAdminAccess = $map['EnableAdminAccess'];
        }
        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['SubDomainDnsAddress'])) {
            if (!empty($map['SubDomainDnsAddress'])) {
                $model->subDomainDnsAddress = $map['SubDomainDnsAddress'];
            }
        }
        if (isset($map['SubDomainName'])) {
            $model->subDomainName = $map['SubDomainName'];
        }
        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->vSwitchId = $map['VSwitchId'];
            }
        }

        return $model;
    }
}
