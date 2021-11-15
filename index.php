<html>
<head>
    <title>Tugas Praktikum</title>
</head>
<body>
    <section>
        <div>
            <p><b>Harga Buah Perkilo</b></p>
            <form action="webbelanja.php" method="POST" id="belanja" name="belanja" >
                <tr align="center">
							<td><label >Mangga</label></td>
							<td><label >Rp. 15.000</label></td>
                </tr>
                <input type="number" id="mangga" onchange="nilai()" name="mangga">
                <label>kg</label> <br>
                <tr align="center">
							<td><label >Jambu</label></td>
							<td><label >Rp. 13.000</label></td>
                </tr>
                <input type="number" id="jambu" onchange="nilai()" name="jambu">
                <label>kg</label> <br>
                <tr align="center">
							<td><label >Salak</label></td>
							<td><label >Rp. 10.000</label></td>
                </tr>
                <input type="number" id="salak" onchange="nilai()" name="salak">
                <label>kg</label> <br>
                <button type="submit" name="">Pesan</button><br>
                <label for="">Total Pesanan : </label>
                <input type="text" id="total" name="total" readonly> <br>
                
            </form>
        </div>

    </section>
</body>
<script>
    function nilai(){
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        var total = document.getElementById("total");
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
    
</script>
</html>