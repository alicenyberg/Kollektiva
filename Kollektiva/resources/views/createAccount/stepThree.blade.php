<h1>Steg 3</h1>

<form action="stepThree" method="POST">
    @csrf
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
    <button type="submit">Submit</button>
</form>
