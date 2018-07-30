<?php

namespace App\Data;

class AttractionData
{
    private static $data = [
        1 => [
            'name' => 'london eye',
            'description' => 'A very large wheel',
            'images' => ['http://www.hotel-magazine.co.uk/wp-content/uploads/2014/06/London.jpg'],
        ],
        2 => [
            'name' => 'london bridge',
            'description' => 'This looks like it took a while to build.',
            'images' => ['https://www.telegraph.co.uk/content/dam/Travel/2017/October/facts-tower-bridge.jpg?imwidth=450', 'https://i.dailymail.co.uk/i/pix/2012/02/10/article-2099188-11AACF08000005DC-505_468x286.jpg'],
        ],
        3 => [
            'name' => 'scottish horses',
            'description' => 'Someone clearly had too much time on their hands.',
            'images' => ['https://i2-prod.scotlandnow.dailyrecord.co.uk/incoming/article4926376.ece/ALTERNATES/s1227b/The-Launch-of-the-Kelpies-Credit-Kenny-Lam.jpg'],
        ],
        4 => [
            'name' => 'kew gardens',
            'description' => 'That is a very nice garden. A bit big though.',
            'images' => ['https://i2-prod.mirror.co.uk/incoming/article1341150.ece/ALTERNATES/s615b/Kew-Gardens-London.jpg'],
        ],
        5 => [
            'name' => 'stonehenge',
            'description' => 'No one knows why this magnificent henge was built but I think it was because Dave lost a bet.',
            'images' => ['https://www.planetware.com/photos-large/ENG/england-stonehenge.jpg', 'https://i.pinimg.com/736x/74/a5/37/74a5374a3079043afeefe934b4666c3b--stone-age-the-stone.jpg'],
        ]
    ];

    public function getData($id) {
        return self::$data[$id];
    }

    public function getAllData() {
        return self::$data;
    }
}
