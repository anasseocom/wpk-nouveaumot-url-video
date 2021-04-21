<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Category extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $category = new FieldsBuilder('category');

        $category
            ->setLocation('taxonomy', '==', 'category');

        $category
            ->addImage('category_background', [
                'label' => 'Background',
            ]);

        return $category->build();
    }
}