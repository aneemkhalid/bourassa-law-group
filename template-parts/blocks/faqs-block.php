
<?php $faqs_block = get_field('faqs_block'); ?>

<section class="faqs">
    <div class="container">
        <h2><?php echo $faqs_block['heading'];  ?></h2>
        
        <?php if( $faqs_block['faqs'] ): ?>
        <div id="accordion">
         <?php foreach( $faqs_block['faqs'] as $key => $faq ): ?>
            <div class="card">
                <div class="card-header" id="questionOne">
                    <h3>
                        <button data-toggle="collapse" data-target="#collapse-<?php echo $key; ?>" aria-expanded="<?php if($key == 0): ?>true<?php endif; ?>" aria-controls="collapse-<?php echo $key; ?>">
                        <?php echo $faq['question']; ?>
                        </button>
                    </h3>
                </div>

                <div id="collapse-<?php echo $key; ?>" class="collapse <?php if($key == 0): ?>show <?php endif; ?>" aria-labelledby="question-<?php echo $key; ?>" data-parent="#accordion">
                    <div class="card-body">
                        <p><?php echo $faq['answer']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>