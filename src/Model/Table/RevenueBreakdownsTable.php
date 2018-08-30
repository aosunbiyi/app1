<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RevenueBreakdowns Model
 *
 * @method \App\Model\Entity\RevenueBreakdown get($primaryKey, $options = [])
 * @method \App\Model\Entity\RevenueBreakdown newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RevenueBreakdown[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RevenueBreakdown|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RevenueBreakdown|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RevenueBreakdown patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RevenueBreakdown[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RevenueBreakdown findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RevenueBreakdownsTable extends Table
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

        $this->setTable('revenue_breakdowns');
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
            ->scalar('alias')
            ->maxLength('alias', 255)
            ->allowEmpty('alias');

        $validator
            ->integer('sort_key')
            ->allowEmpty('sort_key');

        $validator
            ->scalar('breakdown_name')
            ->maxLength('breakdown_name', 255)
            ->allowEmpty('breakdown_name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
