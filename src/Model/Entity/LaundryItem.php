<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LaundryItem Entity
 *
 * @property int $id
 * @property string $item_name
 * @property string $code
 * @property int $laundry_item_category_id
 * @property string $item_type
 * @property float $charges
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\LaundryItemCategory $laundry_item_category
 * @property \App\Model\Entity\LaundryGuestLaundryTransactionItem[] $laundry_guest_laundry_transaction_items
 * @property \App\Model\Entity\LaundryHotelLaundryTransactionItem[] $laundry_hotel_laundry_transaction_items
 * @property \App\Model\Entity\LaundryService[] $laundry_services
 */
class LaundryItem extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'item_name' => true,
        'code' => true,
        'laundry_item_category_id' => true,
        'item_type' => true,
        'charges' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'laundry_item_category' => true,
        'laundry_guest_laundry_transaction_items' => true,
        'laundry_hotel_laundry_transaction_items' => true,
        'laundry_services' => true
    ];
}
