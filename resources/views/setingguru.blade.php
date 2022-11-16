<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home Admin</title>
	<link rel="stylesheet" href="css/setingguru.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
    
<div class="wrapper">
    <div class="sidebar">
        <h3><b>Siakad MAN 1 Malang</b></h3>
        <br>
        <section>
            <img src="/image/admin.png">
        </section>
        <div class="foto">
            Jess Amalia
        </div>
        <br><br><br>
        <ul>
            <hr>
            <li class="logout"><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a></li>
            <hr><br><br>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <div class="dropdown">
                <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Data Siswa</a></li>
                    <ul class="isi-dropdown">
                        <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Sub Menu 1</a></li>
                        <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Sub Menu 2</a></li>
                    </ul>
                </li>
            </div>
            <div class="dropdown">
                <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Data Guru</a></li>
                    <ul class="isi-dropdown">
                        <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Sub Menu 1</a></li>
                        <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Sub Menu 2</a></li>
                    </ul>
                </li>
            </div>
            <div class="dropdown">
                <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Jadwal</a></li>
                    <ul class="isi-dropdown">
                        <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Sub Menu 1</a></li>
                        <li><a href="#"><i class="fa-solid fa-pen-to-square"></i> Sub Menu 2</a></li>
                    </ul>
                </li>
            </div>
            <li><a href="#"><i class="fa-solid fa-pen-to-square"></i>Setting Guru</a></li>
        </ul> 
    </div>

    <div class="main_content">
        <div class="header">
            <a href=""><i class="fa-solid fa-bars"></i></a>
        </div>
        <div class="isi">
            <p class="judul"><b>Seting Guru > Mapel > Kelas</b></p>
            <br>
            <form>
                <label><b>Id Guru</b></label>
                <div>
                    <input type="text" class="isitext">
                </div>
            </form>
            <br><br>
            <form>
                <label><b>Nama Guru</b></label>
                <div>
                    <input type="text" class="isitext">
                </div>
            </form>
            <br><br>
            <form>
                <label><b>Pilih Mata Pelajaran</b></label>
                <div>
                    <input type="text" class="isitext">
                </div>
            </form>
            <br><br>
            <form>
                <label><b>Pilih Kelas</b></label>
                <div>
                    <input type="text" class="isitext">
                </div>
            </form>
            <br><br><br>
        </div>
        <div class="button">
            <a href=""><b>Submit</b></a>
        </div>
    </div>
</div>

</body>
</html>