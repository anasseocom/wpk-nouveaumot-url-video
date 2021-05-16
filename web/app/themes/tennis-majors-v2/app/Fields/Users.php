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
            ->addText('user_function', [
                'label' => 'Function',
            ])

            ->addURL('user_twitter', [
                'label' => 'Twitter URL',
            ])

            ->addURL('user_instagram', [
                'label' => 'Instagram URL',
            ])

            ->addTrueFalse('user_is_major', [
                'label' => 'Major user ?',
            ])

            ->addImage('user_avatar', [
                'label' => 'Avatar',
                'return_format' => 'url',
            ])

            ->addTextarea('bio_in_fr', [
                'label' => 'Bio in French',
                'instructions' => 'Your bio, but in French',
                'required' => 0,
                'maxlength' => '750',
                'new_lines' => '', // Possible values are 'wpautop', 'br', or ''.
            ])


            ->addImage('user_image', [
                'label' => 'Major user image',
            ])
                ->conditional('user_is_major', '==', '1')

            ->addPostObject('user_post_on_top', [
                    'label' => 'Post on top',
                    'post_type' => [0 => 'post', 1 => 'videos'],
                    'multiple' => 0,
                ])
                ->conditional('user_is_major', '==', '0')
                ->addPostObject('user_post_on_top_fr', [
                    'label' => 'Post on top FR',
                    'post_type' => [0 => 'post', 1 => 'videos'],
                    'multiple' => 0,
                ])
                ->conditional('user_is_major', '==', '0');
        return $users->build();
    }
}
