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

            ->addOembed('video_url', [
                'label' => 'Video URL',
                'instructions' => '',
                'required' => 0,
            ])

            ->addPostObject('video_previous', [
                'label' => __('Previous', 'sage'),
                'post_type' => [0 => 'videos'],
                'multiple' => 0,
            ])

            ->addPostObject('video_next', [
                'label' => __('Next', 'sage'),
                'post_type' => [0 => 'videos'],
                'multiple' => 0,
            ])

            ->addTrueFalse('video_has_figures', [
                'label' => 'Section "The figures" ?',
            ]);

        return $videos->build();
    }
}