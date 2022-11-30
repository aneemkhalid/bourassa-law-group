
<?php $vehicle_fatalities = get_field('vehicle_fatalities_block'); ?>
<section class="fatalities">
    <div class="inner">
        <?php if( $vehicle_fatalities['vehicle_fatalities'] ): ?>
            <h3><?php echo $vehicle_fatalities['heading']; ?></h3>

            <?php foreach( $vehicle_fatalities['vehicle_fatalities'] as $vehicle_fatality ): ?>
                <div class="single-fatality">
                    <h4><?php echo $vehicle_fatality['title']; ?></h4>

                    <div class="progress-bar-wrapper">
                        <div class="progress-bar">
                            <div class="progress" style="background: <?php echo $vehicle_fatality['color']; ?>; width: <?php echo $vehicle_fatality['value']; ?>%;"></div>
                        </div>

                        <span><?php echo $vehicle_fatality['value']; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>