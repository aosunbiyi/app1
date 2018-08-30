<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RateTypes Model
 *
 * @property \App\Model\Table\RatesTable|\Cake\ORM\Association\HasMany $Rates
 *
 * @method \App\Model\Entity\RateType get($primaryKey, $options = [])
 * @method \App\Model\Entity\RateType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RateType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RateType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RateType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RateType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RateType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RateType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RateTypesTable extends Table
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

        $this->setTable('rate_types');
        $this->setDisplayField('rate_type_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Rates', [
            'foreignKey' => 'rate_type_id'
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
            ->scalar('rate_type_name')
            ->maxLength('rate_type_name', 255)
            ->allowEmpty('rate_type_name');

        return $validator;
    }
}
