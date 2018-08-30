<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rate Entity
 *
 * @property int $id
 * @property int $rate_type_id
 * @property string $rate_name
 * @property float $amount
 * @property int $isweekday
 * @property int $isspecial
 * @property \Cake\I18n\FrozenTime $start_date
 * @property \Cake\I18n\FrozenTime $end_date
 * @property int $isactive
 * @property float $extra_adult
 * @property float $extra_child
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\RateType $rate_type
 * @property \App\Model\Entity\RoomType[] $room_types
 */
class Rate extends Entity
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
        'rate_type_id' => true,
        'rate_name' => true,
        'amount' => true,
        'isweekday' => true,
        'isspecial' => true,
        'start_date' => true,
        'end_date' => true,
        'isactive' => true,
        'extra_adult' => true,
        'extra_child' => true,
        'created' => true,
        'modified' => true,
        'rate_type' => true,
        'room_types' => true
    ];
}
