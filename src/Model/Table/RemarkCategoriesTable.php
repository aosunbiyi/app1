<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RemarkCategories Model
 *
 * @property \App\Model\Table\RemarksTable|\Cake\ORM\Association\HasMany $Remarks
 *
 * @method \App\Model\Entity\RemarkCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\RemarkCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RemarkCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RemarkCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RemarkCategory|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RemarkCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RemarkCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RemarkCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RemarkCategoriesTable extends Table
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

        $this->setTable('remark_categories');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Remarks', [
            'foreignKey' => 'remark_category_id'
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
            ->scalar('category_name')
            ->maxLength('category_name', 255)
            ->allowEmpty('category_name');

        return $validator;
    }
}
