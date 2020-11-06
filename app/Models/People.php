<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class People {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'YuXin Liu',
            'description' => 'Liu Yuxin was born on April 20, 1997 in Guizhou Province. She is a female singer in mainland China',
            'link' => 'https://baike.so.com/doc/5338868-5574309.html',
            'image' => 'liu.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'YuShu Xin',
            'description' => 'Yu Shuxin (born December 18, 1995 in Shanghai) is a Chinese actress',
            'link' => 'https://baike.so.com/doc/24208390-24795851.html',
            'image' => 'yushuxin.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'JiaQi Xu',
            'description' => 'Xu Jiaqi was born in Taizhou, Zhejiang province on August 27, 1995. She graduated from Shanghai Normal University. She is a female singer in mainland China',
            'link' => 'https://baike.so.com/doc/7050327-7273233.html',
            'image' => 'xu.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Yan Yu',
            'description' => 'Yu Yan was born in Beijing on May 26, 1997. She is a Chinese singer and actress',
            'link' => 'https://baike.so.com/doc/445480-471693.html',
            'image' => 'yuyan.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'KeYin Xie',
            'description' => 'Xie Keyin, born on January 4, 1997 in Sichuan Province, is a Chinese mainland female singer',
            'link' => 'https://baike.so.com/doc/29778164-31329380.html',
            'image' => 'xie.jpg',
        ],
             '6' => [
            'id' => 4,
            'name' => 'Qi An',
            'description' => 'AnQi was born in Chongqing on May 13,1996. She is a Chinese mainland pop singer',
            'link' => 'https://baike.so.com/doc/28454680-29889754.html',
            'image' => 'anqi.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
