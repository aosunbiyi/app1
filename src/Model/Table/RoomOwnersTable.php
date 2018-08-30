<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoomOwners Model
 *
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\HasMany $Rooms
 *
 * @method \App\Model\Entity\RoomOwner get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoomOwner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoomOwner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoomOwner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomOwner|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomOwner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoomOwner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoomOwner findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoomOwnersTable extends Table
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

        $this->setTable('room_owners');
        $this->setDisplayField('first_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Rooms', [
            'foreignKey' => 'room_owner_id'
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
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->allowEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->allowEmpty('last_name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('room_plan')
            ->maxLength('room_plan', 255)
            ->allowEmpty('room_plan');

        $validator
            ->decimal('amount')
            ->allowEmpty('amount');

        $validator
            ->scalar('address')
            ->maxLength('address', 450)
            ->allowEmpty('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmpty('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 250)
            ->allowEmpty('state');

        $validator
            ->scalar('country')
            ->maxLength('country', 250)
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
            ->email('email')
            ->allowEmpty('email');

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
