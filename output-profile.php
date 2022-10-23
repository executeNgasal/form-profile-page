<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=
   , initial-scale=1.0" />
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/reset.css" />
  <link rel="stylesheet" href="/css/base-styles.css" />
  <title>Your Profile</title>

  <style>
    /* Fonts (Open Sans, Poppins, Raleway*/
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;700&family=Poppins:ital,wght@0,100;0,200;0,500;0,600;0,700;1,400&family=Raleway:wght@400;600;700&display=swap");

    /* Base Styles */
    :root {
      /* Color Palette */
      --txt-white: #fff;
      --txt-color-darker: #2f3765;
      --txt-color-dark: #4f5c88;
      --txt-color-light: #808bb1;
      --accent-color: #f76cad;
      --light-grey: #f8f8f8;
      --darker-grey: #dfdfdf;
      --txt-color-darker: #2f3765;
      --txt-color-dark: #4f5c88;
      --txt-color-light: #808bb1;
      --accent-color: #f76cad;
      --light-grey: #f8f8f8;
      --darker-grey: #dfdfdf;
      --icon-black: #000;
      --snow-drift: #e7e7de;
      --profile-box: #00587a;

      /* Font Styles */
      --font-open-sans: "Open Sans", sans-serif;
      --font-poppins: "Poppins", sans-serif;
      --font-raleway: "Raleway", sans-serif;
      --font-title: 32px;
      --font-header: 64px;
      --font-paragraph: 1rem;
      --font-xl: 64px;
      --font-lg: 32px;
      --font-med: 24px;
      --font-def: 16px;
      --font-sm: 14px;
      --font-xs: 12px;
      --font-extra-light: 100;
      --font-light: 200;
      --font-regular: 400;
      --font-semi-bold: 600;
      --font-bold: 700;
      --font-extra-bold: 800;
    }

    *,
    *::before,
    *::after {
      font-family: 'Raleway', sans-serif;
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    /* Base Styles */
    html,
    body {
      scroll-behavior: smooth;
      overflow-x: hidden;
    }

    .flex {
      display: flex;
    }

    /* Font Things */
    h1 {
      font-size: var(--font-header);
      font-weight: var(--font-extra-bold);
    }

    h4 {
      font-size: var(--font-med);
      font-weight: var(--font-bold);
    }

    p {
      font-weight: var(--font-regular);
    }

    h1,
    a,
    .greet-name {
      text-transform: uppercase;
    }

    h4,
    p,
    a {
      font-family: var(--font-poppins);
    }

    a {
      text-decoration: none;
    }

    h4,
    .details-content>.bold {
      text-transform: capitalize;
    }

    /* End of Font Things */
    /* End of Base Styles */

    body {
      background-image: url('/assets/img//background/bg-blobs.svg');
      background-repeat: no-repeat;
      background-size: cover;
      background-color: var(--snow-drift);
      width: 100%;
      min-height: 100vh;
    }

    .header {
      align-items: center;
      justify-content: center;
      flex-direction: column;
      min-height: 12.813em;
      /* 205 px */
    }

    .header>h1 {
      font-family: var(--font-raleway);
    }

    .main {
      justify-content: space-evenly;
      align-items: center;
      margin: 70px;
      height: 100%;
    }

    .profile,
    .about,
    .details,
    .about-text,
    .profile-name,
    .details-content {
      flex-direction: column;
    }

    .profile,
    .about,
    .details {
      max-width: 360px;
      min-height: 516px;
    }

    .profile {
      color: var(--txt-white);
      background-color: var(--profile-box);
      align-items: center;
      justify-content: space-between;
      position: relative;
    }

    .greet-name {
      font-family: var(--font-open-sans);
      font-size: var(--font-lg);
      font-weight: var(--font-bold);
    }

    .profile-desc p {
      font-weight: 380;
    }

    .profile-img {
      width: 214px;
      height: 214px;
      border-radius: 50%;
      overflow: hidden;
      position: absolute;
      top: -100px;
    }

    .profile-img>img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-name {
      margin: 147px 0 40px 0;
    }

    .profile-desc {
      text-align: center;
      margin-bottom: 95px;
    }

    .profile-name,
    .profile-desc {
      max-width: 80%;
    }

    .profile-socmed,
    .details-socmed {
      align-items: center;
      gap: 16px;
    }

    .profile-socmed {
      margin-bottom: 57px;
    }

    .about {
      gap: 25px;
    }

    .about-text {
      gap: 35px;
    }

    .cta-btn {
      border-radius: 10px;
      border: 3px solid black;
      width: 248px;
      height: 50px;
      margin: 80px auto 0 auto;
      align-items: center;
      justify-content: center;
    }

    .cta-btn:hover {
      background: rgb(0, 88, 122);
      transition: all ease 0.3s;
    }

    .cta-btn:hover>a {
      color: var(--txt-white);
    }

    .cta-btn>a {
      color: #000;
      font-weight: var(--font-bold);
      width: 100%;
      height: 100%;
      text-align: center;
      line-height: 50px;
    }

    .details {
      gap: 40px;
    }

    .details-content>.bold {
      font-weight: var(--font-bold);
      font-size: var(--font-regular);
      margin-bottom: 9.5px;
    }

    .details-content>p {
      font-size: var(--font-sm);
    }
  </style>
</head>

<body>
  <header class="header flex">
    <h1>profile</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
  </header>
  <main class="main flex">
    <div class="main-content flex">
      <article class="flex profile">
        <section class="profile-img">
          <img src="/assets/img/img-profile-test.jpg" alt="" />
        </section>
        <section class="profile-name flex">
          <p class="greet-name">hello</p>
          <p class="greet-name">i'm jane doe</p>
        </section>
        <section class="profile-desc">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas aut
            quo similique repellendus corporis
          </p>
        </section>
        <section class="profile-socmed flex">
          <a href="#"><img src="/assets/img/icons/icons-snow-drift/fb.svg" alt="" /></a>
          <a href="#"><img src="/assets/img/icons/icons-snow-drift/t.svg" alt="" /></a>
          <a href="#"><img src="/assets/img/icons/icons-snow-drift/ig.svg" alt="" /></a>
          <a href="#"><img src="/assets/img/icons/icons-snow-drift/linkedin.svg" alt="" /></a>
        </section>
      </article>
    </div>
    <div class="main-content flex">
      <article class="flex about">
        <h4>about me</h4>
        <section class="about-text flex">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi,
            molestias dolore vel ad itaque corrupti ipsam nobis voluptates
            obcaecati dignissimos recusandae perspiciatis rerum, id magni
            voluptate corporis earum quae aut nemo deleniti?
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut
            nostrum ab numquam, rerum omnis provident placeat beatae possimus
            totam quod.
          </p>
        </section>
        <span class="cta-btn flex"><a href="#">contact me</a></span>
      </article>
    </div>
    <div class="main-content flex">
      <article class="flex details">
        <h4>details</h4>
        <section class="details-content details-name">
          <p class="bold">name:</p>
          <p>Jane Doe</p>
        </section>
        <section class="details-content details-age flex">
          <p class="bold">age:</p>
          <p>25 years</p>
        </section>
        <section class="details-content details-location flex">
          <p class="bold">location:</p>
          <p>Las Vegas, United States</p>
        </section>
        <section class="details-socmed flex">
          <a href="#"><img src="/assets/img/icons/icons-black/fb.svg" alt="" /></a>
          <a href="#"><img src="/assets/img/icons/icons-black/t.svg" alt="" /></a>
          <a href="#"><img src="/assets/img/icons/icons-black/ig.svg" alt="" /></a>
        </section>
      </article>
    </div>
  </main>
</body>

</html>