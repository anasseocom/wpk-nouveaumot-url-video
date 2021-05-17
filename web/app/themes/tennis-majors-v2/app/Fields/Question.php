<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Question extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $question = new FieldsBuilder('question');

        $question
            ->setLocation('block', '==', 'acf/question');
            
        $question
            ->addText('question', [
                'label' => 'Question',
                'post_type' => [0 => 'post', 1 => 'videos'],
            ]);

        return $question->build();
    }
}
