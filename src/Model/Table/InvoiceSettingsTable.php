<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InvoiceSettings Model
 *
 * @method \App\Model\Entity\InvoiceSetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\InvoiceSetting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InvoiceSetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InvoiceSetting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InvoiceSetting|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InvoiceSetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InvoiceSetting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InvoiceSetting findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InvoiceSettingsTable extends Table
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

        $this->setTable('invoice_settings');
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
            ->scalar('invoice_variable_name')
            ->maxLength('invoice_variable_name', 255)
            ->allowEmpty('invoice_variable_name');

        $validator
            ->scalar('number_type')
            ->maxLength('number_type', 255)
            ->allowEmpty('number_type');

        $validator
            ->scalar('prefix')
            ->maxLength('prefix', 255)
            ->allowEmpty('prefix');

        $validator
            ->integer('start_from')
            ->allowEmpty('start_from');

        return $validator;
    }
}
