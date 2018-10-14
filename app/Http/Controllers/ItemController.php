<?php

	namespace App\Http\Controllers;

	use App\Item;
	use Illuminate\Http\Request;
	use Illuminate\Session\Store;

	class ItemController extends Controller {
		public function getIndex(Store $session) {
			$item = new Item();
			$items = $item->getItems($session);
			return view('store.index', ['items' => $items]);
		}

		public function getItem(Store $session, $id) {
			$item = new Item();
			$item = $item->getItem($session, $id);
			return view('store.detail', ['item' => $item]);
		}


		public function getAdminIndex(Store $session) {
			$item = new item();
			$items = $item->getitems($session);
			return view('admin.index', ['items' => $items]);
		}

		public function getAdminCreate() {
			return view('admin.create');
		}

		public function getAdminEdit(Store $session, $id) {
			$item = new item();
			$item = $item->getitem($session, $id);
			return view('admin.edit', ['item' => $item, 'itemId' => $id]);
		}

		public function postAdminCreate(Store $session, Request $request) {
			$this->validate($request, [
				'name' => 'required|min:5',
				'description' => 'required|min:10',
				'category' => 'required'
			]);
			$item = new item();
			$item->additem($session,
				$request->input('name'),
				$request->input('price'),
				$request->input('category'),
				$request->input('description'),
				$request->input('imgUrl'));
			return redirect()->route('admin.index')
				->with('info', $request->input('name'). ' item created' );
		}

		public function postAdminUpdate(Store $session, Request $request) {
			$this->validate($request, [
				'name' => 'required|min:5',
				'description' => 'required|min:10',
				'category' => 'required'
			]);
			$item = new item();
			$item->edititem($session,
				$request->input('id'),
				$request->input('name'),
				$request->input('price'),
				$request->input('category'),
				$request->input('description'),
				$request->input('imgUrl'));
			return redirect()->route('admin.index')
				->with('info', $request->input('name'). ' item updated' );
		}
	}
