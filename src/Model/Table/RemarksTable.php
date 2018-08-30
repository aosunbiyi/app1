<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Remarks Model
 *
 * @property \App\Model\Table\RemarkCategoriesTable|\Cake\ORM\Association\BelongsTo $RemarkCategories
 *
 * @method \App\Model\Entity\Remark get($primaryKey, $options = [])
 * @method \App\Model\Entity\Remark newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Remark[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Remark|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Remark|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Remark patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Remark[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Remark findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RemarksTable extends Table
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

        $this->setTable('remarks');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('RemarkCategories', [
            'foreignKey' => 'remark_category_id',
            'joinType' => 'INNER'
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
            ->integer('sort_key')
            ->allowEmpty('sort_key');

        $validator
            ->scalar('reason')
            ->allowEmpty('reason');

        $validator
            ->allowEmpty('active');

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
        $rules->add($rules->existsIn(['remark_category_id'], 'RemarkCategories'));

        return $rules;
    }
}
