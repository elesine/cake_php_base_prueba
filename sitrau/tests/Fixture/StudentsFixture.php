<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
        'school_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pay_scale_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => 'la escala de pension dada al estudiante', 'precision' => null, 'autoIncrement' => null],
        'active' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'school_key' => ['type' => 'index', 'columns' => ['school_id'], 'length' => []],
            'pay_scale_key' => ['type' => 'index', 'columns' => ['pay_scale_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'dni' => ['type' => 'unique', 'columns' => ['dni'], 'length' => []],
            'students_ibfk_1' => ['type' => 'foreign', 'columns' => ['school_id'], 'references' => ['schools', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'students_ibfk_2' => ['type' => 'foreign', 'columns' => ['pay_scale_id'], 'references' => ['pay_scales', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'school_id' => 1,
                'pay_scale_id' => 1,
                'active' => 1,
                'created' => '2020-05-22 12:08:22',
                'modified' => '2020-05-22 12:08:22',
            ],
        ];
        parent::init();
    }
}
