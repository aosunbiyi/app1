<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaundryServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaundryServicesTable Test Case
 */
class LaundryServicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LaundryServicesTable
     */
    public $LaundryServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.laundry_services',
        'app.laundry_guest_laundry_transactions',
        'app.laundry_hotel_laundry_transactions',
        'app.laundry_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LaundryServices') ? [] : ['className' => LaundryServicesTable::class];
        $this->LaundryServices = TableRegistry::getTableLocator()->get('LaundryServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LaundryServices);

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
