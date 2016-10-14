<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PedidosHasFormasPagamento Entity
 *
 * @property int $pedidos_id
 * @property int $formas_pagamentos_id
 * @property float $valor
 *
 * @property \App\Model\Entity\Pedido $pedido
 * @property \App\Model\Entity\FormasPagamento $formas_pagamento
 */
class PedidosHasFormasPagamento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'pedidos_id' => false,
        'formas_pagamentos_id' => false
    ];
}
