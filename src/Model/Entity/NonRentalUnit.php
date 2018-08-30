<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * NonRentalUnit Entity
 *
 * @property int $id
 * @property string $alias
 * @property string $name
 * @property string $description
 * @property float $amount
 * @property float $min_deposit
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class NonRentalUnit extends Entity
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
        'name' => true,
        'description' => true,
        'amount' => true,
        'min_deposit' => true,
        'created' => true,
        'modified' => true
    ];
}
