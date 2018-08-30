<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Amenity Entity
 *
 * @property int $id
 * @property int $amenity_type_id
 * @property string $amenity_name
 * @property string $amenity_logo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\AmenityType $amenity_type
 * @property \App\Model\Entity\Room[] $rooms
 */
class Amenity extends Entity
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
        'amenity_type_id' => true,
        'amenity_name' => true,
        'amenity_logo' => true,
        'created' => true,
        'modified' => true,
        'amenity_type' => true,
        'rooms' => true
    ];
}
