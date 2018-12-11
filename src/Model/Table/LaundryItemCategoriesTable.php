<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LaundryItemCategories Model
 *
 * @method \App\Model\Entity\LaundryItemCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\LaundryItemCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LaundryItemCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LaundryItemCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryItemCategory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryItemCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryItemCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryItemCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LaundryItemCategoriesTable extends Table
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

        $this->setTable('laundry_item_categories');
        $this->setDisplayField('category_name');
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
            ->scalar('category_name')
            ->maxLength('category_name', 200)
            ->requirePresence('category_name', 'create')
            ->notEmpty('category_name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('category_image')
            ->maxLength('category_image', 350)
            ->allowEmpty('category_image');

        return $validator;
    }
}
