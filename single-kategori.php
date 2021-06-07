<?php

//The template for displaying single podcast


get_header();
?>


<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <section class="arrayContainer"></section>

        <template>
            <article class="article_container">
                <img src="" alt="">
                <div class="txt_container">
                    <h2 class="retnavn"></h2>
                    <p class="restaurant"></p>
                    <p class="afhentningstidspunkt"></p>
                    <p class="pris"></p>
                    <p class="foerpris"></p>
                </div>
            </article>
        </template>
    </main>

    <script>
        let retter;
        const retUrl = "http://johanrives.dk/morrow/wp-json/wp/v2/ret?per_page=100";
        const kategori = new URLSearchParams(window.location.search).get("kategori");

        async function getJson() {
            const data = await fetch(retUrl);
            retter = await data.json();
            visRetter();
        }

        function visRetter() {
            console.log(kategori);
            let temp = document.querySelector("template");
            let container = document.querySelector(".arrayContainer");
            container.innerHTML = "";
            retter.forEach(ret => {
                console.log(ret);
                if (ret.kategori == kategori) {
                    let klon = temp.cloneNode(true).content;
                    klon.querySelector(".retnavn").textContent = ret.title.rendered;
                    klon.querySelector("img").src = ret.billede.guid;
                    klon.querySelector(".restaurant").textContent = ret.restaurant;
                    klon.querySelector(".afhentningstidspunkt").textContent = ret.afhentningstidspunkt;
                    klon.querySelector(".pris").textContent = ret.pris;
                    klon.querySelector(".foerpris").textContent = ret.foerpris;
                    klon.querySelector(".article_container").addEventListener("click", () => {
                        location.href = ret.link;
                    })
                    container.appendChild(klon);
                }
            })
        }

        getJson();

    </script>
</section>
<!--#primary-->

<?php
get_footer();
