<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BusinessSource Entity
 *
 * @property int $id
 * @property int $business_source_types_id
 * @property string $alias
 * @property string $business_source_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\BusinessSourceType $business_source_type
 */
class BusinessSource extends Entity
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
        'business_source_types_id' => true,
        'alias' => true,
        'business_source_name' => true,
        'created' => true,
        'modified' => true,
        'business_source_type' => true
    ];
}
