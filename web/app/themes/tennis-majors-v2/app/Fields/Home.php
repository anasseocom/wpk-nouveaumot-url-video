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
            ->setLocation('options_page', '==', 'home-edition');

        $home
            ->addUrl('live_video_url', [
                'label' => 'Video live URL',
            ])

            ->addPostObject('posts_on_top', [
                'label' => 'Content on top',
                'post_type' => [0 => 'post', 1 => 'videos'],
                'multiple' => 1,
                'max' => 10,
            ])
            
            ->addPostObject('video_on_top', [
                'label' => 'Video on top',
                'post_type' => [0 => 'videos'],
                'multiple' => 0,
            ])
        
            ->addTaxonomy('shows_on_top', [
                'label' => 'Shows on top',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => [],
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'taxonomy' => 'shows',
                'field_type' => 'multi_select',
                'allow_null' => 0,
                'add_term' => 1,
                'save_terms' => 0,
                'load_terms' => 0,
                'return_format' => 'object',
            ])

            ->addPostObject('stories_on_top', [
                'label' => 'Stories on top',
                'post_type' => [0 => 'post', 1 => 'curations', 2 => 'videos'],
                'multiple' => 1,
                'max' => 10,
            ])

            ->addPostObject('partners_on_top', [
                'label' => 'Partners on top',
                'post_type' => [0 => 'partners'],
                'multiple' => 1,
                'max' => 10,
            ])

            ->addPostObject('major_team_on_top', [
                'label' => 'Major Team on top',
                'type' => 'user',
                'multiple' => 1,
                'max' => 10,
                'return_format' => 'id',
            ])

            ->addText('facet_1')

            ->addText('facet_2')
            
            ->addText('facet_3');

        return $home->build();
    }
}
