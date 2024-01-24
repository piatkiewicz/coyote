<?php
namespace Tests\Unit\Canonical\TrailingSlash;

use PHPUnit\Framework\TestCase;
use Tests\Unit\Canonical;

class Test extends TestCase
{
    use Canonical\Fixture\Assertion;

    /**
     * @test
     */
    public function forumCategories()
    {
        $this->assertRedirectGet('/Forum/Categories/', '/Forum/Categories');
    }

    /**
     * @test
     */
    public function job()
    {
        $this->assertRedirectGet('/Praca/', '/Praca');
    }

    /**
     * @test
     */
    public function microblog()
    {
        $this->assertRedirectGet('/Mikroblogi/', '/Mikroblogi');
    }

    /**
     * @test
     */
    public function homepage()
    {
        $this->assertCanonicalGet('/');
    }

    /**
     * @test
     */
    public function homepageQueryParam()
    {
        $this->assertCanonicalGet('/?query=param');
    }

    /**
     * @test
     */
    public function queryParam()
    {
        $this->assertRedirectGet('/Forum/?query=param', '/Forum?query=param');
    }
}
