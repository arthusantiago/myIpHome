<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IpsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IpsTable Test Case
 */
class IpsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IpsTable
     */
    protected $Ips;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ips',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ips') ? [] : ['className' => IpsTable::class];
        $this->Ips = TableRegistry::getTableLocator()->get('Ips', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ips);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
