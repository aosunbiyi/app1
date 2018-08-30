<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RoomType Entity
 *
 * @property int $id
 * @property string $room_type_name
 * @property string $alias
 * @property int $sort_key
 * @property string $description
 * @property int $max_adult
 * @property int $max_child
 * @property string $back_color
 * @property int $inactive
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Room[] $rooms
 * @property \App\Model\Entity\Rate[] $rates
 */
class RoomType extends Entity
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
        'room_type_name' => true,
        'alias' => true,
        'sort_key' => true,
        'description' => true,
        'max_adult' => true,
        'max_child' => true,
        'back_color' => true,
        'inactive' => true,
        'created' => true,
        'modified' => true,
        'rooms' => true,
        'rates' => true
    ];
}
