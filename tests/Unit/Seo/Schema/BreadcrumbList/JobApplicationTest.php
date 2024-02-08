<?php
namespace Tests\Unit\Seo\Schema\BreadcrumbList;

use PHPUnit\Framework\TestCase;
use Tests\Unit\BaseFixture;
use Tests\Unit\BaseFixture\Constraint\ArrayStructure;
use Tests\Unit\Seo;

class JobApplicationTest extends TestCase
{
    use BaseFixture\Server\RelativeUri;
    use Seo\Schema\Fixture\JobOffer;

    public function test(): void
    {
        [$breadcrumbList, $id] = $this->jobOfferSchema('Orange offer');
        $this->assertThat(
            $breadcrumbList['itemListElement'][1],
            new ArrayStructure([
                '@id'  => $this->relativeUri("/Praca/$id-orange_offer"),
                'item' => $this->relativeUri("/Praca/$id-orange_offer"),
            ]));
    }
}
