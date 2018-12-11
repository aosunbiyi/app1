<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransportaionStatitionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransportaionStatitionsTable Test Case
 */
class TransportaionStatitionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransportaionStatitionsTable
     */
    public $TransportaionStatitions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transportaion_statitions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TransportaionStatitions') ? [] : ['className' => TransportaionStatitionsTable::class];
        $this->TransportaionStatitions = TableRegistry::getTableLocator()->get('TransportaionStatitions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransportaionStatitions);

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
}
