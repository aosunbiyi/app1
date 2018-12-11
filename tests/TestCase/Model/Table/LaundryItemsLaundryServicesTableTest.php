<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaundryItemsLaundryServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaundryItemsLaundryServicesTable Test Case
 */
class LaundryItemsLaundryServicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LaundryItemsLaundryServicesTable
     */
    public $LaundryItemsLaundryServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.laundry_items_laundry_services',
        'app.laundry_items',
        'app.laundry_services'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LaundryItemsLaundryServices') ? [] : ['className' => LaundryItemsLaundryServicesTable::class];
        $this->LaundryItemsLaundryServices = TableRegistry::getTableLocator()->get('LaundryItemsLaundryServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LaundryItemsLaundryServices);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
