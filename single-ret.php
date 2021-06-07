<?php

//The template for displaying single episode


get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <button onclick="goBack()">Tilbage</button>

        <article>
            <div class="retContainer">
                <img class="pic" src="" alt="">
                <div class="ret_txt_container">
                    <h2 class="retnavn"></h2>
                    <p class="restaurant"></p>
                    <p class="beskrivelse"></p>
                    <p class="afhentningstidspunkt"></p>
                    <p class="pris"></p>
                    <p class="foerpris"></p>
                    <button class="bestil">Bestil</button>
                    <div id="input_div">
                        <input type="button" value="-" id="moins" onclick="minus()">
                        <input type="text" size="5" value="1" id="count">
                        <input type="button" value="+" id="plus" onclick="plus()">
                    </div>
                    <!--                    <button class="antalRetter">Antal Retter</button>-->
                </div>
            </div>
        </article>
    </main>

    <script>
        let ret;
        let aktuelRet = <?php echo get_the_ID() ?>;
        const url = "http://johanrives.dk/morrow/wp-json/wp/v2/ret/" + aktuelRet;
        var count = 1;
        var countEl = document.getElementById("count");


        function goBack() {
            window.history.back();
        }

        function plus() {
            count++;
            countEl.value = count;
        }

        function minus() {
            if (count > 1) {
                count--;
                countEl.value = count;
            }
        }

        async function getJson() {
            const data = await fetch(url);
            ret = await data.json();
            visRet();
        }

        function visRet() {
            console.log("ret id :", aktuelRet);
            document.querySelector(".pic").src = ret.billede.guid;
            document.querySelector(".retnavn").textContent = ret.title.rendered;
            document.querySelector(".restaurant").textContent = ret.restaurant;
            document.querySelector(".beskrivelse").textContent = ret.beskrivelse;
            document.querySelector(".afhentningstidspunkt").textContent = ret.afhentningstidspunkt;
            document.querySelector(".pris").textContent = ret.pris;
            document.querySelector(".foerpris").textContent = ret.foerpris;
            console.log("episode", ret.link);
        }

        getJson();

    </script>
</section>
<!--#primary-->

<?php
get_footer();
