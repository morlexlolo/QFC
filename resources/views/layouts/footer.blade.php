<div class="container"></div>
<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">Services</h2>
      <ul>

        @forelse ($servicesfooterfirstcolumn as $item)
             <li><a href="{{ route('services.show',$item->slug) }}">{{ $item->title }}</a></li>
        @empty
            <li><a href="#">Docs</a></li>
        @endforelse
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Services</h2>
      <ul>

        @forelse ($servicesfootersecondcolumn as $item)
             <li><a href="{{ route('services.show',$item->slug) }}">{{ $item->title }}</a></li>
        @empty
            <li><a href="#">Docs</a></li>
        @endforelse
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Contact</h2>
      <ul>
        <li>P.O.Box 62157-00200 Nairobi, Kenya</li>
        <li><strong>Email:</strong> info@qfc.com</li>
        <li><strong>Phone number:</strong> +254(0) 710-707-225</li>
      </ul>
      <h2 class="ft-title">Follow us:</h2>
      <ul class="ft-social-list">
            <li><a href="https://www.facebook.com/QFCltd/?ref=search&__tn__=%2Cd%2CP-R&eid=ARBxtEbGgMQDTzOphQQva3Dx4U_T0a9EuR1i-mTEqfSKUAq8OtFJy8sTzC2JvfwHuDCn6CNibYDIpHZ3"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/corp_quantum"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/quantum-financials-consultancy-corp-55a5a2190/"><i class="fab fa-linkedin"></i></a></li>
    </ul>
    </div>
  </section>
  <!-- Footer legal -->
  <section class="ft-legal">
    <ul class="ft-legal-list">
      <li><a href="#">Terms &amp; Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li>&copy; 2019 QFC corp.</li>
    </ul>
  </section>
</footer>
