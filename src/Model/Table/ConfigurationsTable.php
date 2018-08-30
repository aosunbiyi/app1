<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Configurations Model
 *
 * @method \App\Model\Entity\Configuration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Configuration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Configuration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Configuration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Configuration|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Configuration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Configuration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Configuration findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConfigurationsTable extends Table
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

        $this->setTable('configurations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->dateTime('start_date')
            ->allowEmpty('start_date');

        $validator
            ->scalar('country_name')
            ->maxLength('country_name', 255)
            ->allowEmpty('country_name');

        $validator
            ->scalar('country_alias')
            ->maxLength('country_alias', 255)
            ->allowEmpty('country_alias');

        $validator
            ->scalar('curr_sign')
            ->maxLength('curr_sign', 150)
            ->allowEmpty('curr_sign');

        $validator
            ->scalar('state_name')
            ->maxLength('state_name', 255)
            ->allowEmpty('state_name');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 255)
            ->allowEmpty('zip');

        $validator
            ->integer('financial_period_from_day')
            ->allowEmpty('financial_period_from_day');

        $validator
            ->scalar('financial_period_from_month')
            ->maxLength('financial_period_from_month', 255)
            ->allowEmpty('financial_period_from_month');

        $validator
            ->integer('financial_period_to_day')
            ->allowEmpty('financial_period_to_day');

        $validator
            ->scalar('financial_period_to_month')
            ->maxLength('financial_period_to_month', 255)
            ->allowEmpty('financial_period_to_month');

        return $validator;
    }
}
