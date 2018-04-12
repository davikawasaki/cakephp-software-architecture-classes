<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PollAnswer Model
 *
 * @property \App\Model\Table\PollTable|\Cake\ORM\Association\BelongsTo $Poll
 *
 * @method \App\Model\Entity\PollAnswer get($primaryKey, $options = [])
 * @method \App\Model\Entity\PollAnswer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PollAnswer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PollAnswer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PollAnswer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PollAnswer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PollAnswer findOrCreate($search, callable $callback = null, $options = [])
 */
class PollAnswerTable extends Table
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

        $this->setTable('poll_answer');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Poll', [
            'foreignKey' => 'poll_id',
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
            ->boolean('alt1')
            ->requirePresence('alt1', 'create')
            ->notEmpty('alt1');

        $validator
            ->boolean('alt2')
            ->requirePresence('alt2', 'create')
            ->notEmpty('alt2');

        $validator
            ->boolean('alt3')
            ->requirePresence('alt3', 'create')
            ->notEmpty('alt3');

        $validator
            ->boolean('alt4')
            ->requirePresence('alt4', 'create')
            ->notEmpty('alt4');

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
        $rules->add($rules->existsIn(['poll_id'], 'Poll'));

        return $rules;
    }
}
