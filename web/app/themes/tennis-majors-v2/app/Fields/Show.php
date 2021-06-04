<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Show extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $show = new FieldsBuilder('shows');

        $show
            ->setLocation('taxonomy', '==', 'shows', 'podcasts_shows');

        $show
            ->addText('first_line_title', [
                'label' => 'First line title',
            ])
            ->addText('second_line_title', [
                'label' => 'Second line title',
            ])
            ->addImage('image', [
                'label' => 'Image',
            ])
            ->addImage('image_with_title', [
                'label' => 'Image with title',
            ]);

        return $show->build();
    }
}