<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Poll Entity
 *
 * @property int $id
 * @property string $title
 * @property string $alt1
 * @property string $alt2
 * @property string $alt3
 * @property string $alt4
 *
 * @property \App\Model\Entity\PollAnswer[] $poll_answer
 */
class Poll extends Entity
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
        'title' => true,
        'alt1' => true,
        'alt2' => true,
        'alt3' => true,
        'alt4' => true,
        'poll_answer' => true
    ];
}
