<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidosHasFormasPagamentosFixture
 *
 */
class PedidosHasFormasPagamentosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pedidos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'formas_pagamentos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor' => ['type' => 'decimal', 'length' => 9, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'fk_pedidos_has_formas_pagamentos_formas_pagamentos1_idx' => ['type' => 'index', 'columns' => ['formas_pagamentos_id'], 'length' => []],
            'fk_pedidos_has_formas_pagamentos_pedidos1_idx' => ['type' => 'index', 'columns' => ['pedidos_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['pedidos_id', 'formas_pagamentos_id'], 'length' => []],
            'fk_pedidos_has_formas_pagamentos_formas_pagamentos1' => ['type' => 'foreign', 'columns' => ['formas_pagamentos_id'], 'references' => ['formas_pagamentos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_pedidos_has_formas_pagamentos_pedidos1' => ['type' => 'foreign', 'columns' => ['pedidos_id'], 'references' => ['pedidos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'pedidos_id' => 1,
            'formas_pagamentos_id' => 1,
            'valor' => 1.5
        ],
    ];
}
