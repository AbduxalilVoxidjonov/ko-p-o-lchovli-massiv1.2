<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .card {
            flex: 0 1 calc(20% - 20px);
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }
        .card-header {
            padding: 15px;
            background-color: #007BFF;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
        }
        .card-content {
            padding: 15px;
        }
        .card-content p {
            margin: 10px 0;
            font-size: 14px;
            color: #555;
        }
        .card-footer {
            padding: 10px 15px;
            background-color: #f4f4f4;
            font-size: 13px;
            color: #777;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Blog postlar ma'lumotlari ochl uchun 
    $blogPosts= [
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],
            [
                "title" => "Kompyuter Texnologiyalarining Rivojlanishi",
                "created_at" => "2024-11-10",
                "author" => "Tech Guru",
                "visited" => 150,
                "characteristics" => "Yangi kompyuter texnologiyalari nafaqat bizning ish faoliyatimizni o'zgartiribgina qolmay, balki butun hayot tarzimizni ham yangilamoqda. Masalan, sun'iy intellekt, mashinani o'rganish va bulutli texnologiyalar bilan yangilanayotgan tizimlar haqida gaplashamiz."
            ],


 

    ];
    foreach ($blogPosts as $post) {
        $title = htmlspecialchars($post['title']);
        $content = htmlspecialchars(substr($post['characteristics'], 0, 100)) . '...';
        $author = htmlspecialchars($post['author']);
        $date = date('d-m-Y', strtotime($post['created_at']));
        $visited = htmlspecialchars($post['visited']);
        ?>
        <div class="card">
            <div class="card-header"><?= $title ?></div>
            <div class="card-content">
                <p><?= $content ?></p>
            </div>
            <div class="card-footer">
                <span>Muallif: <?= $author ?></span>
                <span>Sana: <?= $date ?></span>
                <span>Ko'rilgan: <?= $visited ?></span>
            </div>
        </div>
    <?php
    }
    ?>
</div>

</body>
</html>
