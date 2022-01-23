<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @coversNothing
 */
class SampleTest extends TestCase
{
  public function testTrue(): void
  {
    self::assertTrue(true);
  }
}