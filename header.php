<?php wp_head()  ?>
    <!-- HEADER -->
     <header class="header">
        <div class="container lg:px-[10rem]">
            <div class="header__wrapper flex flex-row justify-between items-end border-b 
            p-1">
                <div class=" flex flex-row gap-6">
                  <h3 class=" text-3xl font-bold hover:underline">BLOG</h3>

                <ul class="header__nav flex flex-row gap-6 items-end">
                    <?php wp_menu_li() ?>
                </ul>  
                </div>
                

                <div class="header__icon"id="themeToggle"><i class="fa-solid fa-sun"></i></div>
            
            </div>
        </div>
     </header>