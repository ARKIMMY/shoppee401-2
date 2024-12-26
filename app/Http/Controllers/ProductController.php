<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia; //ใช้ของ inertia
use Inertia\Response;


class ProductController extends Controller
{

    private $products = [['id' => 1, 'name' => 'Bouclé-knit cardigan',
            'description' => 'Bouclé-knit cardigan',
            'price' => 1399,
            'imageSRC'=> 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/zoom/526beefb51e3f277a790db96f66de4d6bfb5b461_xxl-1.jpg'],
        ['id' => 2, 'name' => 'Cable-knit cardigan',
            'description' => 'Cable-knit cardigan',
            'price' => 1399,
            'imageSRC' => 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/33e3565033eee03809c30c8639d4f63b81dadd36_xxl-1.jpg'],
        ['id' => 3, 'name' => 'Rib-knit cardigan',
            'description' => 'Rib-knit cardigan',
            'price' => 1099,
            'imageSRC' => 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/zoom/eeb1d3d116d617388691d50825b0616a68eedeca_xxl-1.jpg'],
        ['id' => 4, 'name' => 'Button-front denim dress',
            'description' => 'Button-front denim dress',
            'price' => 999,
            'imageSRC' => 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/838612fc1def1fff5c19dd4e8e948e0e401314b6_xxl-1.jpg'],
        ['id' => 5, 'name' => 'Strap-detail tote bag',
            'description' => 'Strap-detail tote bag',
            'price' => 1399,
            'imageSRC' => 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/zoom/997158ed2ba8192541cc5606b5ac8bb3322036ba_xxl-1.jpg'],
        ['id' => 6, 'name' => 'เสื้อยืดผ้าถักลาย',
            'description' => 'เสื้อยืดผ้าถักลาย',
            'price' => 399,
            'imageSRC' => 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/8a2ede436735e73291567a200370a242db98edc1_xxl-1.jpg'],
        ['id' => 7, 'name' => 'เสื้อยืดผ้าถักลาย',
            'description' => 'เสื้อยืดผ้าถักลาย',
            'price' => 200,
            'imageSRC' => 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/dd2229e17cc7aeb2d41001cdd0a02cb391772f42_xxl-1.jpg'],
        ['id' => 8, 'name' => 'เสื้อยืดผ้าถักลาย',
            'description' => 'เสื้อยืดผ้าถักลาย',
            'price' => 399,
            'imageSRC' => 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/128dd5e5b01c077c61a8fce92dc90e92f3940dcb_xxl-1.jpg'],
        ['id' => 9, 'name' => 'Crossbody bag',
            'description' => 'Crossbody bag',
            'price' => 1099,
            'imageSRC' => 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/b6dc1bbd0aad3a2e119b7c20fa57d2b2ae14385f_xxl-1.jpg'],
        ['id' => 10, 'name' => 'Crossbody bag',
            'description' => 'Crossbody bag',
            'price' => 999,
            'imageSRC' => 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/0fdfc087ce4e875d5a1f26c59a9aff9d75da9614_xxl-1.jpg'],
        ];


    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Products/Index', ['products' => $this->products]);
        //ส่งข้อมูลรายการสินค้า $this->products ไปในรูปแบบ key-value pair
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}