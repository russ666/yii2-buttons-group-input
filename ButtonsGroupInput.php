<?php

namespace russ666\widgets;

use yii\helpers\Html;
use yii\widgets\InputWidget;

class ButtonsGroupInput extends InputWidget
{
    /**
     * @inheritdoc
     */
    public $items = [];

    /**
     * @inheritdoc
     */
    public $type = 'default';

    /**
     * @inheritdoc
     */
    public $size = 'default';

    /**
     * @var bool
     */
    public $radio = true;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $options = [
            'class' => 'btn-group',
            'data-toggle' => 'buttons',
            'item' => [$this, 'renderItem'],
        ];

        if ($this->name) {
            $type = $this->radio ? 'radioList' : 'checkboxList';

            $result = Html::$type(
                $this->name,
                $this->value,
                $this->items,
                $options
            );

        } else {
            $type = $this->radio ? 'activeRadioList' : 'activeCheckboxList';

            $result = Html::$type(
                $this->model,
                $this->attribute,
                $this->items,
                $options
            );
        }

        return $result;
    }

    /**
     * @param int $index
     * @param string $label
     * @param string $name
     * @param bool $checked
     * @param int|string $value
     * @return string
     */
    public function renderItem($index, $label, $name, $checked, $value)
    {
        $input = $this->radio ? 'radio' : 'checkbox';

        return Html::$input(
            $name,
            $checked,
            [
                'value' => $value,
                'label' => $label,
                'container' => false,
                'labelOptions' => [
                    'class' => 'btn btn-' . $this->type . ' btn-' . $this->size . ($checked ? ' active' : ''),
                ],
            ]
        );
    }
}
