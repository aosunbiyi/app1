<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CardTypePrefixes Model
 *
 * @property \App\Model\Table\SettlementTypesTable|\Cake\ORM\Association\BelongsTo $SettlementTypes
 *
 * @method \App\Model\Entity\CardTypePrefix get($primaryKey, $options = [])
 * @method \App\Model\Entity\CardTypePrefix newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CardTypePrefix[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CardTypePrefix|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CardTypePrefix|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CardTypePrefix patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CardTypePrefix[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CardTypePrefix findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CardTypePrefixesTable extends Table
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

        $this->setTable('card_type_prefixes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('SettlementTypes', [
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
            ->scalar('prefix')
            ->maxLength('prefix', 255)
            ->allowEmpty('prefix');

        $validator
            ->scalar('credit_card_type')
            ->maxLength('credit_card_type', 255)
            ->allowEmpty('credit_card_type');

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
        $rules->add($rules->existsIn(['settlement_type_id'], 'SettlementTypes'));

        return $rules;
    }
}
