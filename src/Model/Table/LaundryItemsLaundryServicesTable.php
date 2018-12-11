<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LaundryItemsLaundryServices Model
 *
 * @property \App\Model\Table\LaundryItemsTable|\Cake\ORM\Association\BelongsTo $LaundryItems
 * @property \App\Model\Table\LaundryServicesTable|\Cake\ORM\Association\BelongsTo $LaundryServices
 *
 * @method \App\Model\Entity\LaundryItemsLaundryService get($primaryKey, $options = [])
 * @method \App\Model\Entity\LaundryItemsLaundryService newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LaundryItemsLaundryService[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LaundryItemsLaundryService|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryItemsLaundryService|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LaundryItemsLaundryService patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryItemsLaundryService[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LaundryItemsLaundryService findOrCreate($search, callable $callback = null, $options = [])
 */
class LaundryItemsLaundryServicesTable extends Table
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

        $this->setTable('laundry_items_laundry_services');
        $this->setDisplayField('laundry_item_id');
        $this->setPrimaryKey(['laundry_item_id', 'laundry_service_id']);

        $this->belongsTo('LaundryItems', [
            'foreignKey' => 'laundry_item_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LaundryServices', [
            'foreignKey' => 'laundry_service_id',
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
        $rules->add($rules->existsIn(['laundry_item_id'], 'LaundryItems'));
        $rules->add($rules->existsIn(['laundry_service_id'], 'LaundryServices'));

        return $rules;
    }
}
