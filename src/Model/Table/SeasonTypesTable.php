<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SeasonTypes Model
 *
 * @property \App\Model\Table\SeasonsTable|\Cake\ORM\Association\HasMany $Seasons
 *
 * @method \App\Model\Entity\SeasonType get($primaryKey, $options = [])
 * @method \App\Model\Entity\SeasonType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SeasonType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SeasonType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SeasonType|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SeasonType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SeasonType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SeasonType findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SeasonTypesTable extends Table
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

        $this->setTable('season_types');
        $this->setDisplayField('season_type_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Seasons', [
            'foreignKey' => 'season_type_id'
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
            ->scalar('season_type_name')
            ->maxLength('season_type_name', 255)
            ->allowEmpty('season_type_name');

        $validator
            ->scalar('deacription')
            ->allowEmpty('deacription');

        return $validator;
    }
}
