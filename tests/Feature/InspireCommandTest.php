<?php

declare(strict_types=1);

/**
 * This file is part of the guanguans/music-dl.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Tests\Feature;

it('inspire artisans', function (): void {
    $this->artisan('inspire')->assertExitCode(0);
});
