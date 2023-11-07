<html>

<head>
    <link <!-- div di seluruh halaman ini, di set seperi i block -->
    <style>
        div {
            color: green;
            font-weight: bold;
            text-align: right;
            color: blue;
        }

        .judulhalaman {
            text-align: center;
            font-size: large;
        }
    </style>


</head>

<body>
    <div class="judulhalaman">Selamat datang</div>
    <!--Inline CSS, digunakan ketika ada spesifik ke-1 bagian saja-->
    <p style="text-decoration: line-through;color:red
    ">Hallo apa kabar?</p>

    <!--Inpage CSS, digunakan ketika ada yang spesifik halaman khusus-->
    <div>Hallo apa kabar?</div>

    <!--External CSS, digunakan untuk format umum 1 website-->
    <span>Hallo apa kabar?</span>

</body>


</html>
