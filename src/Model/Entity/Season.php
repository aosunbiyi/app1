<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Season Entity
 *
 * @property int $id
 * @property int $season_type_id
 * @property string $alias
 * @property string $season_name
 * @property string $deacription
 * @property int $from_day
 * @property int $to_day
 * @property string $from_month
 * @property string $to_month
 * @property \Cake\I18n\FrozenTime $start_date
 * @property \Cake\I18n\FrozenTime $end_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\SeasonType $season_type
 */
class Season extends Entity
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
        'season_type_id' => true,
        'alias' => true,
        'season_name' => true,
        'deacription' => true,
        'from_day' => true,
        'to_day' => true,
        'from_month' => true,
        'to_month' => true,
        'start_date' => true,
        'end_date' => true,
        'created' => true,
        'modified' => true,
        'season_type' => true
    ];
}
