<h1>Steg 3</h1>

<form action="StepThree" method="POST">
    @csrf
    <input type="radio" name="smoking">
    <input type="radio" name="animals">
    <input type="radio" name="partying">
    <button type="submit">Submit</button>
</form>
