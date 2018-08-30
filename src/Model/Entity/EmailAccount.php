<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmailAccount Entity
 *
 * @property int $id
 * @property string $sender_name
 * @property string $email_address
 * @property string $mail_server
 * @property string $mail_server_port
 * @property string $user_name
 * @property string $password
 * @property int $login_using_ssl
 * @property int $use_proxysettings
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class EmailAccount extends Entity
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
        'sender_name' => true,
        'email_address' => true,
        'mail_server' => true,
        'mail_server_port' => true,
        'user_name' => true,
        'password' => true,
        'login_using_ssl' => true,
        'use_proxysettings' => true,
        'created' => true,
        'modified' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
