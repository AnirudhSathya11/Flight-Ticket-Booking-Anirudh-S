<nav class="<?php if(isset($home)){echo 'navbar2';} else { echo 'navbar3 sticky';}?>">
    <div class="max-width">
        <div class="logo"><a href="#" style="text-decoration:none;">Anirudh&nbsp;<span>Airlines.</span></a></div>
        <ul class="menu">
            <li><a href="<?php echo url('index.php') ?>" class="menu-btn">Home</a></li>
            <li><a href="#services" class="menu-btn">Services</a></li>

            <?php 
                if(isset($_SESSION['user']))
                {
                $user = $_SESSION['user'];
            ?>
                    <li>
                        <div class="dropdown">
                            <a href=""><i class="far fa-user-circle"></i>    <?php echo $user['fname'] ?></a>
                            <div class="dropdown-content">
                                <a href="<?php echo url('profile.php') ?>">Profile</a>
                                <a href="<?php echo url('logout.php') ?>">LogOut</a>
                            </div>
                        </div>
                        </li>    
            <?php
                }
                else
                {
            ?>
                    <li><a href="<?php echo url('login.php') ?>" class="menu-btn">Login</a></li>
                    <li><a href="<?php echo url('register.php') ?>" class="menu-btn">Register</a></li>        
            <?php
                }
            ?>

        </ul>
        <div class="menu-btn">
            <i class="far fa-list-alt"></i>
        </div>
    </div>
</nav>