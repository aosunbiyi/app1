<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Floors Model
 *
 * @property \App\Model\Table\WingsTable|\Cake\ORM\Association\BelongsTo $Wings
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\HasMany $Rooms
 *
 * @method \App\Model\Entity\Floor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Floor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Floor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Floor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Floor|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Floor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Floor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Floor findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FloorsTable extends Table
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

        $this->setTable('floors');
        $this->setDisplayField('floor_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Wings', [
            'foreignKey' => 'wing_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Rooms', [
            'foreignKey' => 'floor_id'
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
            ->scalar('floor_name')
            ->maxLength('floor_name', 255)
            ->allowEmpty('floor_name');

        $validator
            ->scalar('alias')
            ->maxLength('alias', 255)
            ->allowEmpty('alias');

        $validator
            ->integer('sort_key')
            ->allowEmpty('sort_key');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

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
        $rules->add($rules->existsIn(['wing_id'], 'Wings'));

        return $rules;
    }
}
