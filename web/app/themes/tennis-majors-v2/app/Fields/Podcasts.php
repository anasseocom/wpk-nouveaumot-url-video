<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class podcasts extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $podcasts = new FieldsBuilder('podcasts');

        $podcasts
            ->setLocation('post_type', '==', 'podcast-episodes');

        $podcasts

            ->addText('podcast_episode_id', [
                'label' => 'Episode ID',
                'instructions' => 'Put only the ID of the Episode, not the URL! Id should look like this: ae2a9907-258b-470f-8bfd-c4b0aa2efbb7',
                'required' => 0,
            ])

            ->addPostObject('podcast_previous', [
                'label' => __('Previous', 'sage'),
                'post_type' => [0 => 'podcast-episodes'],
                'multiple' => 0,
            ])

            ->addPostObject('podcast_next', [
                'label' => __('Next', 'sage'),
                'post_type' => [0 => 'podcast-episodes'],
                'multiple' => 0,
            ])

            ->addTrueFalse('podcast_has_figures', [
                'label' => 'Section "The figures" ?',
            ]);

        return $podcasts->build();
    }
}