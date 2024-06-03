@extends('layouts.web.base')

@section('main')

<div class="hero overlay inner-page">
    <img src="images/blob.svg" alt="" class="img-fluid blob">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-5">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up" data-aos-delay="100"></h1>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="section">
    <div class="container article">
      <div class="row justify-content-center align-items-stretch">

        <article class="col-lg-8 order-lg-2 px-lg-5">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

          <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">

          <h3>Even the all-powerful...</h3>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>

          <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>

          <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

          <h3>On her way she met a copy</h3>
          <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          <p>And if she hasn’t been rewritten, then they are still using her.
          On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. </p>

          <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>

          <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.A small river named Duden flows by their place and supplies it with the necessary regelialia.And if she hasn’t been rewritten, then they are still using her.</p>



        </article>

        <div class="col-md-12 col-lg-1 order-lg-1">
          <div class="share sticky-top">
            <h3>Share</h3>
            <ul class="list-unstyled share-article">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 mb-5 mb-lg-0 order-lg-3">

          <div class="mb-4">
            <a href="https://vimeo.com/342333493" class="video-wrap glightbox">
              <span class="play-wrap"><span class="icon-play"></span></span>
              <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
            </a>
          </div>

          <div class="share floating-block sticky-top">

            <h2 class="mb-3 text-black">Subscribe to Newsletter</h2>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <input type="email" class="form-control mb-2" placeholder="Enter email">
              <input type="submit" value="Subscribe" class="btn btn-primary btn-block">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>   --}}

  @include('sections.partial.faqs')


@endsection
