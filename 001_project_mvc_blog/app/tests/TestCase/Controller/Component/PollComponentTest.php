<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\PollComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\PollComponent Test Case
 */
class PollComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\PollComponent
     */
    public $Poll;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Poll = new PollComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Poll);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
