<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoomTypesRate Entity
 *
 * @property int $room_type_id
 * @property int $rate_id
 *
 * @property \App\Model\Entity\RoomType $room_type
 * @property \App\Model\Entity\Rate $rate
 */
class RoomTypesRate extends Entity
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
        'room_type' => true,
        'rate' => true
    ];
}
