<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Product extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $product = new FieldsBuilder('product');

        $product
            ->setLocation('block', '==', 'acf/product');

        $product
            ->addImage('product_image', [
                'label' => 'Image',
            ])

            ->addText('product_name', [
                'label' => 'Name',
            ])

            ->addText('product_price', [
                'label' => 'Price',
            ])

            ->addUrl('product_url', [
                'label' => 'URL',
                'required' => 1,
            ]);

        return $product->build();
    }
}
