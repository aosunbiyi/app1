<?php
namespace App\Test\TestCase\Controller;

use App\Controller\LaundryItemsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\LaundryItemsController Test Case
 */
class LaundryItemsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.laundry_items',
        'app.laundry_item_categories',
        'app.laundry_guest_laundry_transaction_items',
        'app.laundry_hotel_laundry_transaction_items',
        'app.laundry_services',
        'app.laundry_items_laundry_services'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
