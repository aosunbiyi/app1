<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PropertyDetail Entity
 *
 * @property int $id
 * @property string $property_name
 * @property string $beneficiary_name
 * @property string $property_type
 * @property string $property_grade
 * @property string $registration_number
 * @property string $logo
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $phone
 * @property string $fax
 * @property string $res_phone
 * @property string $email
 * @property string $website
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class PropertyDetail extends Entity
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
        'property_name' => true,
        'beneficiary_name' => true,
        'property_type' => true,
        'property_grade' => true,
        'registration_number' => true,
        'logo' => true,
        'address1' => true,
        'address2' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'phone' => true,
        'fax' => true,
        'res_phone' => true,
        'email' => true,
        'website' => true,
        'created' => true,
        'modified' => true
    ];
}
