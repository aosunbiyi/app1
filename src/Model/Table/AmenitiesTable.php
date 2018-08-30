<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Amenities Model
 *
 * @property \App\Model\Table\AmenityTypesTable|\Cake\ORM\Association\BelongsTo $AmenityTypes
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\BelongsToMany $Rooms
 *
 * @method \App\Model\Entity\Amenity get($primaryKey, $options = [])
 * @method \App\Model\Entity\Amenity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Amenity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Amenity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Amenity|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Amenity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Amenity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Amenity findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AmenitiesTable extends Table
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

        $this->setTable('amenities');
        $this->setDisplayField('amenity_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AmenityTypes', [
            'foreignKey' => 'amenity_type_id'
        ]);
        $this->belongsToMany('Rooms', [
            'foreignKey' => 'amenity_id',
            'targetForeignKey' => 'room_id',
            'joinTable' => 'rooms_amenities'
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
            ->scalar('amenity_name')
            ->maxLength('amenity_name', 255)
            ->allowEmpty('amenity_name');

        $validator
            ->scalar('amenity_logo')
            ->maxLength('amenity_logo', 255)
            ->allowEmpty('amenity_logo');

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
        $rules->add($rules->existsIn(['amenity_type_id'], 'AmenityTypes'));

        return $rules;
    }
}
