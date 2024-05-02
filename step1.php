<form method="post" action="/inventech/process/step_process.php?step=1">
  <script>
document.addEventListener('DOMContentLoaded', function() {
    const growthBtn = document.getElementById('growthpackages');
    const silverBtn = document.getElementById('silverpackages');
    const goldBtn = document.getElementById('goldpackages');

    growthBtn.addEventListener('click', function() {
        sessionStorage.setItem('selectedPackage', 'Growth packages');
    });

    silverBtn.addEventListener('click', function() {
        sessionStorage.setItem('selectedPackage', 'Silver packages');
    });

    goldBtn.addEventListener('click', function() {
        sessionStorage.setItem('selectedPackage', 'Gold packages');
    });
});
</script>
<div class="wrapper">
    <div class="table growth">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/growth.svg" alt="alternatetext">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">รองรับผู้เข้าร่วมประชุมไม่เกิน 250 ราย / Lisense</span>
        </li>
        <li>
          <span class="list-name">รองรับการรับชมภาพและเสียงผ่านระบบ Inventech Connect</span>
        </li>
        <li>
          <span class="list-name">รองรับการขอ Username & Password เพื่อเข้าร่วมประชุม</span>
        </li>
        <li>
          <span class="list-name">รองรับการลงทะเบียน/คะแนนผ่านระบบทุกรูปแบบ</span>
        </li>
        <li>
          <span class="list-name">รองรับการยืนยันตัวตนและขอรหัสผู้ใช้งานผ่าน OTP ไม่เกิน 500 ครั้ง</span>
        </li>
        <li>
          <span class="list-name">บริการพิื้นที่ Cloud Hosting Server</span>
        </li>
      </ul>
      <div type="submit" class="btn" id="growthpackages" name="growthpackages"><button>Select</button></div>
    </div>
    <div class="table silver">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/silver.svg" alt="alternatetext">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Includes access to perks from GROWTH</span>
        </li>
        <li>
          <span class="list-name">รองรับผู้เข้าร่วมประชุมไม่เกิน 500 ราย / Lisense</span>
        </li>
        <li>
          <span class="list-name">รองรับการยืนยันตัวตนและขอรหัสผู้ใช้งานผ่าน OTP ไม่เกิน 1000 ครั้ง</span>
        </li>
      </ul>
      <div type="submit" class="btn" id="silverpackages" name="silverpackages"><button>Select</button></div>
    </div>
    <div class="table gold">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/gold.svg" alt="alternatetext">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Includes access to perks from SILVER</span>
        </li>
        <li>
          <span class="list-name">รองรับผู้เข้าร่วมประชุมไม่เกิน 3,000 ราย / Lisense</span>
        </li>
        <li>
          <span class="list-name">รองรับการยืนยันตัวตนและขอรหัสผู้ใช้งานผ่าน OTP ไม่เกิน 3,500 ครั้ง</span>
        </li>
        <li>
          <span class="list-name">รองรับการจัดประชุมแบบสองภาษา</span>
        </li>
      </ul>
      <div type="submit" class="btn" id="goldpackages" name="goldpackages"><button>Select</button></div>
    </div>
    </div>