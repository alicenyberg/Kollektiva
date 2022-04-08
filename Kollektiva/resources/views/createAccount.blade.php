@include('/boilerplate/header')
<section class="createAccount">
    <div class="pageCounter">
        <p>Steg 1 av 5</p>
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
            <input type="text" name="name">
            <input type="number" name="squaremeters">
            <input type="number" name="rooms">
            <input type="number" name="residents">
            <input type="number" name="bathrooms">

            <button class="next" type="button">Next</button>
        </div>

        <div class="steps">
            <h1>Steg 3</h1>

            <div>
                <div>
                    <input type="radio" name="smoking" value="false">
                    <p>Nej</p>
                </div>

                <p>Somking?</p>

                <div>
                    <input type="radio" name="smoking" value="true">
                    <p>Ja</p>
                </div>
            </div>

            <div>
                <div>
                    <input type="radio" name="animals" value="false">
                    <p>Nej</p>
                </div>

                <p>Animals?</p>

                <div>
                    <input type="radio" name="animals" value="true">
                    <p>Ja</p>
                </div>
            </div>

            <div>
                <div>
                    <input type="radio" name="partying" value="false">
                    <p>Nej</p>
                </div>

                <p>Partying?</p>

                <div>
                    <input type="radio" name="partying" value="true">
                    <p>Ja</p>
                </div>
            </div>
            <button class="next">Next</button>
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
