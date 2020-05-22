<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coordinators Model
 *
 * @property \App\Model\Table\SchoolsTable&\Cake\ORM\Association\BelongsTo $Schools
 *
 * @method \App\Model\Entity\Coordinator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coordinator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Coordinator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coordinator|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coordinator saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coordinator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coordinator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coordinator findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CoordinatorsTable extends Table
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

        $this->setTable('coordinators');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Schools', [
            'foreignKey' => 'school_id',
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('f_surname')
            ->maxLength('f_surname', 20)
            ->requirePresence('f_surname', 'create')
            ->notEmptyString('f_surname');

        $validator
            ->scalar('m_surname')
            ->maxLength('m_surname', 20)
            ->requirePresence('m_surname', 'create')
            ->notEmptyString('m_surname');

        $validator
            ->integer('dni')
            ->requirePresence('dni', 'create')
            ->notEmptyString('dni')
            ->add('dni', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('personal_mail')
            ->maxLength('personal_mail', 50)
            ->requirePresence('personal_mail', 'create')
            ->notEmptyString('personal_mail');

        $validator
            ->scalar('institutional_mail')
            ->maxLength('institutional_mail', 50)
            ->allowEmptyString('institutional_mail');

        $validator
            ->date('birth_date')
            ->allowEmptyDate('birth_date');

        $validator
            ->boolean('active')
            ->notEmptyString('active');

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
        $rules->add($rules->isUnique(['dni']));
        $rules->add($rules->existsIn(['school_id'], 'Schools'));

        return $rules;
    }
}
