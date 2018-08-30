<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DnrLists Model
 *
 * @method \App\Model\Entity\DnrList get($primaryKey, $options = [])
 * @method \App\Model\Entity\DnrList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DnrList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DnrList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DnrList|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DnrList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DnrList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DnrList findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DnrListsTable extends Table
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

        $this->setTable('dnr_lists');
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
            ->scalar('dnr_name')
            ->maxLength('dnr_name', 255)
            ->allowEmpty('dnr_name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
