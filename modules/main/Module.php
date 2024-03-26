<?php

namespace modules\main;

use Craft;
use craft\base\ElementInterface;
use craft\elements\Entry;
use craft\events\BlockTypesEvent;
use craft\events\DefineEntryTypesForFieldEvent;
use craft\fields\Matrix;
use yii\base\Event;
use yii\base\Module as BaseModule;

/**
 * main module
 *
 * @method static Module getInstance()
 */
class Module extends BaseModule
{
    public function init(): void
    {
        Craft::setAlias('@modules/main', __DIR__);

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->request->isConsoleRequest) {
            $this->controllerNamespace = 'modules\\main\\console\\controllers';
        } else {
            $this->controllerNamespace = 'modules\\main\\controllers';
        }

        parent::init();

        // Defer most setup tasks until Craft is fully initialized
        Craft::$app->onInit(function() {
            $this->attachEventHandlers();
        });
    }

    private function attachEventHandlers(): void
    {
        // Register event handlers here ...
        // (see https://craftcms.com/docs/4.x/extend/events.html to get started)

        Event::on(
            Matrix::class,
            Matrix::EVENT_DEFINE_ENTRY_TYPES,
            function(DefineEntryTypesForFieldEvent $event) {
                $this->hideListItemBlockType($event->element, $event->sender, $event->blockTypes);
            });
    }

    /**
     * Hide the list item block type for a specific field and element.
     *
     * @param ElementInterface $element The element to check.
     * @param object $field The field to check.
     * @param array $blockTypes The array of block types to modify.
     * @return void
     */
    private function hideListItemBlockType(ElementInterface $element, object $field, array &$blockTypes): void
    {
        // Only handle entries
        if (!$element instanceof Entry) {
            return;
        }

        if (!$element->section) {
            return;
        }

        // Don't touch section article
        if ($element->section->handle === 'article') {
            return;
        }

        // Only bodyContent field
        if ($field->handle !== 'bodyContent') {
            return;
        }

        // Hide list item block type
        foreach ($blockTypes as $i => $blockType) {
            if ($blockType->handle === 'listItem') {
                unset($blockTypes[$i]);
            }
        }
    }
}
