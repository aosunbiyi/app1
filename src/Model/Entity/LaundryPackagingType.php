<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LaundryPackagingType Entity
 *
 * @property int $id
 * @property string $packaging_name
 * @property string $packaging_image
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\LaundryGuestLaundryTransaction[] $laundry_guest_laundry_transactions
 * @property \App\Model\Entity\LaundryHotelLaundryTransaction[] $laundry_hotel_laundry_transactions
 */
class LaundryPackagingType extends Entity
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
        'packaging_name' => true,
        'packaging_image' => true,
        'created' => true,
        'modified' => true,
        'laundry_guest_laundry_transactions' => true,
        'laundry_hotel_laundry_transactions' => true
    ];
}
