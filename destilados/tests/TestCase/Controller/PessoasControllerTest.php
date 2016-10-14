<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PessoasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PessoasController Test Case
 */
class PessoasControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pessoas',
        'app.users',
        'app.formas_pagamentos',
        'app.pedidos',
        'app.tipos',
        'app.situacao',
        'app.entregas',
        'app.itens_pedidos',
        'app.precos',
        'app.produtos',
        'app.categorias',
        'app.tipo_pessoas',
        'app.enderecos'
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
