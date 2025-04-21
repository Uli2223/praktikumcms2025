<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Add any custom JavaScript here
    document.addEventListener('DOMContentLoaded', function() {
        // Example visitor statistics chart
        const ctx = document.getElementById('visitorChart');
        if(ctx) {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Jumlah Pengunjung',
                        data: [65, 59, 80, 81, 56, 55],
                        borderColor: '#4e73df',
                        tension: 0.1,
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
        
        // Example category chart
        const pieCtx = document.getElementById('categoryChart');
        if(pieCtx) {
            new Chart(pieCtx, {
                type: 'pie',
                data: {
                    labels: ['Teknologi', 'Pendidikan', 'Hiburan'],
                    datasets: [{
                        data: [5, 3, 2],
                        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc']
                    }]
                },
                options: {
                    responsive: true
                }
            });
        }
    });
</script>