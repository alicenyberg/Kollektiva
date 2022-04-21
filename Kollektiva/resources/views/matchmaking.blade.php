<?php

use App\Models\Residence;
use App\Models\User;

$users = User::all();
// die(var_dump($users));
// die(var_dump($users->getOriginal()));

?>

@include('/boilerplate/header')@include('/boilerplate/header')

<section class="matchmakingSection">
    <h2>Dessa är de ansökande</h2>

        <section class="find-residence-section">
            <?php foreach ($users as $user) : ?>
                <div class="residence-container">
                <img src="{{$user->image}}" alt="">
                <h4><?= $user->name ?></h4>
                <ul>
                    <?php if ($user->partying  == "true"): ?>
                            <li>Party - ✅</li>
                        <?php else: ?>
                            <li>Party - ❌</li>
                    <?php endif; ?>
                    <?php if ($user->smoking  == "true"): ?>
                            <li>Rökning - ✅</li>
                        <?php else: ?>
                            <li>Rökning - ❌</li>
                    <?php endif; ?>
                    <?php if ($user->animals  == "true"): ?>
                            <li>Husdjur - ✅</li>
                        <?php else: ?>
                            <li>Husdjur - ❌</li>
                    <?php endif; ?>
                </ul>

                <button>Skapa kontakt</button>
            </div>
        <?php endforeach; ?>
    </section>
</section>


@include('/boilerplate/footer')
