<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Scoring extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $scoring = new FieldsBuilder('scoring');

        $scoring
            ->setLocation('block', '==', 'acf/scoring');

        $scoring
            ->addText('scoring_title', [
                'label' => 'Title',
            ])
            ->addTaxonomy('player_1', [
                'label' => 'Player 1',
                'taxonomy' => 'people',
                'multiple' => 0,
            ])
            ->addText('player_1_rank', [
                'label' => 'Rank',
            ])
            ->addText('player_1_set_1', [
                'label' => 'Set 1',
            ])
            ->addText('player_1_set_2', [
                'label' => 'Set 2',
            ])
            ->addText('player_1_set_3', [
                'label' => 'Set 3',
            ])
            ->addText('player_1_set_4', [
                'label' => 'Set 4',
            ])
            ->addText('player_1_set_5', [
                'label' => 'Set 5',
            ])
            ->addTaxonomy('player_2', [
                'label' => 'Player 2',
                'taxonomy' => 'people',
                'multiple' => 0,
            ])
            ->addText('player_2_rank', [
                'label' => 'Rank',
            ])
            ->addText('player_2_set_1', [
                'label' => 'Set 1',
            ])
            ->addText('player_2_set_2', [
                'label' => 'Set 2',
            ])
            ->addText('player_2_set_3', [
                'label' => 'Set 3',
            ])
            ->addText('player_2_set_4', [
                'label' => 'Set 4',
            ])
            ->addText('player_2_set_5', [
                'label' => 'Set 5',
            ]);

        return $scoring->build();
    }
}
