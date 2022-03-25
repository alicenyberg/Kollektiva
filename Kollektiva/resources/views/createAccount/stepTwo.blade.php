
<h1>Berätta lite om bostaden</h1>

<form action="createResidence" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="number" name="squaremeters">
    <input type="number" name="rooms">
    <input type="number" name="residents">
    <input type="number" name="bathrooms">

    <button type="submit">Submit</button>
</form>
