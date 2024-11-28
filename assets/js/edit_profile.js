function previewImage(event) {
    const reader = new FileReader();
    const preview = document.getElementById('avatarPreview');
    reader.onload = function() {
      preview.src = reader.result; // Đặt URL của hình ảnh được chọn
    };
    reader.readAsDataURL(event.target.files[0]);
  }