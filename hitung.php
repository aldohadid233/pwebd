<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>
      COBA
    </title>
    <body>
      
<form method="POST" action="aksi1.php" enctype="multipart/form-data">

	<label>
    Tinggi Badan :
  </label>
          <input name="tinggibadan" placeholder="dalam cm" type="number" required /><p></p>
      
       <label>
        Berat Badan :
      </label>
          <input name="beratbadan" placeholder="dalam kg" type="number"  required /><p></p>
       
       <label>
        Usia :
      </label>

          <input name="usia"  type="number" placeholder="dalam tahun"  required /><p></p>
      

        <label>Aktivitas :</label>
           <select name="aktivitas" required />
             <option value="sedentary">Sedentary (Pekerja Kantoran/Mahasiswa</option>
              <option value="sedang">Sedang (Guru/Dosen/Tukang Antar Barang)</option>
               <option value="berat">Berat (Atlit)</option></select>
      <p></p>
       <label>Kelamin :</label>
           <select name="kelamin" required />
             <option value="pria">PRIA</option>
              <option value="wanita">WANITA</option></select>


<br><br><br>

          <input type="reset" name="reset" value="RESET">
          <input type="submit" name="hitung" value="HITUNG">
        </form>
          </body>
      </head>
</form></div></div></div></div>