<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FollowUpTypes Model
 *
 * @method \App\Model\Entity\FollowUpType get($primaryKey, $options = [])
 * @method \App\Model\Entity\FollowUpType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FollowUpType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FollowUpType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FollowUpType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FollowUpType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FollowUpType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FollowUpType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FollowUpTypesTable extends Table
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

        $this->setTable('follow_up_types');
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
            ->scalar('type_name')
            ->maxLength('type_name', 255)
            ->allowEmpty('type_name');

        $validator
            ->scalar('color')
            ->maxLength('color', 255)
            ->allowEmpty('color');

        return $validator;
    }
}
