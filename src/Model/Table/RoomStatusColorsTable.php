<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoomStatusColors Model
 *
 * @method \App\Model\Entity\RoomStatusColor get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoomStatusColor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoomStatusColor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoomStatusColor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomStatusColor|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomStatusColor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoomStatusColor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoomStatusColor findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoomStatusColorsTable extends Table
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

        $this->setTable('room_status_colors');
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
            ->scalar('status_type')
            ->maxLength('status_type', 255)
            ->allowEmpty('status_type');

        $validator
            ->scalar('status_name')
            ->maxLength('status_name', 255)
            ->allowEmpty('status_name');

        $validator
            ->scalar('color_name')
            ->maxLength('color_name', 255)
            ->allowEmpty('color_name');

        return $validator;
    }
}
