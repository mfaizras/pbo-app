<?= view('template/header') ?>

<div class="main">
                    <div class="akun-wrapper">
                        <div class="picture-akun">
                            <img src="<?= base_url('images/GambarAkun.png') ?>" alt="GambarAkun">
                        </div>
                        <div class="bio-akun">
                            <h1 id="nama"><?= $user['name'] ?></h1>
                            <h2 id="npm"><?= $user['username'] ?></h2>
                        </div>
                        <div>
                            <!-- <form action="<?= url_to('profileUpdate') ?>" method="POST">
                                <input type="text" name="name">
                                <input type="text" name="username">
                                <button type="submit">Submit</button>
                            </form> -->
                        </div>
                        <div class="edit-wrapper">
                            <button id="edit-btn" onclick="editProfile()">Edit Profil</button>
                            <button id="save-btn" onclick="saveProfile()" style="display: none;">Simpan</button>
                        </div>
                        <!-- Ini tombol Logout -->
                        <div class="logout-wrapper">
                            <button id="logout-btn" onclick="doLogout()" class="logout-btn">Logout</button>
                        </div>
                        <script type="text/javascript">
                            function editProfile() {
                                var nama = document.getElementById("nama");
                                var npm = document.getElementById("npm");
                                var namaInput = document.createElement("input");
                                var npmInput = document.createElement("input");
                                namaInput.setAttribute("type", "text");
                                npmInput.setAttribute("type", "text");
                                namaInput.setAttribute("id", "nama-input");
                                npmInput.setAttribute("id", "npm-input");
                                namaInput.value = nama.textContent;
                                npmInput.value = npm.textContent;
                                nama.parentNode.insertBefore(namaInput, nama.nextSibling);
                                npm.parentNode.insertBefore(npmInput, npm.nextSibling);
                                nama.style.display = "none";
                                npm.style.display = "none";
                                document.getElementById("edit-btn").style.display = "none";
                                document.getElementById("save-btn").style.display = "block";
                            }

                            function saveProfile() {
                                var newNama = document.getElementById("nama-input").value;
                                var newNpm = document.getElementById("npm-input").value;

                                let yourUrl = "<?= url_to('profileUpdate') ?>"

                                // let data = {name: newNama,username:newNpm};

                                var data = new FormData();
                                data.append('name', newNama);
                                data.append('username', newNpm);

                                fetch(yourUrl, {
                                    method: "POST",
                                    // headers: { 'Content-Type': 'application/json' },
                                    body: data
                                }).then(res => {
                                    console.log("Request complete! response:", res);
                                }).catch(error => {
                                    console.error('Error:', error);
                                });

                                var nama = document.getElementById("nama");
                                var namaInput = document.getElementById("nama-input");
                                var npm = document.getElementById("npm");
                                var npmInput = document.getElementById("npm-input");

                                nama.textContent = newNama;
                                nama.style.display = "block";
                                namaInput.parentNode.removeChild(namaInput);

                                npm.textContent = newNpm;
                                npm.style.display = "block";
                                npmInput.parentNode.removeChild(npmInput);

                                document.getElementById("save-btn").style.display = "none";
                                document.getElementById("edit-btn").style.display = "block";
                            }

                            function doLogout(){
                                var ask = window.confirm("apakah anda yakin ingin melakukan logout?");
                                if (ask) {
                                    window.alert("Logout Succesfully");

                                    window.location.href = "<?= url_to('doLogout') ?>";

                                }
                            }
                        </script>
                    </div>
                </div>

<?= view('template/footer') ?> 