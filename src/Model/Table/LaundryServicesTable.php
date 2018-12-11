<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LaundryServices Model
 *
 * @property \App\Model\Table\LaundryGuestLaundryTransactionsTable|\Cake\ORM\Association\HasMany $LaundryGuestLaundryTransactions
 * @property \App\Model\Table\LaundryHotelLaundryTransactionsTable|\Cake\ORM\Association\HasMany $LaundryHotelLaundryTransactions
 * @property \App\Model\Table\LaundryItemsTable|\Cake\ORM\Association\BelongsToMany $LaundryItems
 *
 * @method \App\Model\Entity\LaundryService get($primaryKey, $options = [])
 * @method \App\Model\Entity\LaundryService newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LaundryService[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LaundryService|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryService|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryService[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryService findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LaundryServicesTable extends Table
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

        $this->setTable('laundry_services');
        $this->setDisplayField('service_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('LaundryGuestLaundryTransactions', [
            'foreignKey' => 'laundry_service_id'
        ]);
        $this->hasMany('LaundryHotelLaundryTransactions', [
            'foreignKey' => 'laundry_service_id'
        ]);
        $this->belongsToMany('LaundryItems', [
            'foreignKey' => 'laundry_service_id',
            'targetForeignKey' => 'laundry_item_id',
            'joinTable' => 'laundry_items_laundry_services'
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
            ->scalar('service_image')
            ->maxLength('service_image', 350)
            ->allowEmpty('service_image');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        return $validator;
    }
}
