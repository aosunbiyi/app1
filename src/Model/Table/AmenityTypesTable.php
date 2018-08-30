<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AmenityTypes Model
 *
 * @property \App\Model\Table\AmenitiesTable|\Cake\ORM\Association\HasMany $Amenities
 *
 * @method \App\Model\Entity\AmenityType get($primaryKey, $options = [])
 * @method \App\Model\Entity\AmenityType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AmenityType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AmenityType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AmenityType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AmenityType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AmenityType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AmenityType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AmenityTypesTable extends Table
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

        $this->setTable('amenity_types');
        $this->setDisplayField('amenity_type_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Amenities', [
            'foreignKey' => 'amenity_type_id'
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
            ->scalar('amenity_type_name')
            ->maxLength('amenity_type_name', 255)
            ->allowEmpty('amenity_type_name');

        return $validator;
    }
}
