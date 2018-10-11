<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemsTable Test Case
 */
class ItemsTableTest extends TestCase
{
    public function testBeforeMarshal()
    {
        $item = $this->Items->newEntity();
        $item = $this->Items->patchEntity($item, ['itm_name'=>'Green Tea Cookies']);
        $this->Items->save($item);

        $result = $this->Items->find()->first();
        $this->assertEquals('green-tea-cookies', $result['slug']);
    }

    public function testCreateSlug()
    {
        $result = $this->Items->createSlug('Green Tea Crepe Cake');
        $this->assertEquals('green-tea-crepe-cake', $result);
        $result = $this->Items->createSlug('Green Tea!, Crepe Cake');
        $this->assertEquals('green-tea-crepe-cake', $result);
        $result = $this->Items->createSlug('Green Tea   Crepe Cake*$');
        $this->assertEquals('green-tea-crepe-cake', $result);
        $result = $this->Items->createSlug('Green Tea-   Crepe Cake-');
        $this->assertEquals('green-tea-crepe-cake', $result);
    }

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemsTable
     */
    public $Items;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.items',
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
        $config = TableRegistry::getTableLocator()->exists('Items') ? [] : ['className' => ItemsTable::class];
        $this->Items = TableRegistry::getTableLocator()->get('Items', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Items);

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
