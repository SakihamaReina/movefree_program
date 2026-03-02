<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">
    <header class="welcome-wrapper">
        <h1 class="welcome-message">Welcome to My Portfolio</h1>
        <p class="welcome-description">This is a showcase of my work and skills.</p>
    </header>

    <nav class="main-nav">
        <ul>
            <li><a href="#top" class="nav-btn">Top</a></li>
            <li><a href="#profile" class="nav-btn">Profile</a></li>
            <li><a href="#skills" class="nav-btn">Skill</a></li>
            <li><a href="#work" class="nav-btn">Work</a></li>
            <li><a href="#contact" class="nav-btn">Contact</a></li>
        </ul>
        <button class="dark-mode-toggle nav-btn">Dark Mode</button>
    </nav>