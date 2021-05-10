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
            ->addImage('player_1_image', [
                'label' => 'Player 1 Image',
                'return_format' => 'url',
            ])
            ->addText('player_1_name', [
                'label' => 'Name',
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
            ->addImage('player_2_image', [
                'label' => 'Player 2 Image',
                'return_format' => 'url',
            ])
            ->addText('player_2_name', [
                'label' => 'Name',
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
