<html>

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <h2>Stock Bahan</h2>
        <h4>(Inventory)</h4>
        <a class="btn btn-primary my-2" href="/QcProject/public/" role="button">Kembali</a>
        <div class="data-tables datatable-dark">

            <table class="table table-striped" id="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">PIC</th>
                        <th scope="col">shift</th>
                        <th scope="col">Jam Mulai</th>
                        <th scope="col">Jam Selesai</th>
                        <th scope="col">Part Number</th>
                        <th scope="col">Lot Number</th>
                        <th scope="col">Qty Check</th>
                        <th scope="col">Qty Oke</th>
                        <th scope="col">Qty NG</th>
                        <th scope="col">Scratch</th>
                        <th scope="col">Dented</th>
                        <th scope="col">Dimens</th>
                        <th scope="col">Pin G</th>
                        <th scope="col">CG</th>
                        <th scope="col">Piptil</th>
                        <th scope="col">Chip</th>
                        <th scope="col">Spiral</th>
                        <th scope="col">Shortcut</th>
                        <th scope="col">Burry T1</th>
                        <th scope="col">Burry T2</th>
                        <th scope="col">Rusty Before Plating</th>
                        <th scope="col">M Proses</th>
                        <th scope="col">Pin Hole</th>
                        <th scope="col">Bending</th>
                        <th scope="col">Rusty</th>
                        <th scope="col">Color</th>
                        <th scope="col">Burn Mark</th>
                        <th scope="col">Part Off</th>
                        <th scope="col">Blister</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($scanqc as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['pic']; ?></td>
                            <td><?= $s['shift']; ?></td>
                            <td><?= $s['jam_mulai']; ?></td>
                            <td><?= $s['jam_selesai']; ?></td>
                            <td><?= $s['part_number']; ?></td>
                            <td><?= $s['lot_number']; ?></td>
                            <td><?= $s['qty_check']; ?></td>
                            <td><?= $s['qty_oke']; ?></td>
                            <td><?= $s['qty_ng']; ?></td>
                            <td><?= $s['scratch']; ?></td>
                            <td><?= $s['dented']; ?></td>
                            <td><?= $s['dimens']; ?></td>
                            <td><?= $s['pin_g']; ?></td>
                            <td><?= $s['cg']; ?></td>
                            <td><?= $s['piptil']; ?></td>
                            <td><?= $s['chip']; ?></td>
                            <td><?= $s['spiral']; ?></td>
                            <td><?= $s['shortcut']; ?></td>
                            <td><?= $s['burry_t1']; ?></td>
                            <td><?= $s['burry_t2']; ?></td>
                            <td><?= $s['rusty_bp']; ?></td>
                            <td><?= $s['m_proses']; ?></td>
                            <td><?= $s['pin_hole']; ?></td>
                            <td><?= $s['bending']; ?></td>
                            <td><?= $s['rusty']; ?></td>
                            <td><?= $s['color']; ?></td>
                            <td><?= $s['burn_mark']; ?></td>
                            <td><?= $s['part_off']; ?></td>
                            <td><?= $s['blister']; ?></td>
                            <td><?= $s['keterangan']; ?></td>
                            <td><?= $s['created_at']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>