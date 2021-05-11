<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Titleonimage extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $titleonimage = new FieldsBuilder('titleonimage');

        $titleonimage
            ->setLocation('block', '==', 'acf/titleonimage');

        $titleonimage
            ->addText('title', [
                'label' => 'Title',
            ])
            ->addImage('image', [
                'label' => 'Image',
            ]);

        return $titleonimage->build();
    }
}
