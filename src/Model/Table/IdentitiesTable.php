<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Identities Model
 *
 * @method \App\Model\Entity\Identity get($primaryKey, $options = [])
 * @method \App\Model\Entity\Identity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Identity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Identity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Identity|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Identity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Identity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Identity findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IdentitiesTable extends Table
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

        $this->setTable('identities');
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
            ->scalar('identity_name')
            ->maxLength('identity_name', 255)
            ->allowEmpty('identity_name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
