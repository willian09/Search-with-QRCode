<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body style="background-size: cover; background-image: url('https://previews.123rf.com/images/druzhinina/druzhinina1611/druzhinina161100020/66059646-verticali-confini-senza-soluzione-di-continuit%C3%A0-di-icone-di-birra-su-sfondo-nero-illustrazione-di.jpg')">
    <div class="container" style="background-color:rgb(148, 148, 148); height:1000px; padding: 0; width:80%">
        <livewire:nav-bar />
        {{ $slot }}
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const barcodeInput = document.getElementById('barcode-input');
            const searchButton = document.getElementById('search-button');

            barcodeInput.addEventListener('keyup', function(event) {
                if (event.key === 'Enter') {
                    searchButton.click();
                }
            });

            barcodeInput.addEventListener('change', function() {
                searchButton.click();
            });
        });
    </script>

</body>

</html>
