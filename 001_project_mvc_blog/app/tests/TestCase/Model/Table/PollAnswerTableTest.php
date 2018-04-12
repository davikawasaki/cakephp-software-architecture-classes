<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PollAnswerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PollAnswerTable Test Case
 */
class PollAnswerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PollAnswerTable
     */
    public $PollAnswer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.poll_answer',
        'app.poll'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PollAnswer') ? [] : ['className' => PollAnswerTable::class];
        $this->PollAnswer = TableRegistry::get('PollAnswer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PollAnswer);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
