<?php
namespace Tests\Browser;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tests\Unit\BaseFixture\Server\Laravel;

class NginxTest extends TestCase
{
    use Laravel\Application;

    #[Test]
    public function staticFile(): void
    {
        $response = $this->get('http://nginx/robots.txt');
        $this->assertSame(200, $response->status());
    }

    #[Test]
    public function trailingPhpExtension(): void
    {
        $response = $this->get("http://nginx/Forum/Foo/bar.php");
        $this->assertSame(404, $response->status());
        $this->assertSame("No input file specified.\n", $response->body());
    }

    #[Test]
    public function indexPhp(): void
    {
        /**
         * This shouldn't even be a real case, but for some reason, index.php is
         * in public/ directory. Without exceptional case for this file, nginx
         * would serve this with try_files, which would serve index.php as
         * static file. We need exceptional case to make sure index.php is
         * executed, not served.
         * If index.php is moved outside of public/, then this case can be removed.
         */
        $response = $this->get('http://nginx/index.php');
        $this->assertSame(301, $response->status());
        $this->assertSame('http://nginx/', $response->header('Location'));
    }

    private function get(string $uri): Response
    {
        return Http::withOptions(['allow_redirects' => false])->get($uri);
    }
}
