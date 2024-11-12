<x-app-layout>
    @section('title')
        Dashboard
    @endsection

    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.35.3/dist/apexcharts.min.css">
        <style>
            .table-responsive {
                max-height: 300px;
                overflow-y: auto;
            }

            .card-title {
                font-weight: bold;
                color: #333;
            }

            .table-striped thead th {
                color: white;
            }

            .table-striped thead th:nth-child(1) {
                background-color: #28a745;
                /* Green */
            }

            .table-striped thead th:nth-child(2) {
                background-color: #007bff;
                /* Blue */
            }

            .table-striped thead th:nth-child(3) {
                background-color: #ffc107;
                /* Yellow */
            }

            .nav-tabs .nav-link.active {
                background-color: #007bff;
                color: white;
            }

            .filter-select {
                margin-bottom: 15px;
            }

            /* Dark Mode Styles */
            body.dark-mode {
                background-color: #121212;
                color: #e0e0e0;
            }

            body.dark-mode .card {
                background-color: #1e1e1e;
                border-color: #333;
            }

            body.dark-mode .card-title {
                color: #e0e0e0;
            }

            body.dark-mode .breadcrumb-item a {
                color: #b0b0b0;
            }

            body.dark-mode .table-striped thead th {
                color: #e0e0e0;
            }

            body.dark-mode .table-striped thead th:nth-child(1) {
                background-color: #2e7d32;
                /* Dark Green */
            }

            body.dark-mode .table-striped thead th:nth-child(2) {
                background-color: #1565c0;
                /* Dark Blue */
            }

            body.dark-mode .table-striped thead th:nth-child(3) {
                background-color: #ff8f00;
                /* Dark Yellow */
            }

            body.dark-mode .nav-tabs .nav-link.active {
                background-color: #1565c0;
                color: #e0e0e0;
            }

            .apexcharts-toolbar {
                background-color: #333;
                /* Warna latar belakang gelap */
                color: #e0e0e0;
                /* Warna teks untuk toolbar */
            }

            .apexcharts-menu-item {
                color: #e0e0e0;
                /* Warna teks untuk item menu */
            }
        </style>
    @endpush

    <!-- Breadcrumb -->
    <div class="font-weight-medium shadow-none position-relative overflow-hidden mb-7">
        <div class="card-body px-0">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-medium fs-14 mb-0">Dashboard</h4>
                    <div class="d-flex justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="">Home</a>
                                </li>
                                <li class="breadcrumb-item text-muted" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <a href="{{ route('ideas.create') }}" class="btn btn-danger">Submit your CITA!</a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row">
        <!-- Leaderboards Column -->
        <div class="col-md-3">
            <!-- NoVA-A Elimination Leaderboard -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">NoVA-A Leaderboard</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <select class="form-select filter-select" aria-label="Filter by Year">
                            <option selected>{{ \Carbon\Carbon::now()->format('Y') }}</option>
                        </select>
                        <select class="form-select filter-select" aria-label="Filter by Month">
                            <option selected>{{ \Carbon\Carbon::now()->format('F') }}</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="bg-success">
                                <tr>
                                    <th>Rank</th>
                                    <th>Nama</th>
                                    <th>Idea</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ahmad Wijaya</td>
                                    <td>95</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Nurul Hidayah</td>
                                    <td>92</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Budi Santoso</td>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ratna Sari</td>
                                    <td>85</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dwi Kusuma</td>
                                    <td>82</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <!-- Best Practice Implementation Leaderboard -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Best Practice Leaderboard</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <select class="form-select filter-select" aria-label="Filter by Year">
                            <option selected>{{ \Carbon\Carbon::now()->format('Y') }}</option>
                        </select>
                        <select class="form-select filter-select" aria-label="Filter by Month">
                            <option selected>{{ \Carbon\Carbon::now()->format('F') }}</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="bg-info">
                                <tr>
                                    <th>Rank</th>
                                    <th>Nama</th>
                                    <th>Idea</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ayu Wulandari</td>
                                    <td>98</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bagus Wijaya</td>
                                    <td>95</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Intan Sari</td>
                                    <td>92</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rizki Pratama</td>
                                    <td>89</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Nadia Putri</td>
                                    <td>86</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <!-- Improvement Leaderboard -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Improvement Leaderboard</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <select class="form-select filter-select" aria-label="Filter by Year">
                            <option selected>{{ \Carbon\Carbon::now()->format('Y') }}</option>
                        </select>
                        <select class="form-select filter-select" aria-label="Filter by Month">
                            <option selected>{{ \Carbon\Carbon::now()->format('F') }}</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="bg-purple">
                                <tr>
                                    <th>Rank</th>
                                    <th>Nama</th>
                                    <th>Idea</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ayu Wulandari</td>
                                    <td>97</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bagus Wijaya</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Intan Sari</td>
                                    <td>91</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rizki Pratama</td>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Nadia Putri</td>
                                    <td>85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <!-- AI Leaderboard -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">AI Leaderboard</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <select class="form-select filter-select" aria-label="Filter by Year">
                            <option selected>{{ \Carbon\Carbon::now()->format('Y') }}</option>
                        </select>
                        <select class="form-select filter-select" aria-label="Filter by Month">
                            <option selected>{{ \Carbon\Carbon::now()->format('F') }}</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="bg-warning">
                                <tr>
                                    <th>Rank</th>
                                    <th>Nama</th>
                                    <th>Idea</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Adi Nugroho</td>
                                    <td>97</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Budi Santoso</td>
                                    <td>94</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cahya Pratama</td>
                                    <td>91</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dewi Sartika</td>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Eka Wulandari</td>
                                    <td>85</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Charts Column -->
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <!-- Bar Chart -->
                <div class="col-md-7 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Effectiveness Bar Chart</h4>
                                <div class="d-flex">
                                    <select id="yearFilterBar" class="form-select filter-select"
                                        aria-label="Filter by Year">
                                        <option selected>{{ \Carbon\Carbon::now()->format('Y') }}</option>
                                    </select>
                                    <select id="monthFilterBar" class="form-select filter-select"
                                        aria-label="Filter by Month">
                                        <option selected>{{ \Carbon\Carbon::now()->format('M') }}</option>
                                    </select>
                                    <select id="typeFilterBar" class="form-select filter-select"
                                        aria-label="Filter by Type">
                                        <option value="department" selected>Department</option>
                                        <option value="section">Section</option>
                                    </select>
                                </div>
                            </div>
                            <div id="stackedBarChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Pie Charts -->
                <div class="col-md-5 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Best Practice Pie Chart</h4>
                                <div class="d-flex">
                                    <select id="yearFilterPie" class="form-select filter-select"
                                        aria-label="Filter by Year">
                                        <option selected>{{ \Carbon\Carbon::now()->format('Y') }}</option>
                                    </select>
                                    <select id="monthFilterPie" class="form-select filter-select"
                                        aria-label="Filter by Month">
                                        <option selected>{{ \Carbon\Carbon::now()->format('M') }}</option>
                                    </select>
                                    <select id="typeFilterPie" class="form-select filter-select"
                                        aria-label="Filter by Type">
                                        <option value="department" selected>Department</option>
                                        <option value="section">Section</option>
                                    </select>
                                </div>
                            </div>
                            <div id="bestPracticePieChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="row">

                <!-- Bar Chart -->
                <div class="col-md-7 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Nova-A Bar Chart</h4>
                                <div class="d-flex">
                                    <select id="yearFilterNova" class="form-select filter-select"
                                        aria-label="Filter by Year">
                                        <option selected>{{ \Carbon\Carbon::now()->format('Y') }}</option>
                                    </select>
                                    <select id="monthFilterNova" class="form-select filter-select"
                                        aria-label="Filter by Month">
                                        <option selected>{{ \Carbon\Carbon::now()->format('M') }}</option>
                                    </select>
                                    <select id="typeFilterNova" class="form-select filter-select"
                                        aria-label="Filter by Type">
                                        <option value="department" selected>Department</option>
                                        <option value="section">Section</option>
                                    </select>
                                </div>
                            </div>
                            <div id="novaBarChart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Improvement Pie Chart</h4>
                                <div class="d-flex">
                                    <select id="yearFilterImprovement" class="form-select filter-select"
                                        aria-label="Filter by Year">
                                        <option selected>{{ \Carbon\Carbon::now()->format('Y') }}</option>
                                    </select>
                                    <select id="monthFilterImprovement" class="form-select filter-select"
                                        aria-label="Filter by Month">
                                        <option selected>{{ \Carbon\Carbon::now()->format('M') }}</option>
                                    </select>
                                    <select id="typeFilterImprovement" class="form-select filter-select"
                                        aria-label="Filter by Type">
                                        <option value="department" selected>Department</option>
                                        <option value="section">Section</option>
                                    </select>
                                </div>
                            </div>
                            <div id="improvementPieChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Summary Row -->
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <div class="card mb-4 shadow">
                <div class="card-body">
                    <h4 class="card-title text-primary">Summary of NoVA-A Elimination</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p>Total Ideas: 150</p>
                            <p>Implemented: 120</p>
                            <p>Success Rate: 80%</p>
                        </div>
                        <div class="text-right">
                            <span class="badge bg-success">80%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card mb-4 shadow">
                <div class="card-body">
                    <h4 class="card-title text-info">Summary of Best Practice Implementation</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p>Total Practices: 75</p>
                            <p>Adopted: 60</p>
                            <p>Adoption Rate: 80%</p>
                        </div>
                        <div class="text-right">
                            <span class="badge bg-info">80%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card mb-4 shadow">
                <div class="card-body">
                    <h4 class="card-title text-warning">Summary of Improvement</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p>Total Improvements: 200</p>
                            <p>Implemented: 160</p>
                            <p>Implementation Rate: 80%</p>
                        </div>
                        <div class="text-right">
                            <span class="badge bg-warning">80%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card mb-4 shadow">
                <div class="card-body">
                    <h4 class="card-title text-danger">Summary of AI</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p>Total Ideas: 150</p>
                            <p>Implemented: 120</p>
                            <p>Success Rate: 80%</p>
                        </div>
                        <div class="text-right">
                            <span class="badge bg-danger text-light">80%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.35.3/dist/apexcharts.min.js"></script>
        <script>
            // Ambil data kategori dari controller
            const categories = @json($sections);
            const departments = @json($departments);

            // Fungsi untuk memperbarui grafik berdasarkan filter
            function updateBarChart() {
                const type = document.getElementById('typeFilterBar').value;
                let data;
                if (type === 'department') {
                    data = departments;
                } else {
                    data = categories;
                }

                stackedBarChart.updateOptions({
                    xaxis: {
                        departments: data.map(item => item.name),
                    },
                    series: [{
                        name: 'Q1',
                        data: data.map(() => Math.floor(Math.random() * 100)) // Data dummy random
                    }, {
                        name: 'Q2',
                        data: data.map(() => Math.floor(Math.random() * 100))
                    }, {
                        name: 'Q3',
                        data: data.map(() => Math.floor(Math.random() * 100))
                    }, {
                        name: 'Q4',
                        data: data.map(() => Math.floor(Math.random() * 100))
                    }]
                });
            }

            function updatePieChart() {
                const type = document.getElementById('typeFilterPie').value;
                let data;
                if (type === 'department') {
                    data = departments;
                } else {
                    data = categories;
                }

                bestPracticePieChart.updateOptions({
                    series: data.map(() => Math.floor(Math.random() * 100)), // Data dummy random
                    labels: data.map(item => item.name)
                });
            }

            function updateNovaBarChart() {
                const type = document.getElementById('typeFilterNova').value;
                let data;
                if (type === 'department') {
                    data = departments;
                } else {
                    data = categories;
                }

                novaBarChart.updateOptions({
                    xaxis: {
                        departments: data.map(item => item.name),
                    },
                    series: [{
                        name: 'Q1',
                        data: data.map(() => Math.floor(Math.random() * 100)) // Data dummy random
                    }, {
                        name: 'Q2',
                        data: data.map(() => Math.floor(Math.random() * 100))
                    }, {
                        name: 'Q3',
                        data: data.map(() => Math.floor(Math.random() * 100))
                    }, {
                        name: 'Q4',
                        data: data.map(() => Math.floor(Math.random() * 100))
                    }]
                });
            }

            function updateImprovementPieChart() {
                const type = document.getElementById('typeFilterImprovement').value;
                let data;
                if (type === 'department') {
                    data = departments;
                } else {
                    data = categories;
                }

                improvementPieChart.updateOptions({
                    series: data.map(() => Math.floor(Math.random() * 100)), // Data dummy random
                    labels: data.map(item => item.name)
                });
            }

            // Tambahkan event listener untuk filter
            document.getElementById('typeFilterBar').addEventListener('change', updateBarChart);
            document.getElementById('typeFilterPie').addEventListener('change', updatePieChart);
            document.getElementById('typeFilterNova').addEventListener('change', updateNovaBarChart);
            document.getElementById('typeFilterImprovement').addEventListener('change', updateImprovementPieChart);

            // Inisialisasi grafik
            var stackedBarOptions = {
                series: [{
                    name: 'Q1',
                    data: departments.map(() => Math.floor(Math.random() * 100)) // Data dummy random
                }, {
                    name: 'Q2',
                    data: departments.map(() => Math.floor(Math.random() * 100))
                }, {
                    name: 'Q3',
                    data: departments.map(() => Math.floor(Math.random() * 100))
                }, {
                    name: 'Q4',
                    data: departments.map(() => Math.floor(Math.random() * 100))
                }],
                chart: {
                    type: 'bar',
                    height: 350,
                    stacked: true,
                    foreColor: '#b0bac2' // Text color for dark mode
                },
                plotOptions: {
                    bar: {
                        horizontal: false, // Mengubah bar chart menjadi horizontal
                    },
                },
                xaxis: {
                    departments: departments.map(department => department.name), // Menggunakan nama dari data kategori
                },
                legend: {
                    position: 'right',
                    offsetY: 40
                },
                fill: {
                    opacity: 2
                },
                tooltip: {
                    theme: 'dark' // Tooltip theme for dark mode
                }
            };

            var stackedBarChart = new ApexCharts(document.querySelector("#stackedBarChart"), stackedBarOptions);
            stackedBarChart.render();

            var bestPracticePieOptions = {
                series: departments.map(() => Math.floor(Math.random() * 100)), // Data dummy random
                chart: {
                    type: 'pie',
                    height: 350,
                    foreColor: '#b0bac2' // Text color for dark mode
                },
                labels: departments.map(department => department.name), // Menggunakan nama dari data kategori
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                tooltip: {
                    theme: 'dark' // Tooltip theme for dark mode
                }
            };


            var bestPracticePieChart = new ApexCharts(document.querySelector("#bestPracticePieChart"), bestPracticePieOptions);
            bestPracticePieChart.render();


            var novaBarOptions = {
                ...stackedBarOptions,
                xaxis: {
                    departments: departments.map(department => department.name), // Menggunakan nama dari data kategori
                },
            };

            var novaBarChart = new ApexCharts(document.querySelector("#novaBarChart"), novaBarOptions);
            novaBarChart.render();

            var improvementPieOptions = {
                ...bestPracticePieOptions,
                labels: categories.map(category => category.name), // Menggunakan nama dari data kategori
            };

            var improvementPieChart = new ApexCharts(document.querySelector("#improvementPieChart"), improvementPieOptions);
            improvementPieChart.render();
        </script>
    @endpush

</x-app-layout>
