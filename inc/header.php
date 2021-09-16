<header>
    <div class="container">
        <div class="header-top">
            <nav>
                <a href="../index.php" class="logo" itemscope itemtype="https://schema.org/Organization">My<span>Library</span></a>
                <ul class="menu" itemscope itemtype="https://schema.org/Menu">
                    <?php
                        if(!strstr($_SERVER['REQUEST_URI'], 'pages')){
                            echo '
                            <li><a href="#" id="about-link" itemprop="about">О нас</a></li>
                            <li><a href="pages/news.php" itemprop="url">Новости</a></li>
                            <li><a href="pages/ourwork.php" itemprop="url">Наша работа</a></li>
                            <li><a href="#" id="assortment-link" itemprop="offers">Книги в наличии</a></li>
                            <li><a href="#" id="contacts-link">Контакты</a></li>';
                        } else{
                            echo '<li><a href="../index.php" itemprop="url">На главную</a></li>';
                        }
                    ?>
                </ul>
                <a href="#" class="menu-btn"><span></span></a>
            </nav>
        </div>
    </div>
</header>