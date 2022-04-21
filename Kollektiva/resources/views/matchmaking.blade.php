@include('/boilerplate/header')@include('/boilerplate/header')
<section class="sectionDone">
    <h2>Dessa är de ansökande</h2>

    <?php

use App\Models\Residence;
use App\Models\User;

$users = User::all();
// die(var_dump($users));
// die(var_dump($users->getOriginal()));

?>

<section class="matchmakingSection">
    <section class="find-residence-section">
        <?php foreach ($users as $user) : ?>
            <div class="residence-container">
                <img src="{{$user->image}}" alt="">
                <h4><?= $user->name ?></h4>
                <ul>
                    <li>Yta: <?= $user->name ?> m</li>
                    <li>Antal rum: <?= $user->rooms ?> st</li>
                    <li>Hyra: <?= $user->rent ?> kr</li>
                </ul>
            </div>
        <?php endforeach; ?>
    </section>
</section>


@include('/boilerplate/footer')
