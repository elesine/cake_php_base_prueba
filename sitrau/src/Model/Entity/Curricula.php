<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curricula Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $school_id
 * @property bool $active
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\Semester[] $semesters
 */
class Curricula extends Entity
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
        'school_id' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'school' => true,
        'semesters' => true,
    ];
}
