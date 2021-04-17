<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Partners extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $partners = new FieldsBuilder('partners');

        $partners
            ->setLocation('post_type', '==', 'partners');

        $partners
            ->addUrl('partner_website_url', [
                'label' => 'Site du partenaire',
            ]);

        return $partners->build();
    }
}
