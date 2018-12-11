<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LaundryHotelServices Model
 *
 * @property \App\Model\Table\LaundryGuestLaundryTransactionsTable|\Cake\ORM\Association\HasMany $LaundryGuestLaundryTransactions
 * @property \App\Model\Table\LaundryHotelLaundryTransactionsTable|\Cake\ORM\Association\HasMany $LaundryHotelLaundryTransactions
 *
 * @method \App\Model\Entity\LaundryHotelService get($primaryKey, $options = [])
 * @method \App\Model\Entity\LaundryHotelService newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LaundryHotelService[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LaundryHotelService|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryHotelService|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryHotelService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryHotelService[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryHotelService findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LaundryHotelServicesTable extends Table
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

        $this->setTable('laundry_hotel_services');
        $this->setDisplayField('service_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('LaundryGuestLaundryTransactions', [
            'foreignKey' => 'laundry_hotel_service_id'
        ]);
        $this->hasMany('LaundryHotelLaundryTransactions', [
            'foreignKey' => 'laundry_hotel_service_id'
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
            ->scalar('service_name')
            ->maxLength('service_name', 250)
            ->requirePresence('service_name', 'create')
            ->notEmpty('service_name');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->decimal('extra_charges')
            ->allowEmpty('extra_charges');

        return $validator;
    }
}
