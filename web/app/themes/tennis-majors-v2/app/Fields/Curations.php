<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Curations extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $curations = new FieldsBuilder('curations');

        $curations
            ->setLocation('post_type', '==', 'curations');

        $curations
            ->addUrl('post_url', [
                'label' => 'Post URL',
                'required' => 1,
            ])
            ->addText('external_media_name', [
                'label' => 'External media name',
            ])
            ->addImage('external_media_image', [
                'label' => 'External media image',
                'return_format' => 'url',
            ]);

        return $curations->build();
    }
}