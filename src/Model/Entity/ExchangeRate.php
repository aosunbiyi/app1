<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExchangeRate Entity
 *
 * @property int $id
 * @property string $country_name
 * @property int $active
 * @property int $decimal_place
 * @property string $currency_name
 * @property string $currency_symbol
 * @property string $symbol_placement
 * @property float $exchange_rate
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class ExchangeRate extends Entity
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
        'country_name' => true,
        'is_base_currency' => true,
        'active' => true,
        'decimal_place' => true,
        'currency_name' => true,
        'currency_symbol' => true,
        'symbol_placement' => true,
        'exchange_rate' => true,
        'created' => true,
        'modified' => true
    ];
}
