<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrecosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrecosTable Test Case
 */
class PrecosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrecosTable
     */
    public $Precos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.precos',
        'app.produtos',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Precos') ? [] : ['className' => 'App\Model\Table\PrecosTable'];
        $this->Precos = TableRegistry::get('Precos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Precos);

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
