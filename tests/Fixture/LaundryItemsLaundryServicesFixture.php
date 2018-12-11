<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LaundryItemsLaundryServicesFixture
 *
 */
class LaundryItemsLaundryServicesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'laundry_item_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'laundry_service_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'laundry_service_key9800' => ['type' => 'index', 'columns' => ['laundry_service_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['laundry_item_id', 'laundry_service_id'], 'length' => []],
            'laundry_item_key6700' => ['type' => 'foreign', 'columns' => ['laundry_item_id'], 'references' => ['laundry_items', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'laundry_service_key9800' => ['type' => 'foreign', 'columns' => ['laundry_service_id'], 'references' => ['laundry_services', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'laundry_item_id' => 1,
                'laundry_service_id' => 1
            ],
        ];
        parent::init();
    }
}
