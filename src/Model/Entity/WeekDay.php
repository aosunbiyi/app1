<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WeekDay Entity
 *
 * @property int $id
 * @property string $day_name
 * @property int $isweekday
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Room[] $rooms
 */
class WeekDay extends Entity
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
        'day_name' => true,
        'isweekday' => true,
        'created' => true,
        'modified' => true,
        'rooms' => true
    ];
}
