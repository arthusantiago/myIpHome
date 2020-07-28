<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IpsFixture
 */
class IpsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'smallinteger', 'length' => 5, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'ipAddress' => ['type' => 'string', 'length' => null, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'created' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 6],
        'updated' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 6],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'ipAddress' => 'Lorem ipsum dolor sit amet',
                'created' => 1595904141,
                'updated' => 1595904141,
            ],
        ];
        parent::init();
    }
}
