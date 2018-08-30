<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TaxSettingTypes Model
 *
 * @property \App\Model\Table\TaxSettingsTable|\Cake\ORM\Association\HasMany $TaxSettings
 *
 * @method \App\Model\Entity\TaxSettingType get($primaryKey, $options = [])
 * @method \App\Model\Entity\TaxSettingType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TaxSettingType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TaxSettingType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TaxSettingType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TaxSettingType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TaxSettingType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TaxSettingType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TaxSettingTypesTable extends Table
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

        $this->setTable('tax_setting_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('TaxSettings', [
            'foreignKey' => 'tax_setting_type_id'
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
            ->scalar('tax_setting_name')
            ->maxLength('tax_setting_name', 255)
            ->allowEmpty('tax_setting_name');

        return $validator;
    }
}
