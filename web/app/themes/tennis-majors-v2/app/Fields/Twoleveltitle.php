<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Twoleveltitle extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $twoleveltitle = new FieldsBuilder('twoleveltitle');

        $twoleveltitle
            ->setLocation('block', '==', 'acf/twoleveltitle');

        $twoleveltitle
            ->addText('title', [
                'label' => 'Title',
            ])
            ->addText('sub_title', [
                'label' => 'Sub title',
            ]);

        return $twoleveltitle->build();
    }
}
