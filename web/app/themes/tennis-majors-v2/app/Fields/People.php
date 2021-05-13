<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class People extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $people = new FieldsBuilder('people');

        $people
            ->setLocation('taxonomy', '==', 'people');

        $people
            ->addImage('image', [
                'label' => 'Image',
                'return_format' => 'url',
            ]);

        return $people->build();
    }
}