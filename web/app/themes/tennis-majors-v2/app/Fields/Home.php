<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Home extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $home = new FieldsBuilder('home');

        $home
            ->setLocation('post_template', '==', 'template-home.blade.php');

        $home
            ->addPostObject('posts_on_top', [
                'label' => 'Articles à la une',
                'post_type' => [0 => 'post'],
                'multiple' => 1,
                'max' => 10,
            ]);

        return $home->build();
    }
}
