<?= $this->extend('layout/tamplateAdmin'); ?>

<?= $this->section('content'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="container">
    <div class="row">
        <figure class="text-center">
            <blockquote class="blockquote">
                <h1>Menu Record Finish Good</h1>
                <h4>Admin</h4>
            </blockquote>
        </figure>

        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>

        <form action="/QcProject/public/scan/save" method="post">

            <!-- Form 1 -->
            <div class="from-group container">
                <h2 class="font-monospace">User</h2>
                <h4 id="message_info"></h4>
                <div class="container-fluid">
                    <div class="card text-bg-secondary">
                        <div class="card-body">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">PIC</span>
                                <input type="text" class="form-control" placeholder="PIC" aria-label="Username" aria-describedby="addon-wrapping" id="pic" name="pic" required>
                            </div>

                            <div class="input-group my-3">
                                <label class="input-group-text" for="shift">Shift</label>
                                <select class="form-select" id="shift" name="shift">
                                    <option value="1">Shift 1</option>
                                    <option value="2">Shift 2</option>
                                </select>
                            </div>

                            <!-- <div class="input-group my-3">
                                <form action="/action_page.php">
                                    <label for="tanggal">Tanggal:</label>
                                    <input type="date" id="tanggal" name="tanggal">
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form 2 Tambahin 'autofocus' di input scaner-->
            <div class="from-group container my-2">
                <h2 class="font-monospace">Input Data</h2>
                <h4 id="message_info"></h4>
                <div class="container-fluid">
                    <div class="card text-bg-secondary">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Jam Mulai" aria-label="Username" id="jam_mulai" name="jam_mulai" required>
                                <input type="text" class="form-control" placeholder="Jam Selesai" aria-label="Server" id="jam_selesai" name="jam_selesai" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Scan QR</span>
                                <input type="text" class="form-control" placeholder="Scan QR di sini" aria-label="Username" aria-describedby="basic-addon1" oninput="myFunction()" id="scener">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Part Number</span>
                                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" id="part_number" name="part_number" required>
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Lot Number</span>
                                <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" id="lot_number" name="lot_number" required>
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Quantity" aria-label="Username" aria-describedby="basic-addon1" id="qty_check" name="qty_check" required>
                                <input type="text" class="form-control" placeholder="Qyt NG" aria-label="Username" aria-describedby="basic-addon1" id="qty_ng" name="qty_ng" required>
                                <input type="text" class="form-control" placeholder="Qyt OK" aria-label="Username" aria-describedby="basic-addon1" id="qty_oke" name="qty_oke" required >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form 3 -->
            <div class="container my-2">
                <h2 class="font-monospace">Reject Nihon Seiki</h2>
                <h4 id="message_info"></h4>
                <div class="container-fluid">
                    <div class="card text-bg-secondary">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Stratch" aria-label="Username" id="scratch" name="scratch">
                                <input type="text" class="form-control" placeholder="Dented" aria-label="Server" id="dented" name="dented">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Dimens" aria-label="Username" id="dimens" name="dimens">
                                <input type="text" class="form-control" placeholder="Pin G" aria-label="Server" id="pin_g" name="pin_g">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="CG" aria-label="Username" id="cg" name="cg">
                                <input type="text" class="form-control" placeholder="Piptil" aria-label="Server" id="piptil" name="piptil">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Chip" aria-label="Username" id="" name="chip">
                                <input type="text" class="form-control" placeholder="Spiral" aria-label="Server" id="" name="spiral">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Shortcut" aria-label="Username" id="shortcut" name="shortcut">
                                <input type="text" class="form-control" placeholder="Burry T1" aria-label="Server" id="burry_t1" name="burry_t1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Burry T2" aria-label="Username" id="burry_t2" name="burry_t2">
                                <input type="text" class="form-control" placeholder="Rusty Before Plating" aria-label="Server" id="rusty_bp" name="rusty_bp">
                                <input type="text" class="form-control" placeholder="M Proses" aria-label="Server" id="m_proses" name="m_proses">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form 4 -->
            <div class="from-group container my-2">
                <h2 class="font-monospace">Reject Material</h2>
                <h4 id="message_info"></h4>
                <div class="container-fluid">
                    <div class="card text-bg-secondary">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Pin Hole" aria-label="Username" id="pin_hole" name="pin_hole">
                                <input type="text" class="form-control" placeholder="Bending" aria-label="Server" id="bending" name="bending">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form 5 -->
            <div class="from-group container my-2">
                <h2 class="font-monospace">Reject Plating</h2>
                <h4 id="message_info"></h4>
                <div class="container-fluid">
                    <div class="card text-bg-secondary">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Rusty" aria-label="Username" id="rusty" name="rusty">
                                <input type="text" class="form-control" placeholder="Color" aria-label="Server" id="color" name="color">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Burn Mark" aria-label="Username" id="burn_mark" name="burn_mark">
                                <input type="text" class="form-control" placeholder="Part Off" aria-label="Server" id="part_off" name="part_off">
                                <input type="text" class="form-control" placeholder="Blister" aria-label="Server" id="blister" name="blister">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form 6 -->
            <div class="from-group container my-2">
                <h2 class="font-monospace">Remark</h2>
                <h4 id="message_info"></h4>
                <div class="container-fluid">
                    <div class="card text-bg-secondary">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Keterangan" aria-label="Username" id="keterangan" name="keterangan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary mx-auto">Simpan</button>
            </div>
        </form>

    </div>
</div>
<script>
    const scener = document.getElementById('scener');
    const part_number = document.getElementById('part_number');
    const lot_number = document.getElementById('lot_number');

    scener.addEventListener('input', () => {
        let text = document.getElementById("scener").value;
        const myArray = text.split(";");
        part_number.value = myArray[3];
        lot_number.value = myArray[5];
    });

    var picInput = document.getElementById("pic");

    // picInput.addEventListener("input", function() {
    //     var regex = /^[a-zA-Z\s]+$/;
    //     var isValid = regex.test(picInput.value);

    //     if (!isValid) {
    //         picInput.setCustomValidity("Input harus terdiri dari huruf dan spasi saja");
    //     } else {
    //         picInput.setCustomValidity("");
    //     }
    // });
</script>

<?= $this->endSection(); ?>