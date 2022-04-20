@include('/boilerplate/header')

<div>
    <div class="hero-section">
        <h2>Hyr ut din bostad,</h2>
        <h3> eller hyr en bostad.</h3>
        <p>Kollektiva är en uthyrningstjänst för dig som söker nya utmaningar <br> och upplevelser i livet på en annan plats. Förändringar kan vara <br> svåra. Därför vill vi på Kollektiva göra det enkelt och smidigt för dig! </p>
        <div class="hero-button">
            <form action="/account" method="GET">
                <button>Jag vill hyra ut</button>
            </form>
            <button>Jag söker bostad</button>
        </div>
        <!-- <img class="hero" src="{{url('/images/start.jpeg')}}" alt="Image" /> -->
    </div>
    <section class="how-to-section">
        <h2>Hur gör man?</h2>
        <div class="how-to">
            <div class="how-to-wrapper">
                <div class="circle">
                    <h3>1</h3>
                    <h4 class="hide">3</h4>
                </div>
                <div class="vertical-line"></div>
                <div class="circle">
                    <h3>2</h3>
                    <h4 class="hide">2</h4>
                </div>
                <div class="vertical-line"></div>
                <div class="circle">
                    <h3>3</h3>
                    <h4 class="hide">1</h4>
                </div>
            </div>
            <div class="how-to-steps">
                <p>Genomgå Kollektivas guidade väg till annonsering.</p>
                <p>Kollektiva matchar sedan ihop dig med passande hyresgäst.</p>
                <p>Din hyresgäst betalar hyran via Kollektiva, som sedan betalar dig.</p>
            </div>
            <div class="how-to-desktop">
                <div class="desktop-steps">
                    <p>Genomgå Kollektivas guidade <br> väg till annonsering.</p>
                    <p class="right-text">Din hyresgäst betalar hyran via Kollektiva, som sedan betalar dig.</p>
                </div>
                <div class="desktop-steps-2">
                    <p>Kollektiva matchar sedan ihop dig med passande hyresgäst.</p>
                </div>
            </div>
        </div>
        <div class="register-now">
            <picture>
                <source srcset="/images/how-to.png" media="(min-width: 600px)">
                <img src="/images/how-to-mobile.png" alt="" />
            </picture>
            <button>Registrera dig nu</button>
        </div>
    </section>
    <section class="find-residence-section">
        <div class="residence-container">
            <img src="https://momsgotthestuff.com/wp-content/uploads/2021/02/minecraft-house-1.jpg" alt="">
            <h4>Tellgrensgatan 3A</h4>
            <ul>
                <li>Yta: 300 m</li>
                <li>Antal rum: 3 st</li>
                <li>Hyra: 30 000 kr</li>
            </ul>
        </div>
        <div class="residence-container">
            <img src="https://momsgotthestuff.com/wp-content/uploads/2021/02/minecraft-house-1.jpg" alt="">
            <h4>Tellgrensgatan 3A</h4>
            <ul>
                <li>Yta: 300 m</li>
                <li>Antal rum: 3 st</li>
                <li>Hyra: 30 000 kr</li>
            </ul>
        </div>
        <div class="residence-container">
            <img src="https://momsgotthestuff.com/wp-content/uploads/2021/02/minecraft-house-1.jpg" alt="">
            <h4>Tellgrensgatan 3A</h4>
            <ul>
                <li>Yta: 300 m</li>
                <li>Antal rum: 3 st</li>
                <li>Hyra: 30 000 kr</li>
            </ul>
        </div>
    </section>
</div>

<?php

use App\Models\Residence;

$residence = Residence::all();
// die(var_dump($residence));
// die(var_dump($residence->getOriginal()));

?>

<section class="find-residence-section">
    <?php foreach ($residence as $resi) : ?>
        <div class="residence-container">
            <img src="{{url('/uploads/' . $resi->picture)}}" alt="">
            <h4><?= $resi->name ?></h4>
            <ul>
                <li>Yta: 300 m</li>
                <li>Antal rum: 3 st</li>
                <li>Hyra: 30 000 kr</li>
            </ul>
        </div>
    <?php endforeach; ?>
</section>

<script src="/js/hamburger.js"></script>

@include('/boilerplate/footer')
