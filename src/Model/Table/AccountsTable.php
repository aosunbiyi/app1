<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accounts Model
 *
 * @property \App\Model\Table\AccountTypesTable|\Cake\ORM\Association\BelongsTo $AccountTypes
 * @property \App\Model\Table\HotelRepresentativesTable|\Cake\ORM\Association\BelongsTo $HotelRepresentatives
 *
 * @method \App\Model\Entity\Account get($primaryKey, $options = [])
 * @method \App\Model\Entity\Account newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Account[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Account|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Account[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Account findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountsTable extends Table
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

        $this->setTable('accounts');
        $this->setDisplayField('account_number');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AccountTypes', [
            'foreignKey' => 'account_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('HotelRepresentatives', [
            'foreignKey' => 'hotel_representative_id'
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
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->scalar('account_number')
            ->maxLength('account_number', 255)
            ->requirePresence('account_number', 'create')
            ->notEmpty('account_number');

        $validator
            ->decimal('credit_limit')
            ->allowEmpty('credit_limit');

        $validator
            ->decimal('opening_balance')
            ->allowEmpty('opening_balance');

        $validator
            ->decimal('payment_term')
            ->allowEmpty('payment_term');

        $validator
            ->scalar('address1')
            ->maxLength('address1', 255)
            ->allowEmpty('address1');

        $validator
            ->scalar('address2')
            ->maxLength('address2', 255)
            ->allowEmpty('address2');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmpty('city');

        $validator
            ->scalar('postal_code')
            ->maxLength('postal_code', 255)
            ->allowEmpty('postal_code');

        $validator
            ->scalar('state')
            ->maxLength('state', 255)
            ->allowEmpty('state');

        $validator
            ->scalar('country')
            ->maxLength('country', 255)
            ->allowEmpty('country');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 255)
            ->allowEmpty('phone');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 255)
            ->allowEmpty('fax');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('credit_card_type')
            ->maxLength('credit_card_type', 255)
            ->allowEmpty('credit_card_type');

        $validator
            ->scalar('card_holder')
            ->maxLength('card_holder', 255)
            ->allowEmpty('card_holder');

        $validator
            ->scalar('card_number')
            ->maxLength('card_number', 255)
            ->allowEmpty('card_number');

        $validator
            ->dateTime('exp_date')
            ->allowEmpty('exp_date');

        $validator
            ->scalar('reg_number')
            ->maxLength('reg_number', 255)
            ->allowEmpty('reg_number');

        $validator
            ->scalar('reg_number1')
            ->maxLength('reg_number1', 255)
            ->allowEmpty('reg_number1');

        $validator
            ->scalar('reg_number2')
            ->maxLength('reg_number2', 255)
            ->allowEmpty('reg_number2');

        $validator
            ->dateTime('created_on')
            ->allowEmpty('created_on');

        $validator
            ->scalar('created_by')
            ->maxLength('created_by', 255)
            ->allowEmpty('created_by');

        $validator
            ->scalar('remark')
            ->allowEmpty('remark');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['account_type_id'], 'AccountTypes'));
        $rules->add($rules->existsIn(['hotel_representative_id'], 'HotelRepresentatives'));

        return $rules;
    }
}
