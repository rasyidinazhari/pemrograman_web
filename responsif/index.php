<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modular Page</title>
  <link rel="stylesheet" href="style.css">

  <!-- Link Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <div id="sidebar"></div>

  <div class="main-content">
    <div id="header"></div>

    <div class="content">
      <p>Ini konten utama halaman.</p>
    </div>

    <div id="bottom"></div>
  </div>

  <script>
    // Jadikan fungsi toggle global agar bisa diakses dari HTML yang dimuat
    window.toggleSidebar = function () {
      const sidebar = document.getElementById('sidebar');
      if (sidebar) {
        sidebar.classList.toggle('hidden');
      }
    };
  
    // Fungsi load komponen
    async function loadComponent(id, file) {
      const res = await fetch(file);
      const text = await res.text();
      document.getElementById(id).innerHTML = text;
    }
  
    // Panggil semua komponen
    loadComponent('sidebar', 'sidebar.html');
    loadComponent('header', 'header.html');
    loadComponent('bottom', 'bottom.html');
  </script>
  
  

</body>
</html>