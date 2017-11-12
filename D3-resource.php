<?php
/*
Plugin Name: Resource Plugin
*/
function resource_list_shortcode($attrs, $content) {
    ?>
        <div class="wrapper">
            <?php echo do_shortcode($content); ?>
        </div>
    <?php
}

function resource_shortcode($attrs) {
    $colors = array(
        "1" => "#F99F37",
        "2" => "#F0682B",
        "3" => "#D94F15",
        "4" => "#DA6D09",
        "5" => "#C3540A",
        "6" => "#BA3807",
        "7" => "#D94F15",
        "8" => "#DA6D09",
    );

    $color = $attrs['color'];
    $hex_color = $colors[$color];

    ?>
        <div class="box" style="background-color: <?php echo $hex_color?>">
            <div class="content">
                <div class="image">
                    <i class="fa fa-<?php echo $attrs['icon']?> fa-2x" aria-hidden="true"></i>
                    </div>
        
                    <div class="info">
                    <h2>
                        <a class="link" href="<?php echo $attrs['link']?>" target="_blank"><?php echo $attrs['title']?></a>
                    </h2>
                    <p>
                        <?php echo $attrs['description']?>
                    </p>
                </div>
            </div>
        </div>
    <?php
}

add_shortcode('resource', 'resource_shortcode');
add_shortcode('resource-list', 'resource_list_shortcode');
