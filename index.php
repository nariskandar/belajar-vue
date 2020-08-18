<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar - Vue JS</title>
</head>
<body>
    <h3>Belajar</h3>
    
    <div id="biodata">
        <span>{{nama}}</span>
        <br>
        <span>{{hobi}}</span>
    </div>

    <div id="artikel">
  <span v-bind:title="pesan">
    Arahkan mouse Anda kesini dan tunggu dalam beberapa detik
    untuk melihat judul pesan yang dinamis
  </span>
</div>

    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="myscript.js"></script>
</body>
</html>