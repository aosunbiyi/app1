<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property int $account_type_id
 * @property int $hotel_representative_id
 * @property string $alias
 * @property string $last_name
 * @property string $first_name
 * @property string $account_number
 * @property float $credit_limit
 * @property float $opening_balance
 * @property float $payment_term
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $postal_code
 * @property string $state
 * @property string $country
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $credit_card_type
 * @property string $card_holder
 * @property string $card_number
 * @property \Cake\I18n\FrozenTime $exp_date
 * @property string $reg_number
 * @property string $reg_number1
 * @property string $reg_number2
 * @property \Cake\I18n\FrozenTime $created_on
 * @property string $created_by
 * @property string $remark
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\AccountType $account_type
 * @property \App\Model\Entity\HotelRepresentative $hotel_representative
 */
class Account extends Entity
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
        'account_type_id' => true,
        'hotel_representative_id' => true,
        'alias' => true,
        'last_name' => true,
        'first_name' => true,
        'account_number' => true,
        'credit_limit' => true,
        'opening_balance' => true,
        'payment_term' => true,
        'address1' => true,
        'address2' => true,
        'city' => true,
        'postal_code' => true,
        'state' => true,
        'country' => true,
        'phone' => true,
        'fax' => true,
        'email' => true,
        'credit_card_type' => true,
        'card_holder' => true,
        'card_number' => true,
        'exp_date' => true,
        'reg_number' => true,
        'reg_number1' => true,
        'reg_number2' => true,
        'created_on' => true,
        'created_by' => true,
        'remark' => true,
        'created' => true,
        'modified' => true,
        'account_type' => true,
        'hotel_representative' => true
    ];
}
