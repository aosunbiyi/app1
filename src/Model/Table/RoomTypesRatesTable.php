<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoomTypesRates Model
 *
 * @property \App\Model\Table\RoomTypesTable|\Cake\ORM\Association\BelongsTo $RoomTypes
 * @property \App\Model\Table\RatesTable|\Cake\ORM\Association\BelongsTo $Rates
 *
 * @method \App\Model\Entity\RoomTypesRate get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoomTypesRate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoomTypesRate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoomTypesRate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomTypesRate|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomTypesRate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoomTypesRate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoomTypesRate findOrCreate($search, callable $callback = null, $options = [])
 */
class RoomTypesRatesTable extends Table
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

        $this->setTable('room_types_rates');
        $this->setDisplayField('room_type_id');
        $this->setPrimaryKey(['room_type_id', 'rate_id']);

        $this->belongsTo('RoomTypes', [
            'foreignKey' => 'room_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Rates', [
            'foreignKey' => 'rate_id',
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
        $rules->add($rules->existsIn(['room_type_id'], 'RoomTypes'));
        $rules->add($rules->existsIn(['rate_id'], 'Rates'));

        return $rules;
    }
}
