Usage
================

Simple
-----------------------
```php
echo \russ666\widgets\ButtonsGroupInput::widget([
    'name' => 'elements',
    'value' => [2,3],
    'items' => [
        1 => 'Element 1',
        2 => 'Element 2',
        3 => 'Element 3',
    ]
]);
```

Form Input
-----------------------
```php
echo $form->field($model, 'elements')->widget(\russ666\widgets\ButtonsGroupInput::className(), [
    'items' => [
        1 => 'Element 1',
        2 => 'Element 2',
        3 => 'Element 3',
    ]
]);
```

Params
================

Type
-----------------------
Bootstrap button type. `primary`, `danger` etc.

Size
-----------------------
Bootstrap button size. `lg`, `xs` etc.

Radio
-----------------------
Flag to use buttons group as radio or checkboxes.

Example
================
```php
echo \russ666\widgets\ButtonsGroupInput::widget([
    'name' => 'elements',
    'value' => [2,3],
    'items' => [
        1 => 'Element 1',
        2 => 'Element 2',
        3 => 'Element 3',
    ],
    'type' => 'danger',
    'size' => 'xs',
    'radio' => false,
]);
```