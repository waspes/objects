<?php

declare(strict_types=1);

namespace Waspes\Tests\Objects;

final class LicenseTest extends TestCase
{
    /**
     * @test
     */
    public function isCreatedWithOptionalProperties(): void
    {
        $object = $this->createLicense(
            'Apache 2.0',
            'https://www.apache.org/licenses/LICENSE-2.0.html',
            $this->createExtensionMap(['x-foo' => null])
        );
        self::assertJsonObject([
            'name' => 'Apache 2.0',
            'url' => 'https://www.apache.org/licenses/LICENSE-2.0.html',
            'x-foo' => null,
        ], $object);
    }

    /**
     * @test
     */
    public function isCreatedWithoutOptionalProperties(): void
    {
        $object = $this->createLicense(
            'Apache 2.0'
        );
        self::assertJsonObject([
            'name' => 'Apache 2.0',
        ], $object);
    }
}
