<?php
  // $contentSrc = 'http://www.nbjones.com/public/obina';
  $contentSrc = '/assets';
  $readMoreText = $kirby->language() == "en" ? "Read more" : "続きを読む";
  $addressText = $kirby->language() == "en" ? "Address" : "住所";
  $emailText = $kirby->language() == "en" ? "Email" : "メール";
  $phoneText = $kirby->language() == "en" ? "Phone" : "電話";
  $faxText = $kirby->language() == "en" ? "Fax" : "ファックス";
  $followUsOnYouTube = $kirby->language() == "en" ? "Follow us on YouTube." : "YouTubeでフォローして.";
  $followUsOnInstagram = $kirby->language() == "en" ? "Follow us on Instagram." : "Instagramでフォローして.";
  $followUsOnFacebook = $kirby->language() == "en" ? "Follow us on Facebook." : "Facebookでフォローして.";
  $followUsOnLinkedIn = $kirby->language() == "en" ? "Follow us on LinkedIn." : "LinkedInでフォローして.";
  $followUsOnTwitter = $kirby->language() == "en" ? "Follow us on Twitter." : "Twitterでフォローして.";
  $scanInstagramQrCode = $kirby->language() == "en" ? "Or scan the QR code to follow our Instagram account:" : "または、QRコードをスキャンして、Instagramアカウントをフォローして:";
?>
<?php snippet('head') ?>
<?= css('assets/css/home.css') ?>
<?= css('assets/css/about.css') ?>
<main class="ns-home">
  <div class="hero">
    <?php snippet('language') ?>
    <video class="hero-video" loop muted autoplay preload="auto">
      <source src="<?= $contentSrc ?>/hero-compressed.mp4" type="video/mp4">
    </video>
    <div class="overlay overlay-dot"></div>
    <div class="overlay overlay-gray">
      <h1 class="h1"><img class="logo" src="<?= $contentSrc ?>/images/logo-lg-clear-white.png" alt="Obina Hops Kofu Yamanashi"></h1>
      <h2 class="h2"><?= $page->Tagline()->ktRaw() ?></h2>
      <ul class="navigation">
        <li class="nav-item"><a class="nav-link" href="/<?= $kirby->language() ?>/farm"><?= page("farm")->title() ?></a></li>
        <li class="nav-item"><a class="nav-link" href="/<?= $kirby->language() ?>/brewery"><?= page("brewery")->title() ?></a></li>
        <li class="nav-item"><a class="nav-link" href="/<?= $kirby->language() ?>/shop"><?= page("shop")->title() ?></a></li>
      </ul>
      <?php snippet('copyright') ?>
    </div>
  </div>
  <div class="first-section">
    <div class="layout">
      <div class="points">
        <div class="point">
          <p class="point-em"><?= $page->Hook1TopText()->ktRaw() ?></p>
          <p class="point-txt"><?= $page->Hook1BottomText()->ktRaw() ?></p>
        </div>
        <div class="point">
          <p class="point-em"><?= $page->Hook2TopText()->ktRaw() ?></p>
          <p class="point-txt"><?= $page->Hook2BottomText()->ktRaw() ?></p>
        </div>
        <div class="point">
          <p class="point-em"><?= $page->Hook3TopText()->ktRaw() ?></p>
          <p class="point-txt"><?= $page->Hook3BottomText()->ktRaw() ?></p>
        </div>
      </div>
      <!-- <div class="button-wrapper">
        <a class="button button--hop-green-lt button--outline" href="/<?= $kirby->language() ?>/about"><?= $page->ShopLinkText()->ktRaw() ?></a>
      </div> -->
    </div>
  </div>
  <div class="wood-section">
    <div class="layout">
      <div class="our-story">
        <h2 class="h2"><?= $page->OurStoryTitle()->ktRaw() ?></h2>
        <div class="half-width story1">
          <div class="center">
            <img class="img img1" src="<?= $page->OurStory1Image()->toFile()->url() ?>" alt="">
          </div>
          <div class="">
            <div class="markdown"><?= $page->OurStory1Text()->kt() ?></div>
          </div>
        </div>
        <div class="half-width story2">
          <div class="">
            <div class="markdown"><?= $page->OurStory2Text()->kt() ?></div>
          </div>
          <div class="">
            <img class="img img2" src="<?= $page->OurStory2Image()->toFile()->url() ?>" alt="">
          </div>
        </div>
        <p><a class="link" href="/<?= $kirby->language() ?>/about"><?= $readMoreText ?>...</a></p>
      </div>
    </div>
  </div>
  <?php snippet('instagram', ['title' => $page->InstagramTitle()->ktRaw()]) ?>
  <div class="about-us-top layout">
    <h1 class="title"><?= $page->Pagetitle()->ktRaw() ?></h1>
    <div class="textbody">
      <div class="markdown"><?= $page->TextBody1()->kt() ?></div>
    </div>
  </div>
  <div class="fixed-banner" style="background-image:url(<?= $page->Banner1Sp()->toFile()->url() ?>)"></div>
  <div class="about-us-bottom layout">
    <div class="textbody">
      <div class="markdown"><?= $page->TextBody2()->kt() ?></div>
    </div>
  </div>
  <?php if ($page->Banner2Sp()->isNotEmpty()) : ?><img class="beers-banner hide-pc" src="<?= $page->Banner2Sp()->toFile()->url() ?>" alt=""><?php endif ?>
  <?php if ($page->Banner2Pc()->isNotEmpty()) : ?><img class="beers-banner hide-sp" src="<?= $page->Banner2Pc()->toFile()->url() ?>" alt=""><?php endif ?>
  <div class="contact-section layout">
    <h2 class="title" id="contact">Contact</h2>
    <p class="markdown"><?= $page->ContactText()->ktRaw() ?></p>
    <div class="address">
      <?php if (site()->address()->isNotEmpty()) : ?><p><?= $addressText ?>: <?= $site->address() ?></p><?php endif ?>
      <?php if (site()->email()->isNotEmpty()) : ?><p><?= $emailText ?>: <a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a></p><?php endif ?>
      <?php if (site()->phone()->isNotEmpty()) : ?><p><?= $phoneText ?>: <a href="tel:<?= $site->phone() ?>"><?= $site->phone() ?></a></p><?php endif ?>
      <?php if (site()->fax()->isNotEmpty()) : ?><p><?= $faxText ?>: <?= $site->fax() ?></p><?php endif ?>
    </div>
    <div>
      <?php if (site()->youtube()->isNotEmpty()) : ?>
        <p class="follow-us"><a href="<?= $site->youtube() ?>"><?= file_get_contents('assets/svgs/Youtube_3.svg') ?><?= $followUsOnYouTube ?></a></p>
      <?php endif ?>
      <?php if (site()->instagram()->isNotEmpty()) : ?>
        <p class="follow-us"><a href="<?= $site->instagram() ?>"><?= file_get_contents('assets/svgs/Instagram_3.svg') ?><?= $followUsOnInstagram ?></a></p>
        <p><?= $scanInstagramQrCode ?></p>
        <img class="instagram-qr" src="<?= $contentSrc ?>/images/instagram-qr.jpg" alt="">
      <?php endif ?>
      <?php if (site()->facebook()->isNotEmpty()) : ?>
        <p class="follow-us"><a href="<?= $site->facebook() ?>"><?= file_get_contents('assets/svgs/Facebook_3.svg') ?><?= $followUsOnFacebook ?></a></p>
      <?php endif ?>
      <?php if (site()->linkedin()->isNotEmpty()) : ?>
        <p class="follow-us"><a href="<?= $site->linkedin() ?>"><?= file_get_contents('assets/svgs/LinkedIn_3.svg') ?><?= $followUsOnLinkedIn ?></a></p>
      <?php endif ?>
      <?php if (site()->twitter()->isNotEmpty()) : ?>
        <p class="follow-us"><a href="<?= $site->twitter() ?>"><?= file_get_contents('assets/svgs/Twitter_3.svg') ?><?= $followUsOnTwitter ?></a></p>
      <?php endif ?>
    </div>
  </div>
</main>
<?php snippet('foot') ?>
