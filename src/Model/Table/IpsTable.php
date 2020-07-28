<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ips Model
 *
 * @method \App\Model\Entity\Ip newEmptyEntity()
 * @method \App\Model\Entity\Ip newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ip[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ip get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ip findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ip[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ip|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ip saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ip[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ip[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ip[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ip[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class IpsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('ips');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('ipAddress')
            ->requirePresence('ipAddress', 'create')
            ->notEmptyString('ipAddress');

        return $validator;
    }
}
