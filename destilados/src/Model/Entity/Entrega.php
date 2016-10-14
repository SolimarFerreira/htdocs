<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entrega Entity
 *
 * @property int $id
 * @property float $troco
 * @property \Cake\I18n\Time $dataEntrega
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $status
 * @property int $pedido_id
 * @property int $situacao_id
 * @property int $pessoas_id
 *
 * @property \App\Model\Entity\Pedido $pedido
 * @property \App\Model\Entity\Situacao $situacao
 * @property \App\Model\Entity\Pessoa $pessoa
 */
class Entrega extends Entity
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
