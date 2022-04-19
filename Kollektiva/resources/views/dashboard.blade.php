@include('/boilerplate/header')

<?php

use App\Models\Residence;

    $residence = Residence::all();
    // die(var_dump($residence));
    // die(var_dump($residence->getOriginal()));

?>

<?php foreach ($residence as $resi): ?>
    <section class="find-residence-section">
        <div class="residence-container">
            <img src="{{url('/uploads/' . $resi->picture)}}" alt="">
            <h4><?= $resi->name ?></h4>
            <ul>
                <li>Yta: 300 m</li>
                <li>Antal rum: 3 st</li>
                <li>Hyra: 30 000 kr</li>
            </ul>
        </div>
    </section>
<?php endforeach; ?>

@include('/boilerplate/footer')
