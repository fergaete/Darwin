<div class="menu_top">
    <ul class="sf-menu main_menu">
        <li class="house"><?php echo link_to(image_tag('home.png', 'alt=Home'),'board/index');?></li>
        <li>
            <a href="#a"><?php echo __('My Profile');?></a>
            <ul>
                <li><a href="#aa">My data</a></li>
                <li><a href="#aa">Preferences</a></li>
                <li><a href="#aa">Rights</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><?php echo __('Searches');?></a>
            <ul>
                <li>
                    <a href="#aa">My Searches</a>
                    <ul>
                        <li><a href="#">menu item</a></li>
                        <li><a href="#">menu item</a></li>
                        <li><a href="#">menu item</a></li>
                        <li><a href="#">menu item</a></li>
                        <li><a href="#">menu item</a></li>
                    </ul>
                </li>
                <li><a href="./?page=result">Specimens</a></li>
                <li>
                    <a href="#aa">Catalogues</a>
                    <ul>
                        <li><a href="#">Taxa</a></li>
                        <li><a href="#">Habitats</a></li>
                        <li><a href="#">....</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><?php echo __('Loans');?></a>
            <ul>
                <li><a href="#">Loans waiting</a></li>
                <li><a href="#">Loans to approve</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><?php echo __('Add');?></a>
            <ul>
                <li><a href="?page=encode_spec">Specimen</a></li>
                <li>
                    <a href="#">Catalogues</a>
                    <ul>
                        <li><a href="#">Taxa</a></li>
                        <li><a href="#">Habitats</a></li>
                        <li><a href="#">....</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href=""><?php echo __('Administration');?></a>
            <ul>
                <li><a href="#">Users</a></li>
                <li><a href="#">Rights</a></li>
                <li><a href="#">A Super Long truc en NL</a></li>
                <li><a href="#">....</a></li>
            </ul>
        </li>
        <li class="exit" ><?php echo link_to(image_tag('exit.png', 'alt=Exit'),'account/logout');?></li>
    </ul>
</div>