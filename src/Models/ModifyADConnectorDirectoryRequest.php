<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyADConnectorDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainUserName;

    /**
     * @var string
     */
    public $domainPassword;

    /**
     * @var string
     */
    public $directoryName;

    /**
     * @var string
     */
    public $subDomainName;

    /**
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @var string[]
     */
    public $subDomainDnsAddress;
    protected $_name = [
        'regionId'            => 'RegionId',
        'directoryId'         => 'DirectoryId',
        'domainName'          => 'DomainName',
        'domainUserName'      => 'DomainUserName',
        'domainPassword'      => 'DomainPassword',
        'directoryName'       => 'DirectoryName',
        'subDomainName'       => 'SubDomainName',
        'mfaEnabled'          => 'MfaEnabled',
        'dnsAddress'          => 'DnsAddress',
        'subDomainDnsAddress' => 'SubDomainDnsAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainUserName) {
            $res['DomainUserName'] = $this->domainUserName;
        }
        if (null !== $this->domainPassword) {
            $res['DomainPassword'] = $this->domainPassword;
        }
        if (null !== $this->directoryName) {
            $res['DirectoryName'] = $this->directoryName;
        }
        if (null !== $this->subDomainName) {
            $res['SubDomainName'] = $this->subDomainName;
        }
        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }
        if (null !== $this->dnsAddress) {
            $res['DnsAddress'] = $this->dnsAddress;
        }
        if (null !== $this->subDomainDnsAddress) {
            $res['SubDomainDnsAddress'] = $this->subDomainDnsAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyADConnectorDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainUserName'])) {
            $model->domainUserName = $map['DomainUserName'];
        }
        if (isset($map['DomainPassword'])) {
            $model->domainPassword = $map['DomainPassword'];
        }
        if (isset($map['DirectoryName'])) {
            $model->directoryName = $map['DirectoryName'];
        }
        if (isset($map['SubDomainName'])) {
            $model->subDomainName = $map['SubDomainName'];
        }
        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }
        if (isset($map['DnsAddress'])) {
            if (!empty($map['DnsAddress'])) {
                $model->dnsAddress = $map['DnsAddress'];
            }
        }
        if (isset($map['SubDomainDnsAddress'])) {
            if (!empty($map['SubDomainDnsAddress'])) {
                $model->subDomainDnsAddress = $map['SubDomainDnsAddress'];
            }
        }

        return $model;
    }
}
