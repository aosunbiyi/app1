<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaundryPackagingTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaundryPackagingTypesTable Test Case
 */
class LaundryPackagingTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LaundryPackagingTypesTable
     */
    public $LaundryPackagingTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.laundry_packaging_types',
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
        $config = TableRegistry::getTableLocator()->exists('LaundryPackagingTypes') ? [] : ['className' => LaundryPackagingTypesTable::class];
        $this->LaundryPackagingTypes = TableRegistry::getTableLocator()->get('LaundryPackagingTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LaundryPackagingTypes);

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
