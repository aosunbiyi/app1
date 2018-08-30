<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmailAccounts Model
 *
 * @method \App\Model\Entity\EmailAccount get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmailAccount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmailAccount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmailAccount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmailAccount|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmailAccount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmailAccount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmailAccount findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmailAccountsTable extends Table
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

        $this->setTable('email_accounts');
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
            ->scalar('sender_name')
            ->maxLength('sender_name', 255)
            ->allowEmpty('sender_name');

        $validator
            ->scalar('email_address')
            ->maxLength('email_address', 255)
            ->allowEmpty('email_address');

        $validator
            ->scalar('mail_server')
            ->maxLength('mail_server', 255)
            ->allowEmpty('mail_server');

        $validator
            ->scalar('mail_server_port')
            ->maxLength('mail_server_port', 255)
            ->allowEmpty('mail_server_port');

        $validator
            ->scalar('user_name')
            ->maxLength('user_name', 255)
            ->allowEmpty('user_name');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->allowEmpty('password');

        $validator
            ->allowEmpty('login_using_ssl');

        $validator
            ->allowEmpty('use_proxysettings');

        return $validator;
    }
}
