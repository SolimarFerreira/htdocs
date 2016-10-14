<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SituacaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SituacaoTable Test Case
 */
class SituacaoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SituacaoTable
     */
    public $Situacao;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.situacao',
        'app.entregas',
        'app.pedidos',
        'app.users',
        'app.pessoas',
        'app.tipo_pessoas',
        'app.enderecos',
        'app.tipos',
        'app.itens_pedidos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Situacao') ? [] : ['className' => 'App\Model\Table\SituacaoTable'];
        $this->Situacao = TableRegistry::get('Situacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Situacao);

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
