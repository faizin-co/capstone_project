@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p>Selamat datang di Lansia Sehat</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h3>{{ $jumlahPasien }}</h3>
                              <p>Data Pasien</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-bag"></i>
                            </div>
                            <a href="/pasien" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $jumlahScreening }}</h3>
                              <p>Data Screening</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="/screening" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                              <h3>{{ $jumlahUser }}</h3>
                              <p>User</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-person-add"></i>
                            </div>
                            <a href="/profile" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                  <h3>65</h3>
                                  <p>Kunjungan Website</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                        </div>
                    </div>
                    <!-- Grafik Kunjungan -->
                    <h2 class="text-center"><strong>Grafik Kunjungan</strong></h2>
                    <div class="chart-container" style="width: 80%; margin: 0 auto; height: 400px;">
                        <canvas id="kunjunganChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('kunjunganChart').getContext('2d');
    var gradientStroke = ctx.createLinearGradient(0, 0, 0, 400);
    gradientStroke.addColorStop(0, 'rgba(54, 162, 235, 1)'); // Warna di atas
    gradientStroke.addColorStop(1, 'rgba(255, 99, 132, 1)'); // Warna di bawah

    var kunjunganChart = new Chart(ctx, {
        type: 'line',  // Jenis grafik
        data: {
            labels: @json($labels),  // Tanggal yang dikirim dari controller
            datasets: [{
                label: 'Kunjungan',
                data: @json($data),  // Jumlah kunjungan yang dikirim dari controller
                backgroundColor: gradientStroke,  // Menggunakan gradien untuk area bawah
                borderColor: 'rgba(75, 192, 192, 1)',  // Warna border garis
                borderWidth: 3,  // Lebar garis yang lebih tebal
                pointBackgroundColor: 'rgba(75, 192, 192, 1)', // Warna titik pada grafik
                pointRadius: 6,  // Ukuran titik
                pointBorderWidth: 3,  // Lebar border titik
                fill: true,  // Mengisi area di bawah grafik
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: false,  // Menonaktifkan judul otomatis dari chart.js
                }
            },
            scales: {
                x: {
                    ticks: {
                        maxRotation: 0, // Memastikan tanggal tidak terputar
                        minRotation: 0, // Tidak ada rotasi pada teks
                        autoSkip: true,  // Menghindari teks yang berdesakan
                    }
                },
                y: {
                    beginAtZero: false,  // Matikan beginAtZero
                    min: 1,              // Tentukan nilai minimum sumbu Y
                    max: 10,             // Tentukan nilai maksimum sumbu Y (untuk menunjukkan 31)
                    stepSize: 1,         // Menampilkan angka tiap 1 unit
                    ticks: {
                        callback: function(value) {
                            return value;  // Menampilkan angka bulat
                        }
                    }
                }
            }
        }
    });
</script>
@endsection
