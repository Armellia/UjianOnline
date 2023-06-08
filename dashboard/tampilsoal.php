<table class="table tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          NO
                        </th>
                        <th>
                          Kode Soal
                        </th>
                        <th>
                          Soal
                        </th>
                        <th>
                          Jawaban
                        </th>
                        <th>
                          Mapel
                        </th>
                        <th>Kelas</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        include("koneksi.php");
                        $query="select *,tbmapel.nama as namap from tbsoal inner join tbmapel on tbsoal.kodemapel=tbmapel.kodemapel
                        inner join tbkelas on tbsoal.kodekelas=tbkelas.kodekelas";
                        $execute=mysqli_query($koneksi,$query);
                        $i=1;
                        while($data=mysqli_fetch_array($execute)){
                      ?>
                      <tr>
                        <td><?php echo $i;?></td>
                        <td>
                          <?php echo $data['kodesoal'];?>
                        </td>
                        <td>
                        <?php echo $data['soal'];?>
                        </td>
                        <td>
                        <?php echo $data['kuncijawaban'];?>
                        </td>
                        <td>
                        <?php echo $data['namap'];?>
                        </td>
                        <td>
                        <?php echo $data['kelas'];?>
                        </td>
                        <td>
                           <a href="banksoaledit.php?kodesoal=<?php echo $data['kodesoal']?>">Ubah</a> | <a href="proseshapussoal.php?kodesoal=<?php echo $data['kodesoal']?>"
                           onclick="confirm('Yakin Ingin Menghapus Data?');">Hapus</a>
                        </td>
                      </tr>
                      <?php
                        $i=$i+1;
                        }
                      ?>
                    </tbody>
                  </table>