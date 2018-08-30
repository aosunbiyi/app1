<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoomsAmenity Entity
 *
 * @property int $room_id
 * @property int $amenity_id
 *
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\Amenity $amenity
 */
class RoomsAmenity extends Entity
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
        'room' => true,
        'amenity' => true
    ];
}
