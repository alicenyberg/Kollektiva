@include('/boilerplate/header')

<div>
    <div class="hero-section">
        <h2>Rubrik osv</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis accumsan, tellus dui, consectetur pretium.</p>
        <button>Jag vill hyra ut</button>
        <button>Jag söker bostad</button>
        <!-- <img class="hero" src="{{url('/images/start.jpeg')}}" alt="Image" /> -->
    </div>
    <section class="how-to-section">
        <h2>Hur gör man?</h2>
        <div class="how-to">
            <div class="how-to-wrapper">
                <div class="circle">
                    <h3>1</h3>
                    <h4 class="hide">3</h4>
                </div>
                <div class="vertical-line"></div>
                <div class="circle">
                    <h3>2</h3>
                    <h4 class="hide">2</h4>
                </div>
                <div class="vertical-line"></div>
                <div class="circle">
                    <h3>3</h3>
                    <h4 class="hide">1</h4>
                </div>
            </div>
            <div class="how-to-steps">
                <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur elit.</p>
            </div>

        </div>
        <div class="register-now">
            <img src="{{url('/images/start-two.png')}}" alt="Image" />
            <button type="submit">Registrera dig nu</button>
        </div>
    </section>
    <section class="find-residence-section">
        <div class="residence-container">
            <img src="https://momsgotthestuff.com/wp-content/uploads/2021/02/minecraft-house-1.jpg" alt="">
            <h4>Tellgrensgatan 3A</h4>
            <ul>
                <li>Yta: 300 m</li>
                <li>Antal rum: 3 st</li>
                <li>Hyra: 30 000 kr</li>
            </ul>
        </div>
        <div class="residence-container">
            <img src="https://momsgotthestuff.com/wp-content/uploads/2021/02/minecraft-house-1.jpg" alt="">
            <h4>Tellgrensgatan 3A</h4>
            <ul>
                <li>Yta: 300 m</li>
                <li>Antal rum: 3 st</li>
                <li>Hyra: 30 000 kr</li>
            </ul>
        </div>
        <div class="residence-container">
            <img src="https://momsgotthestuff.com/wp-content/uploads/2021/02/minecraft-house-1.jpg" alt="">
            <h4>Tellgrensgatan 3A</h4>
            <ul>
                <li>Yta: 300 m</li>
                <li>Antal rum: 3 st</li>
                <li>Hyra: 30 000 kr</li>
            </ul>
        </div>
    </section>
</div>



@include('/boilerplate/footer')
