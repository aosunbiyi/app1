<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountTypes Model
 *
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\HasMany $Accounts
 *
 * @method \App\Model\Entity\AccountType get($primaryKey, $options = [])
 * @method \App\Model\Entity\AccountType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AccountType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccountType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccountType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AccountType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountTypesTable extends Table
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

        $this->setTable('account_types');
        $this->setDisplayField('account_type_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Accounts', [
            'foreignKey' => 'account_type_id'
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
            ->scalar('account_type_name')
            ->maxLength('account_type_name', 255)
            ->allowEmpty('account_type_name');

        return $validator;
    }
}
