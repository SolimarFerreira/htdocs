<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PedidosHasFormasPagamentos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pedidos
 * @property \Cake\ORM\Association\BelongsTo $FormasPagamentos
 *
 * @method \App\Model\Entity\PedidosHasFormasPagamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\PedidosHasFormasPagamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PedidosHasFormasPagamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PedidosHasFormasPagamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PedidosHasFormasPagamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PedidosHasFormasPagamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PedidosHasFormasPagamento findOrCreate($search, callable $callback = null)
 */
class PedidosHasFormasPagamentosTable extends Table
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

        $this->table('pedidos_has_formas_pagamentos');
        $this->displayField('pedidos_id');
        $this->primaryKey(['pedidos_id', 'formas_pagamentos_id']);

        $this->belongsTo('Pedidos', [
            'foreignKey' => 'pedidos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('FormasPagamentos', [
            'foreignKey' => 'formas_pagamentos_id',
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
            ->decimal('valor')
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

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
        $rules->add($rules->existsIn(['pedidos_id'], 'Pedidos'));
        $rules->add($rules->existsIn(['formas_pagamentos_id'], 'FormasPagamentos'));

        return $rules;
    }
}
