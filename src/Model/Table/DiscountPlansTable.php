<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DiscountPlans Model
 *
 * @property \App\Model\Table\ReservedRoomsTable|\Cake\ORM\Association\HasMany $ReservedRooms
 *
 * @method \App\Model\Entity\DiscountPlan get($primaryKey, $options = [])
 * @method \App\Model\Entity\DiscountPlan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DiscountPlan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DiscountPlan|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DiscountPlan|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DiscountPlan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DiscountPlan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DiscountPlan findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DiscountPlansTable extends Table
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

        $this->setTable('discount_plans');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ReservedRooms', [
            'foreignKey' => 'discount_plan_id'
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
            ->scalar('plan_name')
            ->maxLength('plan_name', 200)
            ->allowEmpty('plan_name');

        $validator
            ->scalar('plan_category')
            ->maxLength('plan_category', 200)
            ->allowEmpty('plan_category');

        $validator
            ->scalar('note')
            ->allowEmpty('note');

        return $validator;
    }
}
