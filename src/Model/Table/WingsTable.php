<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Wings Model
 *
 * @property \App\Model\Table\FloorsTable|\Cake\ORM\Association\HasMany $Floors
 *
 * @method \App\Model\Entity\Wing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Wing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Wing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Wing|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wing|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Wing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Wing findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class WingsTable extends Table
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

        $this->setTable('wings');
        $this->setDisplayField('wing_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Floors', [
            'foreignKey' => 'wing_id'
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
            ->scalar('wing_name')
            ->maxLength('wing_name', 255)
            ->allowEmpty('wing_name');

        return $validator;
    }
}
