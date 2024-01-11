<?php
namespace Tests\Unit\Seo;

use PHPUnit\Framework\TestCase;

class OrganizationTest extends TestCase
{
    use Fixture\Schema;

    /**
     * @test
     */
    public function organization(): array
    {
        $schema = $this->schema('/', 'Organization');
        $this->assertNotNull($schema, 'Failed to recognize schema "Organization" in view.');
        return $schema;
    }

    /**
     * @test
     * @depends organization
     */
    public function name(array $organization): void
    {
        $this->assertThat($organization['name'],
            $this->identicalTo('Makana Sp. z o.o.'));
    }

    /**
     * @test
     * @depends organization
     */
    public function email(array $organization): void
    {
        $this->assertThat($organization['email'],
            $this->identicalTo('support@4programmers.net'));
    }

    /**
     * @test
     * @depends organization
     */
    public function logo(array $organization): void
    {
        $this->assertThat($organization['logo'],
            $this->identicalTo('https://www.4programmers.net/img/apple-touch.png'));
    }

    /**
     * @test
     * @depends organization
     */
    public function socialLinks(array $organization): void
    {
        $this->assertThat($organization['sameAs'],
            $this->identicalTo([
                'https://www.facebook.com/4programmers.net/',
                'https://www.linkedin.com/company/4programmers/about/',
                'https://github.com/pradoslaw/coyote',
            ]));
    }

    /**
     * @test
     * @depends organization
     */
    public function address(array $organization): void
    {
        $address = $organization['address'];
        $this->assertSame('PostalAddress', $address['@type']);
        $this->assertSame('ul. Krupnicza 13', $address['streetAddress']);
        $this->assertSame('50-075', $address['postalCode']);
        $this->assertSame('Wrocław', $address['addressLocality']);
        $this->assertSame('Dolnośląskie', $address['addressRegion']);
        $this->assertSame('PL', $address['addressCountry']);
    }
}
