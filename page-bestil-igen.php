<?php

//The template for displaying: "Bestil igen" side


get_header();
?>
<?php the_content(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main inner-wrap">
        <div id="topSection">
            <div class="titelWrap">
                <h1 class="udforskTitel">Bestil igen</h1>
                <p>Genoplev tidligere bestilte retter</p>
            </div>
            <section class="arrayContainer"></section>
        </div>

        <div class="titelWrap">
            <h2>I nærheden</h2>
            <section class="arrayContainer2"></section>
            <button><a href="http://johanrives.dk/morrow/index.php/mad-i-naerheden/">Se alle</a></button>
        </div>

        <div class="titelWrap">
            <h2>Populært i dag</h2>
            <section class="arrayContainer3"></section>
            <button><a href="http://johanrives.dk/morrow/index.php/populaert-i-dag/">Se alle</a></button>
        </div>

        <template>
            <article class="article_container">
                <div class="imgContainer">
                    <img src="" alt="">
                </div>
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
        const url = "http://johanrives.dk/morrow/wp-json/wp/v2/ret?per_page=100";

        async function getJson() {
            const data = await fetch(url);
            retter = await data.json();
            visRetter();
            visINearheden();
            visPopulaere();
        }

        function visRetter() {
            console.log(retter);
            let temp = document.querySelector("template");
            let container = document.querySelector(".arrayContainer");
            container.innerHTML = "";
            retter.forEach(ret => {
                if (ret.categories.includes(4)) {
                    let klon = temp.cloneNode(true).content;
                    klon.querySelector(".retnavn").textContent = ret.title.rendered;
                    klon.querySelector("img").src = ret.billede.guid;
                    klon.querySelector(".restaurant").textContent = ret.restaurant;
                    klon.querySelector(".pris").textContent = ret.pris;
                    klon.querySelector(".foerpris").textContent = ret.foerpris;
                    klon.querySelector(".afhentningstidspunkt").textContent = ret.afhentningstidspunkt;
                    klon.querySelector(".article_container").addEventListener("click", () => {
                        location.href = ret.link;
                    })
                    container.appendChild(klon);
                }
            })
        }

        function visINearheden() {
            const n = 5;
            const shortArray = retter.slice(0, n);
            let temp = document.querySelector("template");
            let container = document.querySelector(".arrayContainer2");
            container.innerHTML = "";
            shortArray.forEach(ret => {
                if (ret.categories.includes(3)) {
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

        function visPopulaere() {
            const n = 5;
            const shortArray = retter.slice(0, n);
            let temp = document.querySelector("template");
            let container = document.querySelector(".arrayContainer3");
            container.innerHTML = "";
            shortArray.forEach(ret => {
                if (ret.categories.includes(1)) {
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



<?php
get_footer();
