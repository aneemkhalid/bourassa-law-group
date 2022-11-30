<?php


add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'about-block',
            'title'             => __('About Block'),
            'description'       => __('About Block'),
            'render_template'   => 'template-parts/blocks/about-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'practice-block',
            'title'             => __('Practice Areas Block'),
            'description'       => __('Practice Areas Block'),
            'render_template'   => 'template-parts/blocks/practice-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'free-consultation-block',
            'title'             => __('Free consultation Block'),
            'description'       => __('Free consultation Block'),
            'render_template'   => 'template-parts/blocks/free-consultation-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'cta-block',
            'title'             => __('Call To Action Block'),
            'description'       => __('Call To Action Block'),
            'render_template'   => 'template-parts/blocks/cta-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'why-choose-us-block',
            'title'             => __('Why Chooose Us Block'),
            'description'       => __('Why Chooose Us Block'),
            'render_template'   => 'template-parts/blocks/why-choose-us-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'awards-block',
            'title'             => __('Awards & Affiliations Block'),
            'description'       => __('Awards & Affiliations Block'),
            'render_template'   => 'template-parts/blocks/awards-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'testimonials-block',
            'title'             => __('Testimonials Block'),
            'description'       => __('Testimonials Block'),
            'render_template'   => 'template-parts/blocks/testimonials-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'verdicts-settelments-block',
            'title'             => __('Verdicts & Settelments Block'),
            'description'       => __('Verdicts & Settelments Block'),
            'render_template'   => 'template-parts/blocks/verdicts-settelments-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'free-case-evaluation',
            'title'             => __('Free Case Evaluation'),
            'description'       => __('Free Case Evaluation Block for the single posts template of Practice Areas CPT'),
            'render_template'   => 'template-parts/blocks/free-case-evaluation.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'free-case-review',
            'title'             => __('Free Case Review'),
            'description'       => __('Free Case Review Block for the single posts template of Practice Areas CPT'),
            'render_template'   => 'template-parts/blocks/free-case-review.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'vehicles-fatalities',
            'title'             => __('Vehicle Fatalities'),
            'description'       => __('Vehicle Fatalities Block for the single posts template of Practice Areas CPT'),
            'render_template'   => 'template-parts/blocks/vehicle-fatalities.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'faqs-block',
            'title'             => __('FAQs'),
            'description'       => __('FAQs Block for the single posts template of Practice Areas CPT'),
            'render_template'   => 'template-parts/blocks/faqs-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'our-mission-block-quote',
            'title'             => __('Our Mission Block Quote'),
            'description'       => __('Our Mission Block Quote'),
            'render_template'   => 'template-parts/blocks/our-mission-block-quote.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'verdicts-settlements-results-block',
            'title'             => __('Verdicts & settlements Results Block'),
            'description'       => __('Verdicts & settlements Results Block'),
            'render_template'   => 'template-parts/blocks/verdicts-settlements-results-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));

        acf_register_block_type(array(
            'name'              => 'attorneys-block',
            'title'             => __('Attorneys Block'),
            'description'       => __('Attorneys Block'),
            'render_template'   => 'template-parts/blocks/attorneys-block.php',
            'category'          => 'formatting',
            'mode'              =>  'edit',
        ));
    }
}
