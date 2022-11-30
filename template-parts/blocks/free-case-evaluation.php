
<?php $evaluation_block = get_field('free_case_evaluation_block'); ?>
<section class="free-case-evaluation block">

    <style>
        .free-case-evaluation.block:before{
            background-image:  url('<?php echo $evaluation_block['background_image'];?>');
        }
    </style>

    <div class="container">
        <div class="inner">
            <div class="content">
                <h3><?php echo $evaluation_block['title']; ?></h3>
                <p><?php echo $evaluation_block['content']; ?></p>
                <?php if( $evaluation_block['phone'] ): ?>
                    <p><b>Call <a href="tel:<?php echo $evaluation_block['phone']; ?>"><?php echo $evaluation_block['phone']; ?></a></b></p>
                <?php endif; ?>    
                <a class="common-btn" href="<?php echo $evaluation_block['button_link']; ?>"><?php echo $evaluation_block['button_text']; ?></a>
            </div>
            <div class="img-wrap">
                <img src="<?php echo $evaluation_block['image']; ?>" alt="">
            </div>
        </div>
    </div>
</section>