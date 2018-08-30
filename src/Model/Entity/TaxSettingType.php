<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TaxSettingType Entity
 *
 * @property int $id
 * @property string $tax_setting_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\TaxSetting[] $tax_settings
 */
class TaxSettingType extends Entity
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
        'tax_setting_name' => true,
        'created' => true,
        'modified' => true,
        'tax_settings' => true
    ];
}
