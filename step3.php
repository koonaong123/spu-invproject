<style>
/* Wrapper styles */
.wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Form container styles */
.form-container {
    max-width: 400px; /* ปรับขนาดตามที่ต้องการ */
    width: 100%;
    padding: 20px;
    background-color: #f9f9f9; /* สีพื้นหลังของฟอร์ม */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้กับฟอร์ม */
}

/* Form styles */
.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="date"],
input[type="time"],
input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

</style>
<form id="meetingScheduleForm">
          <div class="form-group">
            <label for="meetingDate">วันที่:</label>
            <input type="date" id="meetingDate" name="meetingDate" required>
          </div>
          <div class="form-group">
            <label for="meetingTime">เวลา:</label>
            <input type="time" id="meetingTime" name="meetingTime" required>
          </div>
          <div class="form-group">
            <label for="meetingLocation">สถานที่:</label>
            <input type="text" id="meetingLocation" name="meetingLocation" required>
          </div>
          <button type="submit" name="meetingDate" id="meetingDate" onclick="location.href='booking.php?step=4'">ถัดไป</button>
        </form>
      </div>