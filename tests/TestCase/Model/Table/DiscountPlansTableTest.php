<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiscountPlansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiscountPlansTable Test Case
 */
class DiscountPlansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiscountPlansTable
     */
    public $DiscountPlans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.discount_plans',
        'app.reserved_rooms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DiscountPlans') ? [] : ['className' => DiscountPlansTable::class];
        $this->DiscountPlans = TableRegistry::getTableLocator()->get('DiscountPlans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DiscountPlans);

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
