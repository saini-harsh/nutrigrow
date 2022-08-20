<script src="../assests/js/contact/adminsignup.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

<!-- table js start -->
<!-- table js end -->

<!-- chart js start -->
<!-- <script src="../../assests/js/adminpanel/barchart.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
    ];

    const data = {
        labels: labels,
        datasets: [{
            label: "POWERGROUP STATICS",
            borderColor: "#2a8b03",
            data: [50, 250, 50, 400, 30, 279, 397],
            backgroundColor: [
                '#16b816',
                '#ffb400',
                '#16b816',
                '#2a8b03',
                '#5d350c',




            ]
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
                y: { // defining min and max so hiding the dataset does not change scale range
                    min: 0,
                    max: 500
                }
            }
        }
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    const config2 = {
        type: 'bar',
        data: data,
        options: {
            animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
            },
            scales: {
                y: { // defining min and max so hiding the dataset does not change scale range
                    min: 0,
                    max: 500
                }
            }
        }
    };

    const lineChart = new Chart(
        document.getElementById('lineChart'),
        config2
    );


    const config3 = {
        type: 'polarArea',
        data: data,
        options: {}
    };

    const doughnutChart = new Chart(
        document.getElementById('doughnutChart'),
        config3
    );
</script>








<!-- chart js end -->

</body>

</html>