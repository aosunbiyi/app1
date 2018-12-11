<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LaundryItems Model
 *
 * @property \App\Model\Table\LaundryItemCategoriesTable|\Cake\ORM\Association\BelongsTo $LaundryItemCategories
 * @property \App\Model\Table\LaundryGuestLaundryTransactionItemsTable|\Cake\ORM\Association\HasMany $LaundryGuestLaundryTransactionItems
 * @property \App\Model\Table\LaundryHotelLaundryTransactionItemsTable|\Cake\ORM\Association\HasMany $LaundryHotelLaundryTransactionItems
 * @property \App\Model\Table\LaundryServicesTable|\Cake\ORM\Association\BelongsToMany $LaundryServices
 *
 * @method \App\Model\Entity\LaundryItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\LaundryItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LaundryItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LaundryItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryItem|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryItem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LaundryItemsTable extends Table
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

        $this->setTable('laundry_items');
        $this->setDisplayField('item_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('LaundryItemCategories', [
            'foreignKey' => 'laundry_item_category_id'
        ]);
        $this->hasMany('LaundryGuestLaundryTransactionItems', [
            'foreignKey' => 'laundry_item_id'
        ]);
        $this->hasMany('LaundryHotelLaundryTransactionItems', [
            'foreignKey' => 'laundry_item_id'
        ]);
        $this->belongsToMany('LaundryServices', [
            'foreignKey' => 'laundry_item_id',
            'targetForeignKey' => 'laundry_service_id',
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
            ->scalar('item_name')
            ->maxLength('item_name', 250)
            ->allowEmpty('item_name');

        $validator
            ->scalar('code')
            ->maxLength('code', 250)
            ->allowEmpty('code');

        $validator
            ->scalar('item_type')
            ->maxLength('item_type', 250)
            ->allowEmpty('item_type');

        $validator
            ->decimal('charges')
            ->allowEmpty('charges');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

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
        $rules->add($rules->existsIn(['laundry_item_category_id'], 'LaundryItemCategories'));

        return $rules;
    }
}
