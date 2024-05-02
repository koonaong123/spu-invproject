<style>
  .table .price-area img {
  display: block; /* Make the image a block element */
  margin: 0 auto; /* Set left and right margins to auto */
}
</style>
<form method="post" action="/inventech/process/step_process.php?step=2">
<script>
// JavaScript for step 2
document.addEventListener('DOMContentLoaded', function() {
    const equipABtn = document.getElementById('a_equipment');
    const equipBBtn = document.getElementById('b_equipment');
    const equipCBtn = document.getElementById('c_equipment');
    const equipDBtn = document.getElementById('d_equipment');

    equipABtn.addEventListener('click', function() {
        sessionStorage.setItem('selectedEquipment', 'Equipment A');
    });

    equipBBtn.addEventListener('click', function() {
        sessionStorage.setItem('selectedEquipment', 'Equipment B');
    });

    equipCBtn.addEventListener('click', function() {
        sessionStorage.setItem('selectedEquipment', 'Equipment C');
    });

    equipDBtn.addEventListener('click', function() {
        sessionStorage.setItem('selectedEquipment', 'Equipment D');
    });
});
</script>
<div class="wrapper">
    <div class="table equip-a">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/eA.svg" alt="alternatetext" width="124" height="124">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="equipment-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">PC for Live จำนวน 1 ชุด (OBS)</span>
        </li>
        <li>
          <span class="list-name">กล้อง Webcam จำนวน 2 ตัว</span>
        </li>
        <li>
          <span class="list-name">Capture Card จำนวน 3 ชุด</span>
        </li>
        <li>
          <span class="list-name">Sound interface จำนวน 2 ชุด</span>
        </li>
        <li>
          <span class="list-name">Microphone Conference จำนวน 4 ชุด</span>
        </li>
        <li>
          <span class="list-name">Speaker 240W จำนวน 1 ตัว</span>
        </li>
        <li>
          <span class="list-name">Mixer In 12 / Out 4 จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">HDMI Cable 5 m จำนวน 5 เส้น</span>
        </li>
        <li>
          <span class="list-name">HDMI Spliter In 1 / Out 4 + HDMI Cable 5 m. จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">HDMI Selector In 4 / Out 1 จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">สายสัญญาณเสียง จำนวน 9 เส้น</span>
        </li>
      </ul>
      <div class="btn" id="a_equipment" name="a_equipment"><button>Select</button></div>
    </div>
    <div class="table equip-b">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/eB.svg" alt="alternatetext"  width="124" height="124">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="equipment-name"></div>
      <ul class="features">
      <li>
          <span class="list-name">PC for Live จำนวน 1 ชุด (OBS)</span>
        </li>
        <li>
          <span class="list-name">กล้อง VDO 1 ตัว / กล้อง Webcam จำนวน 1 ตัว</span>
        </li>
        <li>
          <span class="list-name">Capture Card จำนวน 3 ชุด</span>
        </li>
        <li>
          <span class="list-name">Sound interface จำนวน 2 ชุด</span>
        </li>
        <li>
          <span class="list-name">Microphone Conference จำนวน 4 ชุด</span>
        </li>
        <li>
          <span class="list-name">Speaker 240W จำนวน 1 ตัว</span>
        </li>
        <li>
          <span class="list-name">Mixer In 12 / Out 4 จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">HDMI Cable 5 m จำนวน 5 เส้น</span>
        </li>
        <li>
          <span class="list-name">HDMI Spliter In 1 / Out 4 + HDMI Cable 5 m. จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">HDMI Selector In 4 / Out 1 จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">สายสัญญาณเสียง จำนวน 9 เส้น</span>
        </li>
      </ul>
      <div class="btn" id="b_equipment" name="b_equipment"><button>Select</button></div>
    </div>
    <div class="table equip-c">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/eC.svg" alt="alternatetext"  width="124" height="124">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="equipment-name"></div>
      <ul class="features">
      <li>
          <span class="list-name">PC for Live จำนวน 1 ชุด (Vmix)</span>
        </li>
        <li>
          <span class="list-name">กล้อง VDO 2 ตัว</span>
        </li>
        <li>
          <span class="list-name">Capture Card จำนวน 3 ชุด</span>
        </li>
        <li>
          <span class="list-name">Sound interface จำนวน 2 ชุด</span>
        </li>
        <li>
          <span class="list-name">Microphone Conference จำนวน 4 ชุด</span>
        </li>
        <li>
          <span class="list-name">Speaker 240W จำนวน 2 ตัว</span>
        </li>
        <li>
          <span class="list-name">Mixer In 12 / Out 4 จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">HDMI Cable 5 m จำนวน 5 เส้น</span>
        </li>
        <li>
          <span class="list-name">HDMI Spliter In 1 / Out 4 + HDMI Cable 5 m. จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">HDMI Selector In 4 / Out 1 จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">สายสัญญาณเสียง จำนวน 10 เส้น</span>
        </li>
      </ul>
      <div class="btn" id="c_equipment" name="c_equipment"><button>Select</button></div>
    </div>
    </div>
    <div class="table equip-d">
      <div class="price-section">
        <div class="price-area">
        <img src="./img/eD.svg" alt="alternatetext"  width="124" height="124">
          <div class="inner-area"></div>
        </div>
      </div>
      <div class="equipment-name"></div>
      <ul class="features">
      <li>
          <span class="list-name">PC for Live จำนวน 1 ชุด (Vmix)</span>
        </li>
        <li>
          <span class="list-name">กล้อง VDO 2 ตัว</span>
        </li>
        <li>
          <span class="list-name">Capture Card จำนวน 3 ชุด</span>
        </li>
        <li>
          <span class="list-name">Sound interface จำนวน 2 ชุด</span>
        </li>
        <li>
          <span class="list-name">Microphone Conference จำนวน 4 ชุด</span>
        </li>
        <li>
          <span class="list-name">Speaker 240W จำนวน 2 ตัว</span>
        </li>
        <li>
          <span class="list-name">Mixer In 24 / Out 4 จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">HDMI Cable 5 m จำนวน 5 เส้น</span>
        </li>
        <li>
          <span class="list-name">HDMI Spliter In 1 / Out 4 + HDMI Cable 5 m. จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">HDMI Selector In 4 / Out 1 จำนวน 1 ชุด</span>
        </li>
        <li>
          <span class="list-name">สายสัญญาณเสียง จำนวน 10 เส้น</span>
        </li>
      <div class="btn" id="d_equipment" name="d_equipment"><button>Select</button></div>
    </div>
    </div>