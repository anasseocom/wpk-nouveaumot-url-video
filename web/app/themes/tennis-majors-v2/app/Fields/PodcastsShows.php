<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PodcastsShows extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $podcasts_shows = new FieldsBuilder('shows-page');

        $podcasts_shows
            ->setLocation('post_template', '==', 'template-podcasts-shows.blade.php');

        $podcasts_shows
            ->addPostObject('podcasts_on_top', [
                'label' => 'Podcasts on top',
                'post_type' => [0 => 'podcasts_episodes'],
                'multiple' => 1,
                'max' => 3,
            ])
            ->addTaxonomy('podcasts_shows_ordered', [
                'label' => 'Podcasts ordered',
                'taxonomy' => 'podcasts_shows',
                'field_type' => 'multi_select',
                'return_format' => 'object',
                'multiple' => 1,
            ]);

        return $podcasts_shows->build();
    }
}