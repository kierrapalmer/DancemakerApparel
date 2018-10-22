<?php

	namespace App\Http\Controllers;

	use App\Item;
	use Illuminate\Http\Request;
	use Illuminate\Session\Store;

	class ItemController extends Controller {
		public function getIndex() {
			$items =  Item::orderBy('created_at')->paginate(3);
			return view('store.index', ['items' => $items]);
		}

		public function getItem($id) {
			$item = Item::where('id', '=', $id)->first();

			return view('store.detail', ['item' => $item]);
		}


		public function getAdminIndex() {
			$items =  Item::orderBy('category', 'asc')->get();
			return view('admin.index', ['items' => $items]);
		}

		public function getAdminCreate() {

			return view('admin.create');
		}

		public function getAdminEdit($id) {
			$item = Item::find($id);
			return view('admin.edit', ['item' => $item, 'itemId' => $id]);

		}

		public function postAdminCreate(Request $request) {
			$this->validate($request, [
				'name' => 'required|min:5',
				'description' => 'required|min:10',
				'category' => 'required'
			]);
			$item = new Item([
				'name' => $request->input('name'),
				'price' => $request->input('price'),
				'category' => $request->input('category'),
				'description' => $request->input('description'),
				'imgUrl' => $request->input('imgUrl')
			]);
			$item->save();

			return redirect()->route('admin.index')->with('info', 'item created, Title is: ' . $request->input('name'));

		}

		public function postAdminUpdate(Request $request) {
			$this->validate($request, [
				'name' => 'required|min:5',
				'description' => 'required|min:10',
				'category' => 'required'
			]);
			$item = Item::find($request->input('id'));
			$item->name = $request->input(['name']);
			$item->price = $request->input(['price']);
			$item->category = $request->input(['category']);
			$item->description = $request->input(['description']);
			$item->imgUrl = $request->input(['imgUrl']);
			$item->save();
			return redirect()->route('admin.index')->with('info', 'item edited, new Title is: ' . $request->input('name'));

		}

		public function getAdminDelete($id){
			$item = Item::find($id);
			$item->delete();
			return redirect()->route('admin.index')->with('info', 'Post Deleted');
		}
	}
