<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InvoiceSetting Entity
 *
 * @property int $id
 * @property string $invoice_variable_name
 * @property string $number_type
 * @property string $prefix
 * @property int $start_from
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class InvoiceSetting extends Entity
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
        'invoice_variable_name' => true,
        'number_type' => true,
        'prefix' => true,
        'start_from' => true,
        'created' => true,
        'modified' => true
    ];
}
