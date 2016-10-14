<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItensPedido Entity
 *
 * @property int $id
 * @property int $quantidade
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $status
 * @property int $preco_idpreco
 * @property int $pedido_id
 *
 * @property \App\Model\Entity\Pedido $pedido
 */
class ItensPedido extends Entity
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
