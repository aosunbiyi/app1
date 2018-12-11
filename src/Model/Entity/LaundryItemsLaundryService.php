<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LaundryItemsLaundryService Entity
 *
 * @property int $laundry_item_id
 * @property int $laundry_service_id
 *
 * @property \App\Model\Entity\LaundryItem $laundry_item
 * @property \App\Model\Entity\LaundryService $laundry_service
 */
class LaundryItemsLaundryService extends Entity
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
        'laundry_item' => true,
        'laundry_service' => true
    ];
}
