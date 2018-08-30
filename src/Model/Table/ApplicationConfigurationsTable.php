<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ApplicationConfigurations Model
 *
 * @method \App\Model\Entity\ApplicationConfiguration get($primaryKey, $options = [])
 * @method \App\Model\Entity\ApplicationConfiguration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ApplicationConfiguration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationConfiguration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ApplicationConfiguration|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ApplicationConfiguration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationConfiguration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ApplicationConfiguration findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ApplicationConfigurationsTable extends Table
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

        $this->setTable('application_configurations');
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
            ->scalar('application_name')
            ->maxLength('application_name', 255)
            ->allowEmpty('application_name');

        $validator
            ->scalar('application_logo')
            ->maxLength('application_logo', 255)
            ->allowEmpty('application_logo');

        $validator
            ->scalar('login_banner')
            ->maxLength('login_banner', 255)
            ->allowEmpty('login_banner');

        $validator
            ->scalar('application_theme')
            ->maxLength('application_theme', 255)
            ->allowEmpty('application_theme');

        return $validator;
    }
}
