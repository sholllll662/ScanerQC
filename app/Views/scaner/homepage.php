<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <figure class="text-center">

            <blockquote class="blockquote">
                <h1>Laporan Finish Good</h1>
                <a class="btn btn-primary" href="/QcProject/public/scan/export/export" role="button">Export Data</a>

            </blockquote>
        </figure>
        <div class="table-responsive">
            Toggle column: <a class="toggle-vis" data-column="1">PIC</a>
            - <a class="toggle-vis" data-column="2">shift</a>
            - <a class="toggle-vis" data-column="3">Jam Mulai</a>
            - <a class="toggle-vis" data-column="4">Jam Selesai</a>
            - <a class="toggle-vis" data-column="5">Part Number</a>
            - <a class="toggle-vis" data-column="6">Lot Number</a>
            <table class="table table-bordered display" id="example" style="width:100%">
                <thead class="table-dark">
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
                            <td scope="row"><?= $i++; ?></td>
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
</div>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            paging: false,
            order: [
                [0, 'asc']
            ],
        });
        $('a.toggle-vis').on('click', function(e) {
            e.preventDefault();

            // Get the column API object
            var column = table.column($(this).attr('data-column'));

            // Toggle the visibility
            column.visible(!column.visible());
        });

    });
</script>


<?= $this->endSection(); ?>