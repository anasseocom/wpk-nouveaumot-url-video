<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Videos extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $videos = new FieldsBuilder('videos');

        $videos
            ->setLocation('post_type', '==', 'videos');

        $videos
            ->addUrl('video_url', [
                'label' => 'Video URL',
                'required' => 1,
                'placeholder' => 'Exemple : https://www.dailymotion.com/embed/video/x806y40',
            ])

            ->addPostObject('video_previous', [
                'label' => 'Previous',
                'post_type' => [0 => 'videos'],
                'multiple' => 0,
            ])

            ->addPostObject('video_next', [
                'label' => 'Next',
                'post_type' => [0 => 'videos'],
                'multiple' => 0,
            ])

            ->addTrueFalse('video_has_figures', [
                'label' => 'Section "The figures" ?',
            ]);

        return $videos->build();
    }
}