<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\PessoasBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\PessoasBehavior Test Case
 */
class PessoasBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\PessoasBehavior
     */
    public $Pessoas;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Pessoas = new PessoasBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pessoas);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
