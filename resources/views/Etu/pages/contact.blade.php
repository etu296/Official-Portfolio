<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Shamoly, Ring Road, Dhaka-1230</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
            <a href="https://twitter.com/EtuMahmuda" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/etu.mahmuda" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://github.com/etu296" class="instagram"><i class="bi bi-github"></i></a>
        <a href="https://www.linkedin.com/in/etu-mahmuda-era-3656761b6" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>etumahmuda@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+8801315655618</p>
          </div>
        </div>
       
          
      </div>
    <br>
  <div class="col-md-16 mt-4 d-flex align-items-stretch">
    <div class="info-box">
      <form action="{{route('message.sent')}}" method="POST"  enctype="multipart/form-data" >
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input  type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input  type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input  type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea  class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          
          <div class="sent-message">

          </div>
          @if(session()->has('msg'))
          <div class="alert alert-success">
              {{ session()->get('msg') }}
          </div>
          @endif
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
      <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
  </div>
</section>