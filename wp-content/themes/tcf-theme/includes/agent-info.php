<section class="section section-sm">
    <div class="container">
        <h4 class="subheading bottom-bar bottom-bar-blue">Agent Information</h4>

        <div class="row">
            <div class="col-lg-3">
                <?php 
                $img = get_field('agent_picture', 'option');
                ?>
                <?php if($img){ ?>
                    <img src="<?php echo $img['sizes']['large'] ?: $img['url']; ?>" alt="<?php echo get_field('agent_name'); ?>" class="img-fluid">
                <?php } ?>
            </div>
            <div class="col-lg-3">
                <p><?php echo get_field('agent_name', 'option'); ?></p>
                <p>
                    <span class="d-inline-block pr-3">
                        <i class="far fa-phone"></i>
                        Mobile
                    </span>
                    <?php echo get_field('agent_mobile_phone', 'option'); ?>
                </p>
                <p>
                    <span class="d-inline-block pr-3">
                        <i class="far fa-envelope"></i>
                        Email
                    </span>
                    <?php echo get_field('agent_email', 'option'); ?>
                </p>
                <p>
                    <span class="d-inline-block pr-3">
                        <i class="far fa-phone"></i>
                        Phone
                    </span>
                    <?php echo get_field('agent_business_phone', 'option'); ?>
                </p>
                <div class="row">
                    <p>
                        <?php
                        $facebook = get_field('agent_facebook', 'option');
                        $twitter = get_field('agent_twitter', 'option');
                        $instagram = get_field('agent_instagram', 'option');
                        $google_plus = get_field('agent_google_plus', 'option');

                        if($facebook){
                            echo "<span class='d-inline-block'>";
                                echo "<a class='btn btn-link' href='". $facebook ."'>";
                                    echo "<i class='fab fa-facebook-square'></i>";
                                echo "</a>";
                            echo "</span>";
                        }
                        if($twitter){
                            echo "<span class='d-inline-block'>";
                                echo "<a class='btn btn-link' href='". $twitter ."'>";
                                    echo "<i class='fab fa-twitter-square'></i>";
                                echo "</a>";
                            echo "</span>";
                        }
                        if($instagram){
                            echo "<span class='d-inline-block'>";
                                echo "<a class='btn btn-link' href='". $instagram ."'>";
                                    echo "<i class='fab fa-instagram'></i>";
                                echo "</a>";
                            echo "</span>";
                        }
                        if($google_plus){
                            echo "<span class='d-inline-block'>";
                                echo "<a class='btn btn-link' href='". $google_plus ."'>";
                                    echo "<i class='fab fa-google-plus-square'></i>";
                                echo "</a>";
                            echo "</span>";
                        }
                        ?>
                        
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo get_field('agent_biography', 'option'); ?>
            </div>
        </div>
    </div>
</div>