<?php

use App\Models\Residence;
use App\Models\User;
use Illuminate\Support\Facades\DB;

/*
Yes I know this is spaghetti AND carbonara
but it works for the demo
and we want to avoid people having to create an account to test out the product
*/

$users = User::all();
$residence = DB::table('residences')->latest('id')->first();


die(var_dump($residence));
?>

@include('/boilerplate/header')@include('/boilerplate/header')

<section class="matchmakingSection">
    <h2>Dessa är de ansökande</h2>

    <h2>Dessa har matchat dig bäst!</h2>
    <section class="find-residence-section">
            <?php foreach ($users as $user) : ?>
                <?php if (condition): ?>
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
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </section>

    <h2>uwuwuwu</h2>
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
