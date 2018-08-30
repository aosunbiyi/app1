<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Remark Entity
 *
 * @property int $id
 * @property int $remark_category_id
 * @property string $alias
 * @property int $sort_key
 * @property string $reason
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\RemarkCategory $remark_category
 */
class Remark extends Entity
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
        'remark_category_id' => true,
        'alias' => true,
        'sort_key' => true,
        'reason' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'remark_category' => true
    ];
}
