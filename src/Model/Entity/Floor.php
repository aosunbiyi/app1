<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Floor Entity
 *
 * @property int $id
 * @property int $wing_id
 * @property string $floor_name
 * @property string $alias
 * @property int $sort_key
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Wing $wing
 * @property \App\Model\Entity\Room[] $rooms
 */
class Floor extends Entity
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
        'wing_id' => true,
        'floor_name' => true,
        'alias' => true,
        'sort_key' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'wing' => true,
        'rooms' => true
    ];
}
