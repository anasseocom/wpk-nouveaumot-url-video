<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Shows extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $shows = new FieldsBuilder('shows-page');

        $shows
            ->setLocation('post_template', '==', 'template-shows.blade.php');

        $shows
            ->addPostObject('videos_on_top', [
                'label' => 'Videos on top',
                'post_type' => [0 => 'videos'],
                'multiple' => 1,
                'max' => 3,
            ])
            ->addTaxonomy('shows_ordered', [
                'label' => 'Shows ordered',
                'taxonomy' => 'shows',
                'field_type' => 'multi_select',
                'return_format' => 'object',
                'multiple' => 1,
            ]);

        return $shows->build();
    }
}