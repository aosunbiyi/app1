<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountType Entity
 *
 * @property int $id
 * @property string $alias
 * @property string $account_type_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Account[] $accounts
 */
class AccountType extends Entity
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
        'account_type_name' => true,
        'created' => true,
        'modified' => true,
        'accounts' => true
    ];
}
