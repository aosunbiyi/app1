<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExchangeRates Model
 *
 * @method \App\Model\Entity\ExchangeRate get($primaryKey, $options = [])
 * @method \App\Model\Entity\ExchangeRate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ExchangeRate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExchangeRate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExchangeRate|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExchangeRate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ExchangeRate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExchangeRate findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExchangeRatesTable extends Table
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

        $this->setTable('exchange_rates');
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
            ->scalar('country_name')
            ->maxLength('country_name', 255)
            ->allowEmpty('country_name');

            $validator
            ->allowEmpty('is_base_currency');

        $validator
            ->allowEmpty('active');

        $validator
            ->integer('decimal_place')
            ->allowEmpty('decimal_place');

        $validator
            ->scalar('currency_name')
            ->maxLength('currency_name', 255)
            ->allowEmpty('currency_name');

        $validator
            ->scalar('currency_symbol')
            ->maxLength('currency_symbol', 255)
            ->allowEmpty('currency_symbol');

        $validator
            ->scalar('symbol_placement')
            ->maxLength('symbol_placement', 255)
            ->allowEmpty('symbol_placement');

        $validator
            ->decimal('exchange_rate')
            ->allowEmpty('exchange_rate');

        return $validator;
    }
}
