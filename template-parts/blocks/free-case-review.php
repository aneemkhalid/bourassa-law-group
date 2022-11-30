
<?php $free_case_review_block = get_field('free_case_review_block'); ?>
<section class="free-case-review">
    <div class="inner">
        <div class="content">
            <h3><?php echo $free_case_review_block['title']; ?></h3>
            <a  class="common-btn" href="<?php echo $free_case_review_block['button_link']; ?>"><?php echo $free_case_review_block['button_text']; ?></a>
        </div>
    </div>
</section>