<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoomTypes Model
 *
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\HasMany $Rooms
 * @property \App\Model\Table\RatesTable|\Cake\ORM\Association\BelongsToMany $Rates
 *
 * @method \App\Model\Entity\RoomType get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoomType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoomType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoomType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoomType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoomType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoomTypesTable extends Table
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

        $this->setTable('room_types');
        $this->setDisplayField('room_type_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Rooms', [
            'foreignKey' => 'room_type_id'
        ]);
        $this->belongsToMany('Rates', [
            'foreignKey' => 'room_type_id',
            'targetForeignKey' => 'rate_id',
            'joinTable' => 'room_types_rates'
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
            ->scalar('room_type_name')
            ->maxLength('room_type_name', 255)
            ->allowEmpty('room_type_name');

        $validator
            ->scalar('alias')
            ->maxLength('alias', 255)
            ->allowEmpty('alias');

        $validator
            ->integer('sort_key')
            ->allowEmpty('sort_key');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->integer('max_adult')
            ->allowEmpty('max_adult');

        $validator
            ->integer('max_child')
            ->allowEmpty('max_child');

        $validator
            ->scalar('back_color')
            ->maxLength('back_color', 200)
            ->allowEmpty('back_color');

        $validator
            ->allowEmpty('inactive');

        return $validator;
    }
}
