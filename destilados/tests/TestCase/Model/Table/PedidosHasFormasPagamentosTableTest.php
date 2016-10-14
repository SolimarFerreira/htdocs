<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PedidosHasFormasPagamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PedidosHasFormasPagamentosTable Test Case
 */
class PedidosHasFormasPagamentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PedidosHasFormasPagamentosTable
     */
    public $PedidosHasFormasPagamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pedidos_has_formas_pagamentos',
        'app.pedidos',
        'app.users',
        'app.pessoas',
        'app.tipos',
        'app.situacao',
        'app.entregas',
        'app.itens_pedidos',
        'app.formas_pagamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PedidosHasFormasPagamentos') ? [] : ['className' => 'App\Model\Table\PedidosHasFormasPagamentosTable'];
        $this->PedidosHasFormasPagamentos = TableRegistry::get('PedidosHasFormasPagamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PedidosHasFormasPagamentos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
