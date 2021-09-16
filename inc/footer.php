<footer id="contacts-section">
    <div class="container">
        <div class="footer-content">
            <a href="<?php if($_SERVER['REQUEST_URI'] === "/index.php" || $_SERVER['REQUEST_URI'] === "/"){
                echo "index.php";
            } else {
                echo "../index.php";
            }?>" class="logo">My<span>Library</span></a>
            <div class="contacts" itemscope itemtype="https://schema.org/Organization">
                <h2 class="title-contacts">Контакты</h2>
                <p class="phone"><i class="fas fa-phone-alt"></i>+7 (942) 218 35-48</p>
                <p class="vk"><i class="fab fa-vk"></i><a href="https://vk.com/artem09521" target="_blank" itemprop="url">Чирухин Артём</a></p>
                <p class="instagram"><i class="fab fa-instagram"></i><a href="https://instagram.com/artem_09521" itemprop="url" target="_blank">@artem_09521</a></p>
            </div>
        </div>
        <p class="copyright"><i class="far fa-copyright"></i>All rights reserved</p>
    </div>
</footer>