<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CSS dan JavaScript</title>

    <link rel="stylesheet" href="style.css">

    <style>
     .sembunyi{
        display: none;
     }
    .kotak-info{
        background-color: #5cdb91;
        padding: 15px;
        margin: 10px;
        border: 2px solid rgb(131, 23, 240);
        border-radius: 6px;
    }

    </style>

</head>
<body>
    
    <div class="flex-center">
        <div class="kartu-profile">
            <h2>Aisyah Anggun</h2>
            <p>Web Desain</p>
            <button onclick="info()" class="btn-detail">Info Lengkap</button>
        </div>
</div>

<div class="kotak-info sembunyi">
    <h1>Informasi Detail</h1>
</div>


<script>
    function info(){
        alert("Tombol Lengkap di ke click");
    }
</script>
</body>
</html>