<table class="table tablesorter " id="">
                                          <thead class=" text-primary">
                                            <tr>
                                              <th>
                                                NO
                                              </th>
                                              <th>
                                                Nama Siswa
                                              </th>
                                              <th>
                                                Ruangan
                                              </th>
                                              <th>
                                                Tanggal
                                              </th>
                                              <th>
                                                Jam
                                              </th>
                                              <th>
                                                Mata Pelajaran
                                              </th>
                                              <th>
                                                Soal
                                              </th>
                                              <th>
                                                Jawaban
                                              </th>
                                              <th>Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                                include("koneksi.php");
                                                $query="select *,tbsiswa.nama as namas,tbmapel.nama as namap from tbujian inner join tbsiswa on tbujian.nis=tbsiswa.nis
                                                inner join tbjadwal on tbujian.kodejadwal=tbjadwal.kodejadwal
                                                inner join tbsoal on tbujian.kodesoal=tbsoal.kodesoal
                                                inner join tbmapel on tbsoal.kodemapel=tbmapel.kodemapel";
                                                $execute=mysqli_query($koneksi,$query);
                                                $i=1;
                                                while($data=mysqli_fetch_array($execute)){
                                            ?>
                                            <tr>
                                              <td><?php echo $i;?></td>
                                              <td>
                                                <?php echo $data['namas']?>
                                              </td>
                                              <td>
                                                <?php echo $data['ruangan'] ?>
                                              </td>
                                              <td>
                                              <?php echo date('l, d M Y',strtotime($data['hari']));?>
                                              </td>
                                              <td>
                                              <?php echo date('H.i',strtotime($data['jammulai']))."-".date('H.i',strtotime($data['jamselesai']));?>
                                              </td>
                                              <td>
                                              <?php echo $data['namap'] ?>
                                              </td>
                                              <td>
                                              <?php echo $data['kodesoal'] ?>
                                              </td>
                                              <td>
                                              <?php echo $data['jawaban'] ?>
                                              </td>
                                              <td>
                                              <?php echo $data['status'] ?>
                                              </td>
                                            </tr>
                                            <?php
                                                $i=$i+1;
                                                }
                                            ?>
                                          </tbody>
                                        </table>