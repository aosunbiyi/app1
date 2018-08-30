<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MealPlans Model
 *
 * @method \App\Model\Entity\MealPlan get($primaryKey, $options = [])
 * @method \App\Model\Entity\MealPlan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MealPlan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MealPlan|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MealPlan|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MealPlan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MealPlan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MealPlan findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MealPlansTable extends Table
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

        $this->setTable('meal_plans');
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
            ->scalar('meal_plan_name')
            ->maxLength('meal_plan_name', 255)
            ->allowEmpty('meal_plan_name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
