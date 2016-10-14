<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pessoa Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $email
 * @property string $dataNascimento
 * @property string $celular
 * @property string $telefone
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $status
 * @property int $user_id
 * @property int $tipo_pessoas_id
 *
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\TipoPessoa $tipo_pessoa
 * @property \App\Model\Entity\Endereco[] $enderecos
 * @property \App\Model\Entity\Pedido[] $pedidos
 */
class Pessoa extends Entity
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
