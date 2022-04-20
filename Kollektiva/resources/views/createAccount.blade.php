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
            <h2>Börja med att registrera ditt konto genom verifiering av BankID. </h2>
            <div class="bankContianer">
                <img src="https://play-lh.googleusercontent.com/bD-qaxBMpWE-o5zM6Hd151pMrW7E_PIHxudRg-k7ty48pdspjzzbsSiiyDy4oUK0nvw" alt="">
                <button>Öppna BankID</button>
            </div>

            <!-- <div class="pageNav">
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
            </div> -->

            <button class="next" type="button">Next</button>
        </div>

    <div class="steps">
        <div class="radioContainer">
            <p class="question">Hur många rum finns det?</p>

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
            <p class="question">Hur många kan bo där?</p>

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

                <p class="question">Somking?</p>


                <section>
                    <div>
                        <input id="smokingYes" type="radio" name="smoking" value="true">
                        <label class="radioButton" for="smokingYes">

                            <p>Ja</p>
                        </label>
                    </div>
                    <div>
                        <input id="smokingNo" type="radio" name="smoking" value="false">
                        <label class="radioButton" for="smokingNo">
                            <p>Nej</p>
                        </label>
                    </div>
                </section>

            </div>

            <div class="radioContainer">
                <p class="question">Är hus djur tillåtna?</p>
                <section>
                    <div>
                        <input id="animalsYes" type="radio" name="animals" value="true">
                        <label class="radioButton" for="animalsYes">

                            <p>Ja</p>
                        </label>
                    </div>


                    <div>
                        <input id="animalsNo" type="radio" name="animals" value="false">
                        <label class="radioButton" for="animalsNo">
                            <p>Nej</p>
                        </label>
                    </div>
                </section>

            </div>

            <div class="radioContainer">
                <p class="question">Partying?</p>
                <section>

                    <div>
                        <input id="partyingYes" type="radio" name="partying" value="true">
                        <label class="radioButton" for="partyingYes">
                            <p>Ja</p>
                        </label>
                    </div>
                    <div>
                        <input id="partyingNo" type="radio" name="partying" value="false">
                        <label class="radioButton" for="partyingNo">
                            <p>Nej</p>
                        </label>
                    </div>
                </section>

            </div>
            <button class="next" type="button">Next</button>
        </div>

        <div class="steps">
            <h3>Hur många <b>kvm</b> är bodstaden?</h3>
            <div class="rangeContainer">
                <h3 class="rangeMeter-squaremeter">0</h3>
                <input class="range" id="slider-squaremeter" type="range" value="0" min="0" max="100" step="5" name="squaremeters">
            </div>
            <h3>Din avsatta <b>hyra</b> för bostaden?</h3>
            <div class="rangeContainer">
                <h3 class="rangeMeter-rent">0</h3>
                <input class="range" id="slider-rent" type="range" value="0" min="0" max="3000" step="50" name="rent">
            </div>

            <button class="next" type="button">Next</button>
        </div>

        <div class="steps">
        @if($errors->any())
        {{$errors->first()}}
        @endif
        <div class="inputContainer">
            <h2>Address</h2>
            <input type="text" name="name">
        </div>

        <div class="inputContainer">
            <h2>Bilder</h2>
            <input id="image" type="file" name="image">
            <label for="image"></label>
            <img src="{{url('/images/image-icon.svg')}}" alt="" />
        </div>


        <button type="submit">Klart</button>
    </div>


    </form>
</section>

<script src="/js/app.js"></script>

@include('/boilerplate/footer')
