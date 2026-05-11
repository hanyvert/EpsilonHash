<?php
/**
 * Tests for EpsilonHash
 */

use PHPUnit\Framework\TestCase;
use Epsilonhash\Epsilonhash;

class EpsilonhashTest extends TestCase {
    private Epsilonhash $instance;

    protected function setUp(): void {
        $this->instance = new Epsilonhash(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Epsilonhash::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
