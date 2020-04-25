<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Pemrograman Web 2 | NIM GANJIL</title>

    <style>

            body{
                margin:0;
                padding:0;
                font-family:'calibri';
            }

            div.background-header{
                background-color:#2aad2a;
                width:100%;
                height:100px;
                position:absolute;
                top:0;
                
            }
            div.background-header > h3 {
                text-align:left;
                padding-left:30px;

                color:white;
                font-family:'calibri';
                font-size:30px
            }      
            div.content {
                width: 80%;
                padding: 40px;
            }
            .footer {
                    padding: 20px;
                    text-align:center;
            }

    </style>

</head>
<body>

    <section>
        <header>
            <div class="background-header">
                <h3>Input data pasien virus covid-19</h3>
            </div>
        </header>
    </section>
    <section style="margin-top:100px; margin-bottom:50px;">
        <main>
            <div class="content">
                <form action="proses.php" method="post" enctype="multipart/form-data" name="form1">
                    <table border="0px" width="100%" cellpadding="10px">
                        <thead> 
                            <tr >
                                <th colspan="7">
                                    <p style="text-align:left; padding-left:0px;font-size:30px;font-family:calibri;">Form Input</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label> Nama Operator </label>
                                </td>
                                <td>
                                    :
                                </td>  
                                <td>
                                   <input type="text" name="operator" size="50px">
                                </td>  
                            </tr>
                            <tr>
                                <td>
                                    <label> Nim Mahasiswa </label>
                                </td>
                                <td>
                                    :
                                </td>  
                                <td>
                                   <input type="text" name="nim" size="50px">
                                </td>  
                            </tr>
                            <tr>
                                <td>
                                    <label> Nama Wilayah  </label>
                                </td>
                                <td>
                                    :
                                </td>  
                                <td>
                                    <select name="wilayah" >
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Banten">Banten</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                    </select>
                                </td>  
                            </tr>
                            <tr>
                                <td>
                                    <label> Jumlah Positif </label>
                                </td>
                                <td>
                                    :
                                </td>  
                                <td>
                                   <input type="text" name="j_positif" size="50px">
                                </td>  
                            </tr>
                            <tr>
                                <td>
                                    <label> Jumlah Dirawat </label>
                                </td>
                                <td>
                                    :
                                </td>  
                                <td>
                                   <input type="text" name="j_dirawat" size="50px">
                                </td>  
                            </tr>
                            <tr>
                                <td>
                                    <label> Jumlah Sembuh </label>
                                </td>
                                <td>
                                    :
                                </td>  
                                <td>
                                   <input type="text" name="j_sembuh" size="50px">
                                </td>  
                            </tr>
                            <tr>
                                <td>
                                    <label> Jumlah Meninggal </label>
                                </td>
                                <td>
                                    :
                                </td>  
                                <td>
                                   <input type="text" name="j_meninggal" size="50px">
                                </td>  
                            </tr>
                            <tr>

                                <td>&nbsp;</td>

                                <td colspan="7"><input type="submit" value="Submit" name="submit">

                                <input type="reset" value="reset" name="reset"></td>

                            </tr>
                           
                        </tbody>
                    </table>
                </form>
            </div>
        </main>
    </section>
    <section>
        <footer>
            <div class="footer">
                @copyRight : 2020 Fikri Mutaqin 171011401487
            </div>
        </footer>
    </section>
    
</body>
</html>

