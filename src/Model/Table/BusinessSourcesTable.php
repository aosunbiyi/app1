<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusinessSources Model
 *
 * @property \App\Model\Table\BusinessSourceTypesTable|\Cake\ORM\Association\BelongsTo $BusinessSourceTypes
 *
 * @method \App\Model\Entity\BusinessSource get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessSource newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusinessSource[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessSource|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessSource|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessSource patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessSource[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessSource findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BusinessSourcesTable extends Table
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

        $this->setTable('business_sources');
        $this->setDisplayField('business_source_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('BusinessSourceTypes', [
            'foreignKey' => 'business_source_types_id',
            'joinType' => 'INNER'
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
            ->scalar('business_source_name')
            ->maxLength('business_source_name', 255)
            ->allowEmpty('business_source_name');

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
        $rules->add($rules->existsIn(['business_source_types_id'], 'BusinessSourceTypes'));

        return $rules;
    }
}
