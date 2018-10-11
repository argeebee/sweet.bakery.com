<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property string $id
 * @property string $itm_name
 * @property string $category
 * @property float $price
 * @property string $slug
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $itm_desc
 * @property string $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \CakeDC\Users\Model\Entity\User $user
 */
class Item extends Entity
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
        'itm_name' => true,
        'category' => true,
        'price' => true,
        'slug' => true,
        'meta_keywords' => true,
        'meta_description' => true,
        'itm_desc' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
