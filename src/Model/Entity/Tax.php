<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tax Entity
 *
 * @property int $id
 * @property string $tax_name
 * @property int $duration
 * @property int $charge_on_extra_adult
 * @property int $charge_on_extra_child
 * @property \Cake\I18n\FrozenTime $start_day
 * @property string $format
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Tax extends Entity
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
        'tax_name' => true,
        'value' => true,
        'duration' => true,
        'charge_on_extra_adult' => true,
        'charge_on_extra_child' => true,
        'start_day' => true,
        'format' => true,
        'created' => true,
        'modified' => true
    ];
}
