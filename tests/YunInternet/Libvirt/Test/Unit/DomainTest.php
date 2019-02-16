<?php
/**
 * Created by PhpStorm.
 * Date: 2018/12/27
 * Time: 19:25
 */

namespace YunInternet\Libvirt\Test\Unit;


use YunInternet\Libvirt\Constants\Domain\VirDomainXMLFlags;
use YunInternet\Libvirt\Test\BaseConnectionTestCase;

class DomainTest extends BaseConnectionTestCase
{
    private $domains;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->domains = $this->getLibvirtConnection()->listDomains();
    }

    public function testDomainGetName()
    {
        foreach ($this->domains as $domain) {
            var_dump($domain->libvirt_domain_get_name());
        }

        $this->assertTrue(true);
    }

    public function testDomainGetInfo()
    {
        foreach ($this->domains as $domain) {
            var_dump($domain->libvirt_domain_get_info());
        }

        $this->assertTrue(true);
    }

    public function testDomainGetXML()
    {
        foreach ($this->domains as $domain) {
            echo $domain->libvirt_domain_get_xml_desc(null, VirDomainXMLFlags::VIR_DOMAIN_XML_SECURE);
        }

        $this->assertTrue(true);
    }

    public function testDestroyDomain()
    {
        foreach ($this->domains as $domain) {
            var_dump($domain->libvirt_domain_destroy());
        }

        $this->assertTrue(true);
    }

    public function testDomainCreate()
    {
        foreach ($this->domains as $domain) {
            var_dump($domain->libvirt_domain_create());
        }

        $this->assertTrue(true);
    }
}