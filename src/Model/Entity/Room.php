<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property int $room_type_id
 * @property int $floor_id
 * @property string $alias
 * @property int $sort_key
 * @property string $room_name
 * @property int $room_owner_id
 * @property string $phone_extension
 * @property string $data_extension
 * @property string $keycard_alias
 * @property string $power_code
 * @property string $remark
 * @property int $inactive
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\RoomType $room_type
 * @property \App\Model\Entity\Floor $floor
 * @property \App\Model\Entity\RoomOwner $room_owner
 * @property \App\Model\Entity\RoomImage[] $room_images
 * @property \App\Model\Entity\Amenity[] $amenities
 * @property \App\Model\Entity\WeekDay[] $week_days
 */
class Room extends Entity
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
        'room_type_id' => true,
        'floor_id' => true,
        'alias' => true,
        'sort_key' => true,
        'room_name' => true,
        'room_owner_id' => true,
        'phone_extension' => true,
        'data_extension' => true,
        'keycard_alias' => true,
        'power_code' => true,
        'remark' => true,
        'inactive' => true,
        'created' => true,
        'modified' => true,
        'room_type' => true,
        'floor' => true,
        'room_owner' => true,
        'room_images' => true,
        'amenities' => true,
        'week_days' => true
    ];
}
