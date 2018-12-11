<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaundryHotelServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaundryHotelServicesTable Test Case
 */
class LaundryHotelServicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LaundryHotelServicesTable
     */
    public $LaundryHotelServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.laundry_hotel_services',
        'app.laundry_guest_laundry_transactions',
        'app.laundry_hotel_laundry_transactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LaundryHotelServices') ? [] : ['className' => LaundryHotelServicesTable::class];
        $this->LaundryHotelServices = TableRegistry::getTableLocator()->get('LaundryHotelServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LaundryHotelServices);

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
