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
            ->setLocation('taxonomy', '==', 'shows');

        $show
            ->addImage('image', [
                'label' => 'Image',
            ]);

        return $show->build();
    }
}