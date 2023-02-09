<?php
include __DIR__ . '/../model/ProductCat.php';
include __DIR__ . '/../model/Category.php';
include __DIR__ . '/../model/ToyCat.php';
include __DIR__ . '/../model/AccessoryCat.php';
include __DIR__ . '/../model/FoodCat.php';

$category = [
    'dog' => new Category('Cane', '<i class="fa-sharp fa-regular fa-shield-dog"></i>'),
    'cat' => new Category('Gatto', '<i class="fa-sharp fa-solid fa-shield-cat"></i>'),
    'bird' => new Category('Pennuti', '<i class="fa-brands fa-earlybirds"></i>'),
    'fish' => new Category('Pesci', '<i class="fa-regular fa-sushi"></i>'),
    'amphybia' => new Category('Anfibi', '<i class="fa-sharp fa-solid fa-turtle"></i><i class="fa-solid fa-pizza-slice"></i>')
];

$product = [
    new FoodCat('Royal Canin Mini Adult', 43.99, 'https://m.media-amazon.com/images/I/610V5yI-3yL._AC_SX522_.jpg', $category['dog'], 8000, 'Manzo/Pollo Carote Sedano'),
    new FoodCat('Almo Nature Holistic Maintenance', 34.99, 'https://www.zooplanetvergato.it/wp-content/uploads/2022/11/744_EXE_12KG_DOG-600x600-1.jpg', $category['dog'], 5000, 'Tonno Riso'),
    new FoodCat('Almo Nature Daily Lattina', 4.99, 'https://www.ilmondopet.it/images/thumbs/0001865_almo-nature-umido-daily-menu-gatto-con-manzo-400gr_510.jpeg', $category['cat'], 400, 'Pollo carote sedano'),
    new FoodCat('Tartu Gamberetti', 18.99, 'https://static.wixstatic.com/media/40eb25_4be89889e63f49899783ed9af86a3750~mv2.png/v1/fit/w_500,h_500,q_90/file.png', $category['amphybia'], 190, 'Gamberetto essiccato'),
    new FoodCat('Tetra-Goldfish-Granules', 7.99, 'https://m.media-amazon.com/images/I/81IO30gMFUL._AC_SY741_.jpg', $category['fish'], 250, 'ND'),
    new FoodCat('Dehner Natura - Mangime per Uccelli Selvatici', 19.99, 'https://m.media-amazon.com/images/I/81Qss4qfGbL._AC_SL1500_.jpg', $category['bird'], 3000, 'Semi Vari'),
    new AccessoryCat('Voliera Wilma', 169.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/257149/voliera-per-uccelli-hemmy.jpg?v=1762045843', $category['bird'], 'Legno/ferro', '84,5 x 65,5 x h 165', 'No'),
    new AccessoryCat('Cartucce Filtranti per Filtro EasyCrystal', 5.90, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg?v=1762132134', $category['fish'], 'Carbonio', '8,5 x 6,5 x 15', 'No'),
    new AccessoryCat('Pettorina con Guinzaglio', 19.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/256782/zolux-pettorina-guinzaglio-gatto-blu.jpg?v=1762132509', $category['cat'], 'Nylon', '120', 'No'),
    new AccessoryCat('Guinzaglio Outdoor', 16.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/270444/guinzaglio-outdoor-rosso.jpg?v=1762202066', $category['dog'], 'Nylon/Pelle', '160', 'No'),
    new AccessoryCat('Zolux AQUATERRARIUM', 89.99, 'https://m.media-amazon.com/images/I/61WNLuja15L._AC_SL1200_.jpg', $category['amphybia'], 'Vetro/Ferro', '65.8 x 33.6 x 27.4', 'No'),
    new ToyCat('Camon Gioco Topino Peluche', 1.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/223638/camon-gatto-gioco-topino-peluche-coda-corda.jpg?v=1757378210', $category['cat'], '5 x 4 x 3', 'Cotone'),
    new ToyCat('Yes Corda per Cane', 7.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/269127/yes-gioco-corda-cane-60cm-bianca.jpg?v=1762161669', $category['dog'], '50', 'Cotone'),
    new ToyCat('Altalena ad Arco per Uccelli', 1.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/257233/5891.jpg?v=1761181847', $category['bird'], '15 x 14', 'legno/ferro')
];
