<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rectors Model
 *
 * @property \App\Model\Table\UniversitiesTable&\Cake\ORM\Association\BelongsTo $Universities
 *
 * @method \App\Model\Entity\Rector get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rector newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rector[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rector|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rector saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rector patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rector[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rector findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RectorsTable extends Table
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

        $this->setTable('rectors');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Universities', [
            'foreignKey' => 'university_id',
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
        $rules->add($rules->existsIn(['university_id'], 'Universities'));

        return $rules;
    }
}
