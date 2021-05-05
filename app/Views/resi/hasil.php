                <table style="font-size: 14px;">
                <tr>
                    <td class="font-weight-bold">NO RESI</td>
                    <td>:</td>
                    <td><?= $hasil['summary']['awb']; ?></td>
                </tr>
                <tr>
                    <td class="font-weight-bold">KURIR</td>
                    <td>:</td>
                    <td><?= $hasil['summary']['courier']; ?></td>
                </tr>
                <tr>
                    <td class="font-weight-bold">SERVICE</td>
                    <td>:</td>
                    <td><?= $hasil['summary']['service']; ?></td>
                </tr>
                <tr>
                    <td class="font-weight-bold">STATUS</td>
                    <td>:</td>
                    <td><?= $hasil['summary']['status']; ?></td>
                </tr>

                <tr>
                    <td class="font-weight-bold">TANGGAL</td>
                    <td>:</td>
                    <td><?= $hasil['summary']['date']; ?></td>
                </tr>
                <tr>
                    <td class="font-weight-bold">DESKRIPSI</td>
                    <td>:</td>
                    <td><?= $hasil['summary']['desc']; ?></td>
                </tr>

                <tr>
                    <td class="font-weight-bold">JUMLAH</td>
                    <td>:</td>
                    <td><?= $hasil['summary']['amount']; ?></td>
                </tr>

                <tr>
                    <td class="font-weight-bold">BERAT</td>
                    <td>:</td>
                    <td><?= $hasil['summary']['weight']; ?></td>
                </tr>

                </table>


                <table class="mt-3" style="font-size: 14px;">
                <tr>
                    <td class="font-weight-bold">ASAL</td>
                    <td>:</td>
                    <td><?= $hasil['detail']['origin']; ?></td>
                </tr>
                <tr>
                    <td class="font-weight-bold">TUJUAN</td>
                    <td>:</td>
                    <td><?= $hasil['detail']['destination']; ?></td>
                </tr>
                <tr>
                    <td class="font-weight-bold">PENGIRIM</td>
                    <td>:</td>
                    <td><?= $hasil['detail']['shipper']; ?></td>
                </tr>
                <tr>
                    <td class="font-weight-bold">PENERIMA</td>
                    <td>:</td>
                    <td><?= $hasil['detail']['receiver']; ?></td>
                </tr>

                </table>
				<hr>
				<span class="mr-2" style="font-size: 12px;">Bagikan ke:</span>
				<a href='https://api.whatsapp.com/send?text=<?= urlencode("http://jagoanresi.com/?kurir=".$hasil['summary']['courier']."&resi=".$hasil['summary']['awb']); ?>'class="btn btn-success btn-sm btn-floating">
				  <i class="fab fa-whatsapp"></i>
				</a>
				<a href='https://telegram.me/share/url?url=<?= urlencode("http://jagoanresi.com/?kurir=".$hasil['summary']['courier']."&resi=".$hasil['summary']['awb']); ?>' class="btn btn-info btn-sm btn-floating">
				  <i class="fab fa-telegram"></i>
				</a>
				<a href='sms:?&body=<?= urlencode("http://jagoanresi.com/?kurir=".$hasil['summary']['courier']."&resi=".$hasil['summary']['awb']); ?>' class="btn btn-warning btn-sm btn-floating">
				  <i class="fas fa-sms"></i>
				</a>
				<a href='mailto:?&body=<?= urlencode("http://jagoanresi.com/?kurir=".$hasil['summary']['courier']."&resi=".$hasil['summary']['awb']); ?>' class="btn btn-danger btn-sm btn-floating">
				  <i class="fa fa-envelope"></i>
				</a>
			        <button onclick="setClipboard('<?= "http://jagoanresi.com/?kurir=".$hasil['summary']['courier']."&resi=".$hasil['summary']['awb']; ?>')" class="btn btn-primary btn-sm btn-floating"><i class="fa fa-link"></i></button>
				<hr>

				<ul class="timeline">
					<?php 
					for($i = $countnya - 1; $i >= 0; $i--) {?>
						<li>
				          <p><?= $hasil['history'][$i]['date'] ?></p>
				          <p><?= $hasil['history'][$i]['desc'] ?></p>
				          <p><?= $hasil['history'][$i]['location'] ?></p>
				      	</li>
					<?php } ?>
				</ul>