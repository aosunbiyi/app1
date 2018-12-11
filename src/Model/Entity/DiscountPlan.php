<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DiscountPlan Entity
 *
 * @property int $id
 * @property string $plan_name
 * @property string $plan_category
 * @property string $note
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ReservedRoom[] $reserved_rooms
 */
class DiscountPlan extends Entity
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
        'plan_name' => true,
        'plan_category' => true,
        'note' => true,
        'created' => true,
        'modified' => true,
        'reserved_rooms' => true
    ];
}
