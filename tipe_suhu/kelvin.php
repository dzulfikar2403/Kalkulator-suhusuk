<h5>Hasil dari <?= $_POST["number"] .' ' .$ukur?> : </h5>
<table cellspacing="0" cellpadding="15" border="1">
      <tr>
        <th>Tipe suhu</th>
        <th>Hasil Nilai</th>
        <th>Nilai suhu</th>
      </tr>

      <tr>
        <td>Celcius</td>
        <td><?= $celcius; ?></td>
        <td>Derajat</td>
      </tr>

      <tr>
        <td>Reamur</td>
        <td><?= $reamur; ?></td>
        <td>Derajat</td>
      </tr>

      <tr>
        <td>Ferenheit</td>
        <td><?= $ferenheit; ?></td>
        <td>Derajat</td>
      </tr>

    </table>

    <h5>Rumus : </h5>
<table cellspacing="0" cellpadding="15" border="1">
      <tr>
        <th>Tipe Suhu</th>
        <th>Rumus</th>
      </tr>

      <tr>
        <td>Celcius</td>
        <td><?= $angka.' - 273 = '. round($celcius); ?></td>
      </tr>
      
      <tr>
        <td>Reamur</td>
        <td><?= '(4:5) x ('.$angka.' - 273) + 0 = '. round($reamur); ?></td>
      </tr>

      <tr>
        <td>Ferenheit</td>
        <td><?= '(9:5) x ('.$angka.' - 0) + 32 = '. round($ferenheit); ?></td>
      </tr>

    </table>