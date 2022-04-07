@include('/boilerplate/header')
<form action="">
    <h2>Börja med att registrera ditt konto genom verifiering av BankID. </h2>
    <div>
        <img src="https://play-lh.googleusercontent.com/bD-qaxBMpWE-o5zM6Hd151pMrW7E_PIHxudRg-k7ty48pdspjzzbsSiiyDy4oUK0nvw" alt="">
        <button>Öppna BankID</button>
    </div>
    <div>
        <button>Föregående</button>
        <button type="button" class="nextThree">Nästa</button>
    </div>
</form>
<form action="createResidence" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="stepTwo">
        <input type="text" name="name">
        <input type="number" name="squaremeters">
        <input type="number" name="rooms">
        <input type="number" name="residents">
        <input type="number" name="bathrooms">
        <button type="button" class="nextThree">Next</button>
    </div>

    <div class="stepThree">
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
        <button>Next</button>
    </div>

    @if($errors->any())
        {{$errors->first()}}
    @endif
    <div class="stepFour">
        <p>Image</p>
        <input type="file" name="image">
        <button type="submit">Submit</button>
    </div>



</form>

<script src="/js/app.js"></script>
