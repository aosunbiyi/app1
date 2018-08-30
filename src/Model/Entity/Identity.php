<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Identity Entity
 *
 * @property int $id
 * @property string $alias
 * @property int $sort_key
 * @property string $identity_name
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Identity extends Entity
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
        'sort_key' => true,
        'identity_name' => true,
        'description' => true,
        'created' => true,
        'modified' => true
    ];
}
