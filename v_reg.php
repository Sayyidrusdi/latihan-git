<section> 
    <h1><?php echo $judul ?></h1>
    <html>
    <table>
        <tr>
           <th>Nim</th>
            <th>:</th>
            <td>
            <input type="text" name="nim" id="nim">
            </td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td>
            <input type="text" name="nama" id="nama">
            </td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td>
            <input type="text" name="alamat" id="alamat">
            </td>
        </tr>
        <tr>
            <th>Usia</th>
            <td>:</td>
            <td>
                <select name="usia" id="usia">
                    <option value="">pilih umur</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="18">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" value="Submit">
            </td>
    </tr>
    </table>
</html>
</section>