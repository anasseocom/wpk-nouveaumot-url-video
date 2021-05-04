<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Majorteam extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $majorteam = new FieldsBuilder('major-team');

        $majorteam
            ->setLocation('post_template', '==', 'template-major-team.blade.php');

        $majorteam
            ->addPostObject('users_majors', [
                'label' => 'Major Team',
                'type' => 'user',
                'multiple' => 1,
                'max' => 10,
                'return_format' => 'id',
            ])

            ->addPostObject('users_authors', [
                'label' => 'Authors',
                'type' => 'user',
                'multiple' => 1,
                'max' => 10,
                'return_format' => 'id',
            ]);

        return $majorteam->build();
    }
}