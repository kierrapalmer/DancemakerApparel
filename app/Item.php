<?php
	namespace App;

	class Item {
		public function getItems($session){
			if(!$session->has("items")){
				$this->createDummyData($session);
			}
			return $session->get('items');
		}

		public function getItem($session, $id){
			if(!$session->has('items')) {
				$this->createDummyData($session);
			}
			return $session->get('items')[$id];

		}
		public function addItem($session, $name, $price, $category, $description, $imgUrl){
			if(!$session->has('items')) {
				$this->createDummyData($session);
			}
			$items = $session->get('items');
			array_push($items,
				['name' => $name, 'price' => $price, 'category' => $category, 'description' => $description, 'imgUrl' => $imgUrl]);
			$session->put('items', $items);
		}

		public function editItem($session, $id, $name, $price, $category, $description, $imgUrl){
			$items = $session->get('items');
			$items[$id] =
				['name' => $name, 'price' => $price, 'category' => $category, 'description' => $description, 'imgUrl' => $imgUrl];
			$session->put('items', $items);
		}

		private function createDummyData($session){
			$items = [
				[
					'name' => 'Canvas Split-Sole Ballet Shoe',
					'price' => '14.95',
					'category' => 'Shoes',
					'description' => 'Hand-stitched, arch-enhancing synthetic suede spilt sole ballet shoes',
					'imgUrl' => 'https://dqaecz4y0qq82.cloudfront.net/products/b20.jpg?preset=hero&404=y'
				],
				[
					'name' => 'Slip-On Jazz Shoe',
					'price' => '23.95',
					'category' => 'Shoes',
					'description' => 'Synthetic rubber sole with EVA front-foot patch and heel grip',
					'imgUrl' => 'https://dqaecz4y0qq82.cloudfront.net/products/b80.jpg?preset=hero&404=y'
				],
				[
					'name' => 'Balera Metallic Lace Back Panel Dress',
					'price' => '59.95',
					'category' => 'Dresses',
					'description' => 'Matte nylon/spandex leotard with fully-lined stretch metallic lace insets. Attached back panel power mesh skirt has raw edge',
					'imgUrl' => 'https://dqaecz4y0qq82.cloudfront.net/products/d11010.jpg?preset=hero'
				],
				[
					'name' => 'Streak Lace Mock Neck Dress',
					'price' => '54.95',
					'category' => 'Dresses',
					'description' => 'Streak lace dress with attached matte nylon/spandex leotard. Mock neck has snaps in back',
					'imgUrl' => 'https://dqaecz4y0qq82.cloudfront.net/products/d10125.jpg?preset=hero&404=y'
				],
				[
					'name' => 'Adult Convertable Tights',
					'price' => '5.95',
					'category' => 'Tights',
					'description' => 'Wear as a cropped tight or over the feet for coverage',
					'imgUrl' => 'https://dqaecz4y0qq82.cloudfront.net/products/t90.jpg?preset=hero&404=y'
				],
				[
					'name' => 'Adult Economy Fishnet Tights ',
					'price' => '6.95',
					'category' => 'Tights',
					'description' => 'Plenty of stretch. Dyed-to-match plush elastic waistband',
					'imgUrl' => 'https://dqaecz4y0qq82.cloudfront.net/products/t94.jpg?preset=hero&404=y'
				],

			];
			$session->put('items', $items);
		}
	}