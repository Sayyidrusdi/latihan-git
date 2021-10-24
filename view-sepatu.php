<html>
<head>
 <title>Form Input Toko Sepatu</title>
    </head>
    <body>
    <form action="<?=('sepatu/cetak'); ?>"
method="post">
    <table>
    <tr>
    <th colspan="3">
        Form Input Transaksi
    </th>
    </tr>
    <tr>
    <td colspan="3">
    <hr>
    </td>
    </tr>
        <tr>
           <th>Nama</th>
            <th>:</th>
            <td>
            <input type="text" name="nama" id="nama">
            </td>
        </tr>
        <tr>
            <th>No HP</th>
            <td>:</td>
            <td>
            <input type="text" name="no" id="no">
            </td>
        </tr>
        <tr>
            <th>Sepatu</th>
            <td>:</td>
            <td>
                <select name="merk" id="merk">
                    <option value="">Pilih Sepatu</option>
                    <option value="Nike Harga 375000">Nike</option>
                    <option value="Adidas Harga 300000">Adidas</option>
                    <option value="Kickers Harga 250000">Kickers</option>
                    <option value="Eiger Harga 275000">Eiger</option>
                    <option value="Bucherri Harga 400000">Bucherri</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Ukuran</th>
            <td>:</td>
            <td>
                <select name="ukuran" id="ukuran">
                    <option value="">Pilih Ukuran</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="Submit">
            </td>
    </tr>
    </table>
    </form>
</body>
</html