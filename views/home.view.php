<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'Velkommen') ?>

<section class="hero section-padding">
    <div class="container">
        <h1>Mit portfolio<span class="accent">Melike Kilic</span></h1>
        <p class="tagline">Jeg skaber moderne og brugervenlige webløsninger med fokus på kvalitet og performance.
        </p>
        <a href="/contact" class="button">Kontakt mig</a>
    </div>
</section>

<section class="intro section-padding">
    <div class="container">
        <div class="intro-content">
            <div class="intro-text">
                <h2 class="section-heading">Hvem er jeg?</h2>
                <p>Mit navn er Melike, jeg er 22 år og studerer multimediedesign på 2. semester. Ved siden af studiet arbejder jeg i et regnskabsbureau med ansvar for marketing, kommunikation og grafisk design samt i en GLS pakkeshop. Jeg har tidligere drevet egen virksomhed, hvilket har givet mig værdifuld erfaring og inspireret mig til min nuværende uddannelse. Jeg er nysgerrig af natur og motiveres af at lære nyt og udvikle mine kompetencer.</p>
            </div>
            <div class="intro-image">
                <img src="images/profile-landscape.jpg" alt="Headshot of Abigail looking happy" class="profile-image">
            </div>
        </div>
    </div>
</section>

<section class="quick-links section-padding">
    <div class="container">
        <h2 class="section-heading">Udforsk</h2>
        <div class="links-grid">
            <a href="/projects" class="link-card">
                <h3>Projekter</h3>
                <p>Se eksempler på mine seneste projekter og løsninger</p>
            </a>
            <a href="/about" class="link-card">
                <h3>Om mig</h3>
                <p>Lær mere om min baggrund og mine tekniske færdigheder</p>
            </a>
            <a href="/contact" class="link-card">
                <h3>Kontakt</h3>
                <p>Lad os starte rejsen sammen!</p>
            </a>
        </div>
    </div>
</section>
