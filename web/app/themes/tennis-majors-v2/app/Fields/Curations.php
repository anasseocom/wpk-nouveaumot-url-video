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
                'label' => 'URL de la  publication',
                'required' => 1,
            ]);

        return $curations->build();
    }
}