<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teacher Entity
 *
 * @property int $id
 * @property string $name
 * @property string $f_surname
 * @property string $m_surname
 * @property int $dni
 * @property string $personal_mail
 * @property string|null $institutional_mail
 * @property \Cake\I18n\FrozenDate|null $birth_date
 * @property bool $active
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Assignment[] $assignment
 */
class Teacher extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'f_surname' => true,
        'm_surname' => true,
        'dni' => true,
        'personal_mail' => true,
        'institutional_mail' => true,
        'birth_date' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'assignment' => true,
    ];
}
