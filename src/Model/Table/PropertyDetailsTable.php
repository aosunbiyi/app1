<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PropertyDetails Model
 *
 * @method \App\Model\Entity\PropertyDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\PropertyDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PropertyDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PropertyDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PropertyDetail|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PropertyDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PropertyDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PropertyDetail findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PropertyDetailsTable extends Table
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

        $this->setTable('property_details');
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
            ->scalar('property_name')
            ->maxLength('property_name', 255)
            ->allowEmpty('property_name');

        $validator
            ->scalar('beneficiary_name')
            ->maxLength('beneficiary_name', 255)
            ->allowEmpty('beneficiary_name');

        $validator
            ->scalar('property_type')
            ->maxLength('property_type', 255)
            ->allowEmpty('property_type');

        $validator
            ->scalar('property_grade')
            ->maxLength('property_grade', 255)
            ->allowEmpty('property_grade');

        $validator
            ->scalar('registration_number')
            ->maxLength('registration_number', 255)
            ->allowEmpty('registration_number');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 255)
            ->allowEmpty('logo');

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
            ->scalar('res_phone')
            ->maxLength('res_phone', 255)
            ->allowEmpty('res_phone');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('website')
            ->maxLength('website', 255)
            ->allowEmpty('website');

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

        return $rules;
    }
}
