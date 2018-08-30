<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TaxSetting Entity
 *
 * @property int $id
 * @property int $tax_setting_type_id
 * @property float $amount
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\TaxSettingType $tax_setting_type
 */
class TaxSetting extends Entity
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
        'tax_setting_type_id' => true,
        'amount' => true,
        'created' => true,
        'modified' => true,
        'tax_setting_type' => true
    ];
}
