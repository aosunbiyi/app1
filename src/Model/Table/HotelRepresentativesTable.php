<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HotelRepresentatives Model
 *
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\HasMany $Accounts
 *
 * @method \App\Model\Entity\HotelRepresentative get($primaryKey, $options = [])
 * @method \App\Model\Entity\HotelRepresentative newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HotelRepresentative[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HotelRepresentative|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HotelRepresentative|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HotelRepresentative patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HotelRepresentative[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HotelRepresentative findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HotelRepresentativesTable extends Table
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

        $this->setTable('hotel_representatives');
        $this->setDisplayField('hotel_representative_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Accounts', [
            'foreignKey' => 'hotel_representative_id'
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
            ->scalar('alias')
            ->maxLength('alias', 255)
            ->allowEmpty('alias');

        $validator
            ->scalar('hotel_representative_name')
            ->maxLength('hotel_representative_name', 255)
            ->allowEmpty('hotel_representative_name');

        return $validator;
    }
}
