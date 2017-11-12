<?php
/*
Plugin Name: Profile Plugin
*/

function profile_shortcode($attrs) {
    ?>
        <table class="bio-table">
            <tbody>
                <tr>
                    <th class="second-column"><img style="width: 280px; height: 255px;" src="<?php echo $attrs['image']?>" />
                    <p class="caption"><b> 
                    <?php echo $attrs['name'] ?> </b><br/>
                    <i><?php echo $attrs['title']?></i>
                    <?php echo $attrs['phone']?>
                    <?php echo $attrs['email']?>
                    </th>
                    <th class="bio-align-left"><?php echo $attrs['bio']?></th>
                </tr>
            </tbody>
        </table>
    <?php
}

add_shortcode('profile', 'profile_shortcode');
