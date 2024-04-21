window.onload = function() {
  const form = document.querySelector('.register-form');

  form.addEventListener('submit', function(event) {
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmpassword').value;
      const errorMessagePwd = document.querySelector('.error-message-pwd');
      const errorMessagePwdcf = document.querySelector('.error-message-pwdcf');

      // เช็ครหัสผ่าน
      if (password.length < 8 || !(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(password)) || !(/\d/.test(password)) || !(/[a-zA-Z]/.test(password))) {
          errorMessagePwd.style.display = 'block';
          event.preventDefault(); // หยุดการส่งแบบฟอร์ม
      } else {
          errorMessagePwd.style.display = 'none';
      }

      // เช็คการยืนยันรหัสผ่าน
      if (password !== confirmPassword) {
          errorMessagePwdcf.style.display = 'block';
          event.preventDefault(); // หยุดการส่งแบบฟอร์ม
      } else {
          errorMessagePwdcf.style.display = 'none';
      }
  });
};