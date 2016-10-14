<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoPessoasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoPessoasTable Test Case
 */
class TipoPessoasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoPessoasTable
     */
    public $TipoPessoas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tipo_pessoas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TipoPessoas') ? [] : ['className' => 'App\Model\Table\TipoPessoasTable'];
        $this->TipoPessoas = TableRegistry::get('TipoPessoas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoPessoas);

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
