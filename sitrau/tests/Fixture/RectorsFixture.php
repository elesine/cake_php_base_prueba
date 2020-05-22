<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RectorsFixture
 */
class RectorsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'f_surname' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'poner apellido paterno', 'precision' => null, 'fixed' => null],
        'm_surname' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'poner apellido materno', 'precision' => null, 'fixed' => null],
        'dni' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'dni o carnet de extranjeria en Peru', 'precision' => null, 'autoIncrement' => null],
        'personal_mail' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'correo personal', 'precision' => null, 'fixed' => null],
        'institutional_mail' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => 'preferencia el correo institucional', 'precision' => null, 'fixed' => null],
        'birth_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'university_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'active' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'universities_key' => ['type' => 'index', 'columns' => ['university_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'dni' => ['type' => 'unique', 'columns' => ['dni'], 'length' => []],
            'rectors_ibfk_1' => ['type' => 'foreign', 'columns' => ['university_id'], 'references' => ['universities', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'f_surname' => 'Lorem ipsum dolor ',
                'm_surname' => 'Lorem ipsum dolor ',
                'dni' => 1,
                'personal_mail' => 'Lorem ipsum dolor sit amet',
                'institutional_mail' => 'Lorem ipsum dolor sit amet',
                'birth_date' => '2020-05-22',
                'university_id' => 1,
                'active' => 1,
                'created' => '2020-05-22 12:04:00',
                'modified' => '2020-05-22 12:04:00',
            ],
        ];
        parent::init();
    }
}
