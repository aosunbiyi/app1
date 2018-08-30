<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoomsWeekDays Model
 *
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\BelongsTo $Rooms
 * @property \App\Model\Table\WeekDaysTable|\Cake\ORM\Association\BelongsTo $WeekDays
 *
 * @method \App\Model\Entity\RoomsWeekDay get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoomsWeekDay newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoomsWeekDay[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoomsWeekDay|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomsWeekDay|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomsWeekDay patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoomsWeekDay[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoomsWeekDay findOrCreate($search, callable $callback = null, $options = [])
 */
class RoomsWeekDaysTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('rooms_week_days');
        $this->setDisplayField('room_id');
        $this->setPrimaryKey(['room_id', 'week_day_id']);

        $this->belongsTo('Rooms', [
            'foreignKey' => 'room_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('WeekDays', [
            'foreignKey' => 'week_day_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['room_id'], 'Rooms'));
        $rules->add($rules->existsIn(['week_day_id'], 'WeekDays'));

        return $rules;
    }
}
