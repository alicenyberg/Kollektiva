@include('/boilerplate/header')

<h1>Berätta lite om bostaden</h1>

<form action="createResidence" method="POST">
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
        <input type="file" name="picture">
    </div>



    <button type="submit">Submit</button>
</form>

<script src="/js/app.js"></script>
