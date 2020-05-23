<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Products;
use Goutte\Client;

class ScrapService
{
    public function scrap(Request $request)
    {
        $client = new Client();
        $products = [];
        $today = time();
        $crawler = $client->request('GET', $request->link);
        $nodeValues = $crawler->filter('div.products.wrapper.grid.products-grid > ol.products.list.items > li.item.product.product-item')
            ->each(function ($node, $i) use ($products, $today) {
                $linkImage = $node->filter('img.product-image-photo')->attr('data-src');
                $products['Name'] = $node->filter('div.product.details.product-item-details > strong.product.name.product-item-name > a.product-item-link.one-liner > span')->text();
                $products['Price'] = $node->filter('span.price-container.price-final_price.tax > span.price-wrapper')->attr('data-price-amount');
                $products['ImageLink'] = null == $linkImage ? $node->filter('img.product-image-photo')->attr('src') : $linkImage;
                $products['CreatedAt'] = $today;
                return $products;
            });

        $save = Products::insert($nodeValues);

        return $save;
    }

}
