<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>رنگ تصادفی</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="description" content="یک رنگ تصادفی، نه چیزی بیشتر.">
    <meta name="author" content="علی پهلوان پور (shalip0919@gmail.com)">
    <meta property="og:title" content="رنگ تصادفی" />
    <meta property="og:description" content="یک رنگ تصادفی، نه چیزی بیشتر." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://randomcolour.com" />
    <meta property="og:image" content="icon.jpg" />
    <meta property="og:site_name" content="رنگ تصادفی" />
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">

    <style>
        * {
            cursor: pointer;
        }
    </style>

    <script>
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        function setBackgroundColor() {
            const color = getRandomColor();
            $('body').css('background-color', color);
            return color;
        }

        $(document).ready(function() {
            const color = setBackgroundColor();
            const userInput = window.prompt("کد رنگ : \n جهت تولید رنگ جدید تایید کنید \n علی پهلوان پور | www.AliPlvP.ir", color);

            if (userInput !== null) { // اگر کاربر روی OK کلیک کرده باشد
                window.location.reload(); // صفحه را دوباره بارگذاری کن
            }
            // اگر کاربر Cancel را کلیک کند، هیچ اتفاقی نمی‌افتد
        });


        // تنظیم رویداد کلیک برای بارگذاری صفحه
        $(document).on('click', function() {
            window.location.reload(); // صفحه را دوباره بارگذاری کن
        });
    </script>
</head>

<body></body>

</html>