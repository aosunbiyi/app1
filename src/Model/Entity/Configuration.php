<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Configuration Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $start_date
 * @property string $country_name
 * @property string $country_alias
 * @property string $curr_sign
 * @property string $state_name
 * @property string $zip
 * @property int $financial_period_from_day
 * @property string $financial_period_from_month
 * @property int $financial_period_to_day
 * @property string $financial_period_to_month
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Configuration extends Entity
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
        'start_date' => true,
        'country_name' => true,
        'country_alias' => true,
        'curr_sign' => true,
        'state_name' => true,
        'zip' => true,
        'financial_period_from_day' => true,
        'financial_period_from_month' => true,
        'financial_period_to_day' => true,
        'financial_period_to_month' => true,
        'created' => true,
        'modified' => true
    ];
}
