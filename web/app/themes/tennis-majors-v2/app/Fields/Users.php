<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Users extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $users = new FieldsBuilder('users');

        $users
            ->setLocation('user_form', '==', 'all');

        $users
            ->addTrueFalse('user_is_major', [
                'label' => 'Major user ?',
            ])

            ->addImage('user_image', [
                'label' => 'Major user image',
            ])
                ->conditional('user_is_major', '==', '1');

        return $users->build();
    }
}
