<div>
    <form wire:submit.prevent='submit' class="main-container margin-inline">
        <h2>step 3 of 3</h2>
        <h1 class="margin-bottom-1">Set Up your Wallet</h1>
        <div class="wallet">
          <!-- Dana -->
  
          <input class="wallet-input" type="radio" wire:model.defer='method' value="MTN" name="radiowal" id="dana" checked />
          <div class="wallet-bg dana margin-right">
            <label class="wallet-label" for="dana">MTN</label>
          </div>
          <div class="wallet-content margin-bottom-1 margin-top-1">
            <p>Enter your MTN mobile number.</p>
          </div>
  
          <!-- Gopay -->
  
          <input class="wallet-input" type="radio" wire:model.defer='method' value="Airtel" name="radiowal" id="gopay" />
          <div class="wallet-bg gopay margin-right">
            <label class="wallet-label" for="gopay">Airtel</label>
          </div>
          <div class="wallet-content margin-top-1 margin-bottom-1">
            <p>Enter your Airtel mobile number.</p>
          </div>
  
          <!-- Ovo -->
  
          <input class="wallet-input" type="radio" wire:model.defer='method' value="Card" name="radiowal" id="ovo" />
          <div class="wallet-bg ovo">
            <label class="wallet-label" for="ovo">Credit Card</label>
          </div>
          <div class="wallet-content margin-top-1 margin-bottom-1">
            <p>Enter your Credit Card details.</p>
          </div>
        </div>
  
        <div class="your-number">
          <p class="margin-bottom-1">Your number will also be used if you forget your password and for important account messages. SMS fees may apply.</p>
        </div>
  
        <div class="input-container">
          <div class="input">
            <div class="phone">
              <img class="flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Flag_of_Zambia.svg/125px-Flag_of_Zambia.svg.png" alt="" />
              <span class="text-phone">+260</span>
            </div>
  
            <input wire:model.defer='phone_number' class="input-field input-field-phone" type="text" id="input" placeholder="" pattern="^([+]\d{2}[ ])?\d{11,9}$" autocomplete="off" maxlength="9" required />
  
            <label for="input" class="input-label input-label-phone label-size">Mobile Number</label>
  
            <p class="text-error">Please enter a valid mobile number.</p>
          </div>
  
          <a class="btn btn-change margin-block margin-inline" href="">
            <div class="change">
              <p class="text-change">K100/month</p>
              <input type="hidden"  wire:model.defer='amount' value="100" />
              <p class="text-change-1">Premium Plan</p>
            </div>
            <p class="text-change-2">Change</p>
          </a>
  
          <div class="processed margin-bottom">
            <p class="text-terms">
              By checking the checkbox below, you agree to our <span class="text-terms-1">Terms of Use, Privacy Statement, </span>and that you are over 18. Netflix will automatically continue your membership and charge the membership fee
              (currently IDR186,000/month) to your payment method until you cancel. You may cancel at any time to avoid future charges.
            </p>
          </div>
  
          <div class="agreement">
            <input wire:model.defer='agreed' class="agree-input" type="checkbox" name="" id="agree" required />
            <label class="agree-label" for="agree">I agree.</label>
            <p class="agree-alert">You must anknowledge that you have read and agree to the Terms of Use to continue.</p>
          </div>
  
          <button type="submit" class="btn-wide margin-top-1 margin-inline">Start Membership</button>
        </div>
      </form>
  
      <footer class="footer footer-gray margin-top-1">
        <div class="footer-container margin-inline">
          <p class="text-gray">
            Questions? <br />
            Call 007-803-321-2130
          </p>
          <div class="links">
            <ul class="">
              <li><a class="text-terms text-underline" href="">FAQ</a></li>
              <li><a class="text-terms text-underline" href="">Cookie Preferences</a></li>
            </ul>
  
            <ul>
              <li><a class="text-terms text-underline" href="">Help Center</a></li>
              <li><a class="text-terms text-underline" href="">Corporate Information</a></li>
            </ul>
  
            <a class="text-terms text-underline" href="">Terms of Use</a>
  
            <a class="text-terms text-underline" href="">Privacy</a>
          </div>
  
          <div class="language">
            <select class="language-select" onchange="location=this.value;">
              <option value="english" selected>English</option>
              <option value="">Bahasa Indonesia</option>
            </select>
            <div class="language-icon">
              <i class="fas fa-globe globe"></i>
              <i class="fas fa-chevron-down chevron"></i>
            </div>
          </div>
        </div>
      </footer>
</div>

