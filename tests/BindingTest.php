<?php

declare(strict_types=1);

namespace Dub\Laravel;

use Dub\Analytics;
use Dub\Domains;
use Dub\Dub;
use Dub\Events;
use Dub\Laravel\Tests\PackageTestCase;
use Dub\Links;
use Dub\Metatags;
use Dub\QRCodes;
use Dub\Tags;
use Dub\Track;
use Dub\Workspaces;
use PHPUnit\Framework\Attributes\Test;

final class BindingTest extends PackageTestCase
{
    protected Dub $dub;

    protected function setUp(): void
    {
        parent::setUp();

        $this->dub = \resolve(Dub::class);
    }

    #[Test]
    public function it_can_get_links(): void
    {
        $this->assertInstanceOf(
            expected: Links::class,
            actual: $this->dub->links,
        );
    }

    #[Test]
    public function it_can_get_qr_codes(): void
    {
        $this->assertInstanceOf(
            expected: QRCodes::class,
            actual: $this->dub->qrCodes,
        );
    }

    #[Test]
    public function it_can_get_analytics(): void
    {
        $this->assertInstanceOf(
            expected: Analytics::class,
            actual: $this->dub->analytics,
        );
    }

    #[Test]
    public function it_can_get_events(): void
    {
        $this->assertInstanceOf(
            expected: Events::class,
            actual: $this->dub->events,
        );
    }

    #[Test]
    public function it_can_get_workspaces(): void
    {
        $this->assertInstanceOf(
            expected: Workspaces::class,
            actual: $this->dub->workspaces,
        );
    }

    #[Test]
    public function it_can_get_tags(): void
    {
        $this->assertInstanceOf(
            expected: Tags::class,
            actual: $this->dub->tags,
        );
    }

    #[Test]
    public function it_can_get_domains(): void
    {
        $this->assertInstanceOf(
            expected: Domains::class,
            actual: $this->dub->domains,
        );
    }

    #[Test]
    public function it_can_track(): void
    {
        $this->assertInstanceOf(
            expected: Track::class,
            actual: $this->dub->track,
        );
    }

    #[Test]
    public function it_can_get_metatags(): void
    {
        $this->assertInstanceOf(
            expected: Metatags::class,
            actual: $this->dub->metatags,
        );
    }
}
