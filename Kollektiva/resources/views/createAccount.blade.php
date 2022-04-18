@include('/boilerplate/header')
<section class="createAccount">
    <div class="pageCounter">
        <p>Steg <span></span> av 5</p>

        <ul>
            <div class="line"></div>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <form action="createResidence" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="steps">
        <div class="radioContainer">
            <p>Hur många rum finns det?</p>

            <section>
                <?php for ($i=1; $i < 7; $i++): ?>
                    <input id="<?= "rooms" . $i ?>" type="radio" name="rooms" value="<?= $i ?>">
                    <label class="radioButton" for="<?= "rooms" . $i ?>">
                        <p>
                            <?php
                                if ($i == 6) {
                                    echo "$i +";
                                } else {
                                    echo $i;
                                }
                            ?>
                        </p>
                    </label>
                <?php endfor; ?>
            </section>
        </div>

        <div class="radioContainer">
            <p>Hur många kan bo där?</p>

            <section>
                <?php for ($i=1; $i < 7; $i++): ?>
                    <input id="<?= "residents" . $i ?>" type="radio" name="residents" value="<?= $i ?>">
                    <label class="radioButton" for="<?= "residents" . $i ?>">
                        <p>
                            <?php
                                if ($i == 6) {
                                    echo "$i +";
                                } else {
                                    echo $i;
                                }
                            ?>
                        </p>
                    </label>
                <?php endfor; ?>
            </section>
        </div>
        <button class="next" type="button">Next</button>
    </div>


    <div class="steps">
            <h1>Steg 3</h1>

            <div class="radioContainer">
                <div>
                    <input id="smokingYes" type="radio" name="smoking" value="true">
                    <label class="radioButton" for="smokingYes">

                        <p>Ja</p>
                    </label>
                </div>

                <p>Somking?</p>

                <div>
                    <input id="smokingNo" type="radio" name="smoking" value="false">
                    <label class="radioButton" for="smokingNo">
                        <p>Nej</p>
                    </label>
                </div>

            </div>

            <div class="radioContainer">
                <div>
                    <input id="animalsYes" type="radio" name="animals" value="true">
                    <label class="radioButton" for="animalsYes">

                        <p>Ja</p>
                    </label>
                </div>

                <p>Är hus djur tillåtna?</p>

                <div>
                    <input id="animalsNo" type="radio" name="animals" value="false">
                    <label class="radioButton" for="animalsNo">
                        <p>Nej</p>
                    </label>
                </div>

            </div>

            <div class="radioContainer">
                <div>
                    <input id="partyingYes" type="radio" name="partying" value="true">
                    <label class="radioButton" for="partyingYes">

                        <p>Ja</p>
                    </label>
                </div>

                <p>Partying?</p>

                <div>
                    <input id="partyingNo" type="radio" name="partying" value="false">
                    <label class="radioButton" for="partyingNo">
                        <p>Nej</p>
                    </label>
                </div>

            </div>
            <button class="next" type="button">Next</button>
        </div>

        <div class="steps">
            <h2>Berätta lite om bostaden</h2>
            <div class="rangeContainer">
                <h3 class="rangeMeter">0</h3>
                <input class="range" id="slider" type="range" value="0" min="0" max="100" name="squaremeters">
            </div>
            <div class="rangeContainer">
                <input class="range" type="range" name="rent">
            </div>

            <!--
                <input type="text" name="name">
                <input type="number" name="rooms">
            <input type="number" name="residents">
            <input type="number" name="bathrooms"> -->

            <button class="next" type="button">Next</button>
        </div>

        <div class="steps">
            <h2>Börja med att registrera ditt konto genom verifiering av BankID. </h2>
            <div class="bankContianer">
                <img src="https://play-lh.googleusercontent.com/bD-qaxBMpWE-o5zM6Hd151pMrW7E_PIHxudRg-k7ty48pdspjzzbsSiiyDy4oUK0nvw" alt="">
                <button>Öppna BankID</button>
            </div>
            <div class="pageNav">
                <div>
                    <button type="button" class="back">
                        <img src="{{ asset('assets/svg/Vector.svg') }}">
                    </button>
                    <p>Föregående</p>
                </div>
                <div>
                    <button class="next" type="button">
                        <img src="{{ asset('assets/svg/Vector.svg') }}">
                    </button>
                    <p>Nästa</p>
                </div>
            </div>
        </div>

    <div class="steps">
        @if($errors->any())
        {{$errors->first()}}
        @endif
        <input type="file" name="picture">
    </div>



    </form>
</section>

<script src="/js/app.js"></script>

@include('/boilerplate/footer')
