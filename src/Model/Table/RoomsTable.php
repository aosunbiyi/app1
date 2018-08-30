<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rooms Model
 *
 * @property \App\Model\Table\RoomTypesTable|\Cake\ORM\Association\BelongsTo $RoomTypes
 * @property \App\Model\Table\FloorsTable|\Cake\ORM\Association\BelongsTo $Floors
 * @property \App\Model\Table\RoomOwnersTable|\Cake\ORM\Association\BelongsTo $RoomOwners
 * @property \App\Model\Table\RoomImagesTable|\Cake\ORM\Association\HasMany $RoomImages
 * @property \App\Model\Table\AmenitiesTable|\Cake\ORM\Association\BelongsToMany $Amenities
 * @property \App\Model\Table\WeekDaysTable|\Cake\ORM\Association\BelongsToMany $WeekDays
 *
 * @method \App\Model\Entity\Room get($primaryKey, $options = [])
 * @method \App\Model\Entity\Room newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Room[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Room|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Room|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Room patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Room[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Room findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoomsTable extends Table
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

        $this->setTable('rooms');
        $this->setDisplayField('room_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('RoomTypes', [
            'foreignKey' => 'room_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Floors', [
            'foreignKey' => 'floor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('RoomOwners', [
            'foreignKey' => 'room_owner_id'
        ]);
        $this->hasMany('RoomImages', [
            'foreignKey' => 'room_id'
        ]);
        $this->belongsToMany('Amenities', [
            'foreignKey' => 'room_id',
            'targetForeignKey' => 'amenity_id',
            'joinTable' => 'rooms_amenities'
        ]);
        $this->belongsToMany('WeekDays', [
            'foreignKey' => 'room_id',
            'targetForeignKey' => 'week_day_id',
            'joinTable' => 'rooms_week_days'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('alias')
            ->maxLength('alias', 255)
            ->allowEmpty('alias');

        $validator
            ->integer('sort_key')
            ->allowEmpty('sort_key');

        $validator
            ->scalar('room_name')
            ->maxLength('room_name', 255)
            ->allowEmpty('room_name');

        $validator
            ->scalar('phone_extension')
            ->maxLength('phone_extension', 255)
            ->allowEmpty('phone_extension');

        $validator
            ->scalar('data_extension')
            ->maxLength('data_extension', 255)
            ->allowEmpty('data_extension');

        $validator
            ->scalar('keycard_alias')
            ->maxLength('keycard_alias', 255)
            ->allowEmpty('keycard_alias');

        $validator
            ->scalar('power_code')
            ->maxLength('power_code', 255)
            ->allowEmpty('power_code');

        $validator
            ->scalar('remark')
            ->allowEmpty('remark');

        $validator
            ->allowEmpty('inactive');

        return $validator;
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
        $rules->add($rules->existsIn(['room_type_id'], 'RoomTypes'));
        $rules->add($rules->existsIn(['floor_id'], 'Floors'));
        $rules->add($rules->existsIn(['room_owner_id'], 'RoomOwners'));

        return $rules;
    }
}
