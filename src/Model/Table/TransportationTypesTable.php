<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TransportationTypes Model
 *
 * @property \App\Model\Table\TransportationsTable|\Cake\ORM\Association\HasMany $Transportations
 *
 * @method \App\Model\Entity\TransportationType get($primaryKey, $options = [])
 * @method \App\Model\Entity\TransportationType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TransportationType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TransportationType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TransportationType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TransportationType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TransportationType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TransportationType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TransportationTypesTable extends Table
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

        $this->setTable('transportation_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Transportations', [
            'foreignKey' => 'transportation_type_id'
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
            ->scalar('name')
            ->maxLength('name', 300)
            ->allowEmpty('name');

        return $validator;
    }
}
