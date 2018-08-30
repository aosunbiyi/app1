<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoomOwner Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $description
 * @property string $room_plan
 * @property float $amount
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Room[] $rooms
 */
class RoomOwner extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'description' => true,
        'room_plan' => true,
        'amount' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'phone' => true,
        'fax' => true,
        'email' => true,
        'created' => true,
        'modified' => true,
        'rooms' => true
    ];
}
