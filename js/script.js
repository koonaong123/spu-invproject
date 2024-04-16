// สคริปต์ตรวจสอบการใช้ผสมpassword
function myFunction1() {
    const password = document.getElementById('c_pwd');
    const errorMessage = document.querySelector('.error-message');

    password.addEventListener('input', function() {
      const passwordValue = this.value;
      const hasSpecialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(passwordValue);
      const hasNumber = /\d/.test(passwordValue);
      const hasLetter = /[a-zA-Z]/.test(passwordValue);
      const hasLength = passwordValue.length >= 8;
  
      if (hasSpecialChar && hasNumber && hasLetter && hasLength) {
        // รหัสผ่านถูกต้อง ซ่อนข้อความแจ้งเตือน
        errorMessage.style.display = 'none';
      } else {
        // รหัสผ่านไม่ถูกต้อง แสดงข้อความแจ้งเตือน
        errorMessage.style.display = 'block';
      }
    });
}
