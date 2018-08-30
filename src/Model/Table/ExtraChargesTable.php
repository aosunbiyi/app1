<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExtraCharges Model
 *
 * @property \App\Model\Table\ExtraChargeCategoriesTable|\Cake\ORM\Association\BelongsTo $ExtraChargeCategories
 *
 * @method \App\Model\Entity\ExtraCharge get($primaryKey, $options = [])
 * @method \App\Model\Entity\ExtraCharge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ExtraCharge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExtraCharge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExtraCharge|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExtraCharge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ExtraCharge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExtraCharge findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExtraChargesTable extends Table
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

        $this->setTable('extra_charges');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ExtraChargeCategories', [
            'foreignKey' => 'extra_charge_category_id',
            'joinType' => 'INNER'
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
            ->scalar('extra_charge_name')
            ->maxLength('extra_charge_name', 255)
            ->allowEmpty('extra_charge_name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->decimal('rate')
            ->allowEmpty('rate');

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
        $rules->add($rules->existsIn(['extra_charge_category_id'], 'ExtraChargeCategories'));

        return $rules;
    }
}
