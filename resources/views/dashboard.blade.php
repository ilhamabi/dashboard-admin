@extends('layouts.dashboard')

@section('content')
<h1>Dashboard</h1>
<!-- ===== STAT CARD ===== -->
<div class="row">
  <div class="col-12 col-sm-6 col-lg mb-4">
    <div class="card h-100 border-0 shadow-sm stat-card">
      <div class="card-body d-flex align-items-center">
        <!-- Icon -->
        <div class="flex-shrink-0 me-3">
          <span class="avatar avatar-lg bg-soft-primary text-primary">
            <i data-feather="users"></i>
          </span>
        </div>

        <!-- Text -->
        <div class="flex-grow-1">
          <p class="mb-1 text-muted">Total User</p>
          <h3 class="mb-1">40,689</h3>
          <small class="text-success">
            <i data-feather="trending-up" width="14"></i>
            <strong>8.5%</strong> Up from yesterday
          </small>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== ULANGI UNTUK 4 KARTU LAINNYA ===== -->
  <div class="col-12 col-sm-6 col-lg mb-4">
    <div class="card h-100 border-0 shadow-sm stat-card">
      <div class="card-body d-flex align-items-center">
        <div class="flex-shrink-0 me-3">
          <span class="avatar avatar-lg bg-soft-success text-success">
            <i data-feather="shopping-cart"></i>
          </span>
        </div>
        <div class="flex-grow-1">
          <p class="mb-1 text-muted">Total Order</p>
          <h3 class="mb-1">10,293</h3>
          <small class="text-success">
            <i data-feather="trending-up" width="14"></i>
            <strong>1.3%</strong> Up from past week
          </small>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-lg mb-4">
    <div class="card h-100 border-0 shadow-sm stat-card">
      <div class="card-body d-flex align-items-center">
        <div class="flex-shrink-0 me-3">
          <span class="avatar avatar-lg bg-soft-info text-info">
            <i data-feather="dollar-sign"></i>
          </span>
        </div>
        <div class="flex-grow-1">
          <p class="mb-1 text-muted">Total Sales</p>
          <h3 class="mb-1">$89,000</h3>
          <small class="text-danger">
            <i data-feather="trending-down" width="14"></i>
            <strong>4.3%</strong> Down from yesterday
          </small>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12 col-sm-6 col-lg mb-4">
    <div class="card h-100 border-0 shadow-sm stat-card">
      <div class="card-body d-flex align-items-center">
        <div class="flex-shrink-0 me-3">
          <span class="avatar avatar-lg bg-soft-warning text-warning">
            <i data-feather="clock"></i>
          </span>
        </div>
        <div class="flex-grow-1">
          <p class="mb-1 text-muted">Total Pending</p>
          <h3 class="mb-1">2,040</h3>
          <small class="text-success">
            <i data-feather="trending-up" width="14"></i>
            <strong>1.8%</strong> Up from yesterday
          </small>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /stat card -->
<div class="card shadow-sm">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h2 class="mb-0">Sales Details</h2>
    <div class="d-flex align-items-center gap-2">
      <!-- Month selector -->
      <div class="dropdown">
        <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
          October
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">September</a></li>
          <li><a class="dropdown-item" href="#">October</a></li>
          <li><a class="dropdown-item" href="#">November</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card-body pt-2">
    <canvas id="salesChart" height="140"></canvas>
  </div>
</div>

{{-- Tabel barang --}}
<div class="card shadow-sm">
  <div class="card-header bg-transparent d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Deals Details</h5>
    <div class="d-flex align-items-center gap-2">
      <span class="text-muted small">October</span>
      <i data-feather="chevron-down" width="16"></i>
    </div>
  </div>

  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-hover mb-0 custom-table">
        <thead class="table-light custom-thead">
          <tr>
            <th>Product Name</th>
            <th>Location</th>
            <th>Date - Time</th>
            <th>Piece</th>
            <th>Amount</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="align-middle">
				<img src="{{ asset('img/products/apple-watch.jpg') }}" 
				alt="Apple Watch" 
				class="rounded" 
				width="40" height="40">
				<strong>Apple Watch</strong>
			</td>
            <td>6096 Marjolaine Landing</td>
            <td>12.09.2019 - 12:53 PM</td>
            <td>423</td>
            <td><strong>$34,295</strong></td>
            <td><span class="badge bg-soft-success text-success">Delivered</span></td>
          </tr>
          <!--  ULANG BARIS LAINNYA  -->
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    const themeToggle = document.querySelector('.js-theme-toggle');
    const body = document.body;
    const docEl = document.documentElement;
    const logoLight = document.getElementById('logo-light');
    const logoDark = document.getElementById('logo-dark');

    if (!themeToggle) {
        console.warn("Theme toggle (.js-theme-toggle) tidak ditemukan.");
        return;
    }

    // Hapus semua ikon lama (svg, data-feather, class icon-*)
    themeToggle.querySelectorAll('svg, [data-feather="sun"], [data-feather="moon"], .icon-sun, .icon-moon').forEach(el => el.remove());

    // Pastikan hanya satu .theme-icon
    const existingIcons = Array.from(themeToggle.querySelectorAll('.theme-icon'));
    let themeIconEl = existingIcons.shift();
    existingIcons.forEach(el => el.remove());
    if (!themeIconEl) {
        themeToggle.insertAdjacentHTML('afterbegin', '<span class="theme-icon" aria-hidden="true"></span>');
        themeIconEl = themeToggle.querySelector('.theme-icon');
    }

    function setThemeIcon(theme) {
        if (!themeIconEl) return;
        // bersihkan sebelum mengisi
        themeIconEl.innerHTML = '';

        if (window.feather && feather.icons) {
            try {
                if (theme === 'dark') {
                    themeIconEl.innerHTML = feather.icons.moon.toSvg({width: 16, height: 16});
                    themeToggle.setAttribute('aria-label', 'Switch to light mode');
                } else {
                    themeIconEl.innerHTML = feather.icons.sun.toSvg({width: 16, height: 16});
                    themeToggle.setAttribute('aria-label', 'Switch to dark mode');
                }
                return;
            } catch (e) {
                console.warn('Feather gagal, fallback ke teks', e);
            }
        }

        // fallback sederhana (emoji)
        themeIconEl.textContent = theme === 'dark' ? '🌙' : '☀️';
    }

    function applyTheme(theme) {
        if (theme === 'dark') {
            body.classList.add('dark');
            docEl.classList.add('dark');
            if (logoLight) logoLight.classList.add('d-none');
            if (logoDark) logoDark.classList.remove('d-none');
            localStorage.setItem('theme', 'dark');
        } else {
            body.classList.remove('dark');
            docEl.classList.remove('dark');
            if (logoLight) logoLight.classList.remove('d-none');
            if (logoDark) logoDark.classList.add('d-none');
            localStorage.setItem('theme', 'light');
        }
        setThemeIcon(theme);
    }

    const savedTheme = localStorage.getItem('theme') ||
        (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

    applyTheme(savedTheme);

    themeToggle.addEventListener('click', function (e) {
        e.preventDefault();
        const current = localStorage.getItem('theme') || 'light';
        applyTheme(current === 'light' ? 'dark' : 'light');
    });
});
</script>
<script>
	document.querySelector('.arrow-circle').addEventListener('click', function (e) {
  e.preventDefault();
  bootstrap.Dropdown.getOrCreateInstance(
    document.getElementById('userDropdown')
  ).toggle();
});
</script>

{{-- Script untuk chart --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
  const ctx = document.getElementById('salesChart');

  /* 1. Label bawah = interval 5k (5k-60k) */
  const labels = Array.from({length:12}, (_,i) => (i+1)*5 + 'k');

  /* 2. Banyak titik acak (bukan kelipatan 5k) → garis tajam */
  const rawX = [7800, 14200, 21389, 24750, 26330, 28990, 32400, 35670, 38200, 41350, 44700, 48650];
  const dataY = [52, 58, 73, 69, 81, 76, 88, 66, 92, 59, 88, 97]; // %

  /* 3. Gradient area */
  const gradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 160);
  gradient.addColorStop(0, 'rgba(13, 110, 253, .45)');
  gradient.addColorStop(1, 'rgba(13, 110, 253, 0)');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        data: dataY,
        borderColor: '#0d6efd',
        backgroundColor: gradient,
        fill: true,
        tension: 0,               // garis tajam
        pointRadius: 3,
        pointHoverRadius: 5,
        pointBackgroundColor: '#0d6efd',
        pointBorderColor: '#fff',
        pointBorderWidth: 2
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      interaction: { intersect: false, mode: 'point' },
      plugins: {
        legend: { display: false },
        tooltip: {
          backgroundColor: '#0d6efd',
          titleColor: '#fff',
          bodyColor: '#fff',
          padding: 6,
          cornerRadius: 4,
          displayColors: false,
          position: 'average',
          yAlign: 'bottom',
          callbacks: {
            /* 4. Hanya nilai X asli (angka) */
            label: () => null,
            title: (items) => rawX[items[0].dataIndex].toLocaleString()
          }
        }
      },
      scales: {
        x: {
          grid: { display: false, drawBorder: false },
          ticks: { color: '#6c757d' }
        },
        y: {
          beginAtZero: false,
          min: 40,
          max: 100,
          ticks: {
            stepSize: 10,
            color: '#6c757d',
            callback: val => val + '%'
          },
          grid: { color: '#e9ecef', drawBorder: false }
        }
      }
    }
  });
</script>
@endpush
