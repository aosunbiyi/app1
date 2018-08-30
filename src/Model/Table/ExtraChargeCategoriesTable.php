<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExtraChargeCategories Model
 *
 * @property \App\Model\Table\ExtraChargesTable|\Cake\ORM\Association\HasMany $ExtraCharges
 *
 * @method \App\Model\Entity\ExtraChargeCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ExtraChargeCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ExtraChargeCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExtraChargeCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExtraChargeCategory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExtraChargeCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ExtraChargeCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExtraChargeCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ExtraChargeCategoriesTable extends Table
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

        $this->setTable('extra_charge_categories');
        $this->setDisplayField('category_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ExtraCharges', [
            'foreignKey' => 'extra_charge_category_id'
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
            ->scalar('category_name')
            ->maxLength('category_name', 255)
            ->allowEmpty('category_name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
