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
        <td>Kelvin</td>
        <td><?= $kelvin; ?></td>
        <td>-</td>
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
        <td><?= '(5:9) x ('.$angka.' - 32) + 0 = ' . round($celcius); ?></td>
      </tr>

      <tr>
        <td>Reamur</td>
        <td><?= '(4:9) x ('.$angka.' - 32) + 0 = '. round($reamur); ?></td>
      </tr>

      <tr>
        <td>Kelvin</td>
        <td><?= '(5:9) x ('.$angka.' - 32) + 273 = '. round($kelvin); ?></td>
      </tr>
    </table>