<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PollAnswer Entity
 *
 * @property int $id
 * @property int $poll_id
 * @property bool $alt1
 * @property bool $alt2
 * @property bool $alt3
 * @property bool $alt4
 *
 * @property \App\Model\Entity\Poll $poll
 */
class PollAnswer extends Entity
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
        'poll_id' => true,
        'alt1' => true,
        'alt2' => true,
        'alt3' => true,
        'alt4' => true,
        'poll' => true
    ];
}
