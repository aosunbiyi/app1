<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NonRentalUnits Model
 *
 * @method \App\Model\Entity\NonRentalUnit get($primaryKey, $options = [])
 * @method \App\Model\Entity\NonRentalUnit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\NonRentalUnit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NonRentalUnit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NonRentalUnit|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NonRentalUnit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NonRentalUnit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\NonRentalUnit findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NonRentalUnitsTable extends Table
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

        $this->setTable('non_rental_units');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->decimal('amount')
            ->allowEmpty('amount');

        $validator
            ->decimal('min_deposit')
            ->allowEmpty('min_deposit');

        return $validator;
    }
}
