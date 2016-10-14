<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PedidosHasFormasPagamentosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PedidosHasFormasPagamentosController Test Case
 */
class PedidosHasFormasPagamentosControllerTest extends IntegrationTestCase
{

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
        'app.tipo_pessoas',
        'app.enderecos',
        'app.formas_pagamentos',
        'app.precos',
        'app.produtos',
        'app.categorias',
        'app.tipos',
        'app.situacao',
        'app.entregas',
        'app.itens_pedidos'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
