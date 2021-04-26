<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Readalso extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $readalso = new FieldsBuilder('readalso');

        $readalso
            ->setLocation('block', '==', 'acf/readalso');

        $readalso
            ->addPostObject('read_also', [
                'label' => 'Read also',
                'post_type' => [0 => 'post', 1 => 'videos'],
                'multiple' => 1,
                'max' => 10,
            ]);

        return $readalso->build();
    }
}
