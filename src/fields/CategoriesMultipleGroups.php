<?php
/**
 * SupercoolTools plugin for Craft CMS 3.x
 *
 * SupercoolTools
 *
 * @link      http://supercooldesign.co.uk
 * @copyright Copyright (c) 2017 Supercool
 */

namespace supercool\tools\fields;

use supercool\tools\Tools as ToolsPlugin;
use supercool\tools\assetbundles\tools\ToolsAsset;

use Craft;
use craft\base\ElementInterface;
use craft\fields\Categories;
use craft\fields\BaseRelationField;
use craft\helpers\Db;
use yii\db\Schema;
use craft\helpers\Template;

/**
 * Categories Multiple Groups Field
 *
 * @author    Supercool
 * @package   SupercoolTools
 * @since     1.0.0
 */
class CategoriesMultipleGroups extends Categories
{
    // Public Properties
    // =========================================================================


    // Static Methods
    // =========================================================================

    /**
     * Returns the display name of this class.
     *
     * @return string The display name of this class.
     */
    public static function displayName(): string
    {
        return Craft::t('tools', 'Categories (Multiple Groups)');
    }

     // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->allowMultipleSources = true;
    }

     /**
     * @inheritdoc
     */
    public function inputHtml($value, ElementInterface $element = null): string
    {
        return BaseRelationField::inputHtml($value, $element);
    }


}
