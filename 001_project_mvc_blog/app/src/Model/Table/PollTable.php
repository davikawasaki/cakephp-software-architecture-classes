<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Poll Model
 *
 * @property \App\Model\Table\PollAnswerTable|\Cake\ORM\Association\HasMany $PollAnswer
 *
 * @method \App\Model\Entity\Poll get($primaryKey, $options = [])
 * @method \App\Model\Entity\Poll newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Poll[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Poll|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Poll patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Poll[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Poll findOrCreate($search, callable $callback = null, $options = [])
 */
class PollTable extends Table
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

        $this->setTable('poll');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->hasMany('PollAnswer', [
            'foreignKey' => 'poll_id'
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('alt1')
            ->maxLength('alt1', 255)
            ->requirePresence('alt1', 'create')
            ->notEmpty('alt1');

        $validator
            ->scalar('alt2')
            ->maxLength('alt2', 255)
            ->requirePresence('alt2', 'create')
            ->notEmpty('alt2');

        $validator
            ->scalar('alt3')
            ->maxLength('alt3', 255)
            ->requirePresence('alt3', 'create')
            ->notEmpty('alt3');

        $validator
            ->scalar('alt4')
            ->maxLength('alt4', 255)
            ->requirePresence('alt4', 'create')
            ->notEmpty('alt4');

        return $validator;
    }
}
