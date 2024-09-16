<!DOCTYPE html><html><head>
    <title>Report</title><style>
        /* Tambahkan CSS jika diperlukan */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style></head><body>
    <h1>Report Title</h1>
    <table> <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th> </tr>
            <?php foreach ($reports as $report): ?>
                <tr><td><?php echo $report['tahun_rat']; ?></td>
                    <td><?php echo $report['modal_koperasi']; ?></td>
                    <td><?php echo $report['sisa_hasil']; ?></td></tr>
            <?php endforeach; ?></table>
</body></html>
