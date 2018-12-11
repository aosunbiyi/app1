<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransportationTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransportationTypesTable Test Case
 */
class TransportationTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransportationTypesTable
     */
    public $TransportationTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transportation_types',
        'app.transportations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TransportationTypes') ? [] : ['className' => TransportationTypesTable::class];
        $this->TransportationTypes = TableRegistry::getTableLocator()->get('TransportationTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransportationTypes);

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
