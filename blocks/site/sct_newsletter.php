<section class="bkg-black m-0 p-48">
    <div class="sect-content">
        <div class="col g-24">
            <h4>Assine nossa newsletter e fique por dentro da novidades</h4>
            
            <form action="<?php echo $home.'functions/store/newsletter/fun_ins_newsletter.php' ?>" method="post" class="row w-100 g-16 onres-flex-wrap">
                <input type="text" name="news_name" placeholder="Nome" required class="color-black">
                <input type="email" name="news_email" placeholder="E-mail" required class="color-black">
                <button type="submit">Assinar</button>
            </form>
        </div>
    </div>
</section>