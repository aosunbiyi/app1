<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoomsAmenities Model
 *
 * @property \App\Model\Table\RoomsTable|\Cake\ORM\Association\BelongsTo $Rooms
 * @property \App\Model\Table\AmenitiesTable|\Cake\ORM\Association\BelongsTo $Amenities
 *
 * @method \App\Model\Entity\RoomsAmenity get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoomsAmenity newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoomsAmenity[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoomsAmenity|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomsAmenity|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomsAmenity patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoomsAmenity[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoomsAmenity findOrCreate($search, callable $callback = null, $options = [])
 */
class RoomsAmenitiesTable extends Table
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

        $this->setTable('rooms_amenities');
        $this->setDisplayField('room_id');
        $this->setPrimaryKey(['room_id', 'amenity_id']);

        $this->belongsTo('Rooms', [
            'foreignKey' => 'room_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Amenities', [
            'foreignKey' => 'amenity_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['room_id'], 'Rooms'));
        $rules->add($rules->existsIn(['amenity_id'], 'Amenities'));

        return $rules;
    }
}
