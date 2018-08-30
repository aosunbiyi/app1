<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rates Model
 *
 * @property \App\Model\Table\RateTypesTable|\Cake\ORM\Association\BelongsTo $RateTypes
 * @property \App\Model\Table\RoomTypesTable|\Cake\ORM\Association\BelongsToMany $RoomTypes
 *
 * @method \App\Model\Entity\Rate get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rate|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rate findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RatesTable extends Table
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

        $this->setTable('rates');
        $this->setDisplayField('rate_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('RateTypes', [
            'foreignKey' => 'rate_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('RoomTypes', [
            'foreignKey' => 'rate_id',
            'targetForeignKey' => 'room_type_id',
            'joinTable' => 'room_types_rates'
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
            ->scalar('rate_name')
            ->maxLength('rate_name', 255)
            ->allowEmpty('rate_name');

        $validator
            ->decimal('amount')
            ->allowEmpty('amount');

        $validator
            ->allowEmpty('isweekday');

        $validator
            ->allowEmpty('isspecial');

        $validator
            ->dateTime('start_date')
            ->allowEmpty('start_date');

        $validator
            ->dateTime('end_date')
            ->allowEmpty('end_date');

        $validator
            ->allowEmpty('isactive');

        $validator
            ->decimal('extra_adult')
            ->allowEmpty('extra_adult');

        $validator
            ->decimal('extra_child')
            ->allowEmpty('extra_child');

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
        $rules->add($rules->existsIn(['rate_type_id'], 'RateTypes'));

        return $rules;
    }
}
