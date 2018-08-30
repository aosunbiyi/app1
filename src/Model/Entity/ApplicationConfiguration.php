<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ApplicationConfiguration Entity
 *
 * @property int $id
 * @property string $application_name
 * @property string $application_logo
 * @property string $login_banner
 * @property string $application_theme
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class ApplicationConfiguration extends Entity
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
        'application_name' => true,
        'application_logo' => true,
        'login_banner' => true,
        'application_theme' => true,
        'created' => true,
        'modified' => true
    ];
}
