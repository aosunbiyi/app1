<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SettlementTypes Model
 *
 * @property \App\Model\Table\CardTypePrefixesTable|\Cake\ORM\Association\HasMany $CardTypePrefixes
 *
 * @method \App\Model\Entity\SettlementType get($primaryKey, $options = [])
 * @method \App\Model\Entity\SettlementType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SettlementType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SettlementType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettlementType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SettlementType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SettlementType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SettlementType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SettlementTypesTable extends Table
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

        $this->setTable('settlement_types');
        $this->setDisplayField('settlement_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CardTypePrefixes', [
            'foreignKey' => 'settlement_type_id'
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
            ->scalar('settlement_name')
            ->maxLength('settlement_name', 255)
            ->allowEmpty('settlement_name');

        $validator
            ->requirePresence('can_generate_receipt', 'create')
            ->notEmpty('can_generate_receipt');

        $validator
            ->requirePresence('start_index', 'create')
            ->notEmpty('start_index');

        $validator
            ->requirePresence('current_index', 'create')
            ->notEmpty('current_index');

        $validator
            ->scalar('prefix')
            ->maxLength('prefix', 255)
            ->requirePresence('prefix', 'create')
            ->notEmpty('prefix');

        $validator
            ->scalar('suffix')
            ->maxLength('suffix', 255)
            ->requirePresence('suffix', 'create')
            ->notEmpty('suffix');

        $validator
            ->scalar('alias')
            ->maxLength('alias', 255)
            ->allowEmpty('alias');

        $validator
            ->allowEmpty('active');

        $validator
            ->scalar('payment_option')
            ->maxLength('payment_option', 255)
            ->allowEmpty('payment_option');

        return $validator;
    }
}
