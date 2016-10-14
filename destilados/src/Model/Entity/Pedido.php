<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $dataPedido
 * @property string $descricao
 * @property float $desconto
 * @property float $valorTotal
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $status
 * @property int $user_id
 * @property int $pessoa_id
 * @property int $tipo_id
 * @property int $situacao_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Pessoa $pessoa
 * @property \App\Model\Entity\Tipo $tipo
 * @property \App\Model\Entity\Situacao $situacao
 * @property \App\Model\Entity\Entrega[] $entregas
 * @property \App\Model\Entity\ItensPedido[] $itens_pedidos
 */
class Pedido extends Entity
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
        'id' => false
    ];
}
