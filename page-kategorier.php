<?php

//The template for displaying: "Kategorier" side


get_header();
?>
<?php the_content(); ?>

<style>
    .arrayContainer {
        margin: 200px;
    }

</style>

<section id="primary" class="content-area">
    <main id="main" class="site-main inner-wrap">

        <section class="arrayContainer"></section>

        <template>
            <article class="kat_article_container">
                <div class="katImgContainer">
                    <img src="" alt="">
                </div>
                <div class="txt_container">
                    <h2 class="kategori"></h2>
                </div>
            </article>
        </template>
    </main>

    <script>
        let kategorier;
        const url = "http://johanrives.dk/morrow/wp-json/wp/v2/kategori?per_page=100";

        async function getJson() {
            const data = await fetch(url);
            kategorier = await data.json();
            visKategorier();
        }

        function visKategorier() {
            console.log(kategorier);
            let temp = document.querySelector("template");
            let container = document.querySelector(".arrayContainer");
            container.innerHTML = "";
            kategorier.forEach(kategori => {
                let klon = temp.cloneNode(true).content;
                klon.querySelector("img").src = kategori.billede.guid;
                klon.querySelector(".kategori").textContent = kategori.kategori;
                klon.querySelector("img").addEventListener("click", () => {
                    location.href = kategori.link + "?kategori=" + kategori.kategori;
                })
                container.appendChild(klon);

            })
        }

        getJson();

    </script>
</section>



<?php
get_footer();
