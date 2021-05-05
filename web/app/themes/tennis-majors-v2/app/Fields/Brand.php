<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Brand extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $brand = new FieldsBuilder('brand');

        $brand
            ->setLocation('block', '==', 'acf/brand');

        $brand
            ->addImage('brand_image', [
                'label' => 'Image',
            ])

            ->addText('brand_title', [
                'label' => 'Name',
            ])

            ->addText('brand_description', [
                'label' => 'Description',
            ])

            ->addUrl('brand_url', [
                'label' => 'URL',
                'required' => 1,
            ]);

        return $brand->build();
    }
}
