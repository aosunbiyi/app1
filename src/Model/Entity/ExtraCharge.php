<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExtraCharge Entity
 *
 * @property int $id
 * @property string $alias
 * @property string $extra_charge_name
 * @property string $description
 * @property int $extra_charge_category_id
 * @property float $rate
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ExtraChargeCategory $extra_charge_category
 */
class ExtraCharge extends Entity
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
        'alias' => true,
        'extra_charge_name' => true,
        'description' => true,
        'extra_charge_category_id' => true,
        'rate' => true,
        'created' => true,
        'modified' => true,
        'extra_charge_category' => true
    ];
}
