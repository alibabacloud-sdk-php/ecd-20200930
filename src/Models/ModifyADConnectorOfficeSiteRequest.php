<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyADConnectorOfficeSiteRequest extends Model
{
    /**
     * @var string
     */
    public $adHostname;

    /**
     * @var string[]
     */
    public $dnsAddress;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainPassword;

    /**
     * @var string
     */
    public $domainUserName;

    /**
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @var string
     */
    public $OUName;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $subDomainDnsAddress;

    /**
     * @var string
     */
    public $subDomainName;
    protected $_name = [
        'adHostname'          => 'AdHostname',
        'dnsAddress'          => 'DnsAddress',
        'domainName'          => 'DomainName',
        'domainPassword'      => 'DomainPassword',
        'domainUserName'      => 'DomainUserName',
        'mfaEnabled'          => 'MfaEnabled',
        'OUName'              => 'OUName',
        'officeSiteId'        => 'OfficeSiteId',
        'officeSiteName'      => 'OfficeSiteName',
        'regionId'            => 'RegionId',
        'subDomainDnsAddress' => 'SubDomainDnsAddress',
        'subDomainName'       => 'SubDomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adHostname) {
            $res['AdHostname'] = $this->adHostname;
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
        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }
        if (null !== $this->OUName) {
            $res['OUName'] = $this->OUName;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subDomainDnsAddress) {
            $res['SubDomainDnsAddress'] = $this->subDomainDnsAddress;
        }
        if (null !== $this->subDomainName) {
            $res['SubDomainName'] = $this->subDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyADConnectorOfficeSiteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdHostname'])) {
            $model->adHostname = $map['AdHostname'];
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
        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }
        if (isset($map['OUName'])) {
            $model->OUName = $map['OUName'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubDomainDnsAddress'])) {
            if (!empty($map['SubDomainDnsAddress'])) {
                $model->subDomainDnsAddress = $map['SubDomainDnsAddress'];
            }
        }
        if (isset($map['SubDomainName'])) {
            $model->subDomainName = $map['SubDomainName'];
        }

        return $model;
    }
}
