<?php
/**
 * Tests for ChronoVeil
 */

use PHPUnit\Framework\TestCase;
use Chronoveil\Chronoveil;

class ChronoveilTest extends TestCase {
    private Chronoveil $instance;

    protected function setUp(): void {
        $this->instance = new Chronoveil(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chronoveil::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
